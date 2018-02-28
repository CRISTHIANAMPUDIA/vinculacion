<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlanRiesgos
 * @package App\Models
 * @version January 22, 2018, 4:53 pm UTC
 *
 * @property \App\Models\Tipoabono tipoabono
 * @property \App\Models\Tipocontrolplaga tipocontrolplaga
 * @property \App\Models\Unidadproduccion unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasPeligros
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipofuentes
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTopologia
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTradicion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasUsotierra
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasGrupoalimentosproductos
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasOrigeningresos
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoagricultura
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoalimentos
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoalimentosconsumo
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoanimales
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipocultivos
 * @property \Illuminate\Database\Eloquent\Collection tallerHasTipodesecho
 * @property \Illuminate\Database\Eloquent\Collection tallerHasTiporiesgos
 * @property \Illuminate\Database\Eloquent\Collection Trabajadore
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property \Illuminate\Database\Eloquent\Collection usosvegetacionHasAreainfluenciaHasTipovegetal
 * @property string feriaAgricola
 * @property string semillasPropias
 * @property float ConsumoPropio
 * @property float salarioFueraFinca
 * @property integer productosGeneradosVendidos
 * @property integer TipoAbono_id
 * @property integer TipoControlPlaga_id
 * @property integer UnidadProduccion_id
 */
class PlanRiesgos extends Model
{
    use SoftDeletes;

    public $table = 'planriesgos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'feriaAgricola',
        'semillasPropias',
        'ConsumoPropio',
        'salarioFueraFinca',
        'productosGeneradosVendidos',
        'TipoAbono_id',
        'TipoControlPlaga_id',
        'UnidadProduccion_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                         => 'integer',
        'feriaAgricola'              => 'string',
        'semillasPropias'            => 'string',
        'ConsumoPropio'              => 'float',
        'salarioFueraFinca'          => 'float',
        'productosGeneradosVendidos' => 'integer',
        'TipoAbono_id'               => 'integer',
        'TipoControlPlaga_id'        => 'integer',
        'UnidadProduccion_id'        => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoabono()
    {
        return $this->belongsTo(\App\Models\Tipoabono::class, 'TipoAbono_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipocontrolplaga()
    {
        return $this->belongsTo(\App\Models\Tipocontrolplaga::class, 'TipoControlPlaga_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function unidadproduccion()
    {
        return $this->belongsTo(\App\Models\Unidadproduccion::class, 'UnidadProduccion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function grupoalimentosproductos()
    {
        return $this->belongsToMany(\App\Models\Grupoalimentosproductos::class, 'planriesgos_has_grupoalimentosproductos', 'planriesgos_id', 'GrupoAlimentosProductos_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function origeningresos()
    {
        return $this->belongsToMany(\App\Models\Origeningresos::class, 'planriesgos_has_origeningresos', 'planriesgos_id', 'origeningresos_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipoagriculturas()
    {
        return $this->belongsToMany(\App\Models\Tipoagricultura::class, 'planriesgos_has_tipoagricultura', 'planriesgos_id', 'tipoagricultura_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipoalimentos()
    {
        return $this->belongsToMany(\App\Models\Tipoalimentos::class, 'planriesgos_has_tipoalimentos', 'planriesgos_id', 'tipoalimentos_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipoalimentosconsumos()
    {
        return $this->belongsToMany(\App\Models\Tipoalimentosconsumo::class, 'planriesgos_has_tipoalimentosconsumo', 'planriesgos_id', 'tipoalimentosconsumo_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipoanimales()
    {
        return $this->belongsToMany(\App\Models\Tipoanimales::class, 'planriesgos_has_tipoanimales', 'planriesgos_id', 'tipoanimales_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipocultivos()
    {
        return $this->belongsToMany(\App\Models\Tipocultivos::class, 'planriesgos_has_tipocultivos', 'planriesgos_id', 'tipocultivos_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function trabajadores()
    {
        return $this->hasMany(\App\Models\Trabajadore::class);
    }
}
