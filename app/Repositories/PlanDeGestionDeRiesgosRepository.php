<?php

namespace App\Repositories;

use App\Models\PlanDeGestionDeRiesgos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanDeGestionDeRiesgosRepository
 * @package App\Repositories
 * @version March 15, 2018, 6:19 pm UTC
 *
 * @method PlanDeGestionDeRiesgos findWithoutFail($id, $columns = ['*'])
 * @method PlanDeGestionDeRiesgos find($id, $columns = ['*'])
 * @method PlanDeGestionDeRiesgos first($columns = ['*'])
*/
class PlanDeGestionDeRiesgosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'TipoAbono_id',
        'TipoControlPlaga_id',
        'TipoCultivos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanDeGestionDeRiesgos::class;
    }
}
