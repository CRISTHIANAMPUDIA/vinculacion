<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoDesechotRequest;
use App\Http\Requests\UpdateTipoDesechotRequest;
use App\Repositories\TipoDesechotRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoDesechotController extends AppBaseController
{
    /** @var  TipoDesechotRepository */
    private $tipoDesechotRepository;

    public function __construct(TipoDesechotRepository $tipoDesechotRepo)
    {
        $this->tipoDesechotRepository = $tipoDesechotRepo;
    }

    /**
     * Display a listing of the TipoDesechot.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoDesechotRepository->pushCriteria(new RequestCriteria($request));
        $tipoDesechots = $this->tipoDesechotRepository->all();

        return view('tipo_desechots.index')
            ->with('tipoDesechots', $tipoDesechots);
    }

    /**
     * Show the form for creating a new TipoDesechot.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_desechots.create');
    }

    /**
     * Store a newly created TipoDesechot in storage.
     *
     * @param CreateTipoDesechotRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoDesechotRequest $request)
    {
        $input = $request->all();

        $tipoDesechot = $this->tipoDesechotRepository->create($input);

        Flash::success('Guardado exitosamente.');

        return redirect(route('tipoDesechots.index'));
    }

    /**
     * Display the specified TipoDesechot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoDesechot = $this->tipoDesechotRepository->findWithoutFail($id);

        if (empty($tipoDesechot)) {
            Flash::error('No se ha encontrado');

            return redirect(route('tipoDesechots.index'));
        }

        return view('tipo_desechots.show')->with('tipoDesechot', $tipoDesechot);
    }

    /**
     * Show the form for editing the specified TipoDesechot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoDesechot = $this->tipoDesechotRepository->findWithoutFail($id);

        if (empty($tipoDesechot)) {
            Flash::error('No se ha encontrado');

            return redirect(route('tipoDesechots.index'));
        }

        return view('tipo_desechots.edit')->with('tipoDesechot', $tipoDesechot);
    }

    /**
     * Update the specified TipoDesechot in storage.
     *
     * @param  int              $id
     * @param UpdateTipoDesechotRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoDesechotRequest $request)
    {
        $tipoDesechot = $this->tipoDesechotRepository->findWithoutFail($id);

        if (empty($tipoDesechot)) {
            Flash::error('No se he econtrado');

            return redirect(route('tipoDesechots.index'));
        }

        $tipoDesechot = $this->tipoDesechotRepository->update($request->all(), $id);

        Flash::success('Actualizado exitosamente.');

        return redirect(route('tipoDesechots.index'));
    }

    /**
     * Remove the specified TipoDesechot from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoDesechot = $this->tipoDesechotRepository->findWithoutFail($id);

        if (empty($tipoDesechot)) {
            Flash::error('No se ha encontrado');

            return redirect(route('tipoDesechots.index'));
        }

        $this->tipoDesechotRepository->delete($id);

        Flash::success('Eliminado  exitosamente.');

        return redirect(route('tipoDesechots.index'));
    }
}
