<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAreainfluenciaRequest;
use App\Http\Requests\UpdateAreainfluenciaRequest;
use App\Repositories\AreainfluenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\TipoTerreno;
use App\Models\CalidadAire;

class AreainfluenciaController extends AppBaseController
{
    /** @var  AreainfluenciaRepository */
    private $areainfluenciaRepository;

    public function __construct(AreainfluenciaRepository $areainfluenciaRepo)
    {
        $this->areainfluenciaRepository = $areainfluenciaRepo;
    }

    /**
     * Display a listing of the Areainfluencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areainfluenciaRepository->pushCriteria(new RequestCriteria($request));
        $areainfluencias = $this->areainfluenciaRepository->all();

        return view('areainfluencias.index')
            ->with('areainfluencias', $areainfluencias);
    }

    /**
     * Show the form for creating a new Areainfluencia.
     *
     * @return Response
     */
    public function create()
    {
        $tipoterreno=TipoTerreno::all()->pluck('nombre','id');
        $calidadaire=CalidadAire::all()->pluck('nombre','id');
        return view('areainfluencias.create',['tipoterreno'=>$tipoterreno],['calidadaire'=>$calidadaire]);
    }

    /**
     * Store a newly created Areainfluencia in storage.
     *
     * @param CreateAreainfluenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateAreainfluenciaRequest $request)
    {
        $input = $request->all();

        $areainfluencia = $this->areainfluenciaRepository->create($input);

        Flash::success('Areainfluencia saved successfully.');

        return redirect(route('areainfluencias.index'));
    }

    /**
     * Display the specified Areainfluencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areainfluencia = $this->areainfluenciaRepository->findWithoutFail($id);

        if (empty($areainfluencia)) {
            Flash::error('Areainfluencia not found');

            return redirect(route('areainfluencias.index'));
        }

        return view('areainfluencias.show')->with('areainfluencia', $areainfluencia);
    }

    /**
     * Show the form for editing the specified Areainfluencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoterreno=TipoTerreno::all()->pluck('nombre','id');
        $calidadaire=CalidadAire::all()->pluck('nombre','id');
        $areainfluencia = $this->areainfluenciaRepository->findWithoutFail($id);

        if (empty($areainfluencia)) {
            Flash::error('Areainfluencia not found');

            return redirect(route('areainfluencias.index'));
        }

        return view('areainfluencias.edit')->with('areainfluencia', $areainfluencia)->with('tipoterreno',$tipoterreno)->with('calidadaire',$calidadaire);
    }

    /**
     * Update the specified Areainfluencia in storage.
     *
     * @param  int              $id
     * @param UpdateAreainfluenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreainfluenciaRequest $request)
    {
        $areainfluencia = $this->areainfluenciaRepository->findWithoutFail($id);

        if (empty($areainfluencia)) {
            Flash::error('Areainfluencia not found');

            return redirect(route('areainfluencias.index'));
        }

        $areainfluencia = $this->areainfluenciaRepository->update($request->all(), $id);

        Flash::success('Areainfluencia updated successfully.');

        return redirect(route('areainfluencias.index'));
    }

    /**
     * Remove the specified Areainfluencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areainfluencia = $this->areainfluenciaRepository->findWithoutFail($id);

        if (empty($areainfluencia)) {
            Flash::error('Areainfluencia not found');

            return redirect(route('areainfluencias.index'));
        }

        $this->areainfluenciaRepository->delete($id);

        Flash::success('Areainfluencia deleted successfully.');

        return redirect(route('areainfluencias.index'));
    }
}
