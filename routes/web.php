<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('storetipodesecho/{taller}',array('uses' => 'TallerController@storeTipoDesecho', 'as' => 'storeTipoDesecho'));

Route::delete('deletetipodesecho/{taller}/{id}',array('uses' => 'TallerController@destroyTipoDesecho', 'as' => 'destroyTipoDesecho'));

Route::post('storetiporiesgos/{taller}',array('uses' => 'TallerController@storeTipoRiesgos', 'as' => 'storeTipoRiesgos'));

Route::delete('deleteTipoRiesgos/{taller}/{id}',array('uses' => 'TallerController@destroyTipoRiesgos', 'as' => 'destroyTipoRiesgos'));


Route::post('storetipovegetal/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeTipoVegetal', 'as' => 'storeTipoVegetal'));

Route::delete('deletetipovegetal/{areainfluencia}/{id}',array('uses' => 'AreainfluenciaController@destroyTipoVegetal', 'as' => 'destroyTipoVegetal'));


Route::post('storereligion/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeReligion', 'as' => 'storeReligion'));

Route::delete('deletereligion/{areainfluencia}/{id}',array('uses' => 'AreainfluenciaController@destroyReligion', 'as' => 'destroyReligion'));


Route::post('storetipofuentes/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeTipoFuentes', 'as' => 'storeTipoFuentes'));

Route::delete('deletetipofuentes/{areainfluencia}/{id}',array('uses' => 'AreainfluenciaController@destroyTipoFuentes', 'as' => 'destroyTipoFuentes'));


Route::post('storeusotierra/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeUsoTierra', 'as' => 'storeUsoTierra'));

Route::delete('deleteusotierra/{areainfluencia}/{id}',array('uses' => 'AreainfluenciaController@destroyUsoTierra', 'as' => 'destroyUsotierra'));


Route::post('storelenguaje/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeLenguaje', 'as' => 'storeLenguaje'));

Route::delete('deletelenguaje/{areainfluencia}/{id}',array('uses' => 'AreainfluenciaController@destroyLenguaje', 'as' => 'destroyLenguaje'));


Route::post('storetradicion/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeTradicion', 'as' => 'storeTradicion'));

Route::delete('deletetradicion/{areainfluencia}/{id}',array('uses' => 'AreainfluenciaController@destroyTradicion', 'as' => 'destroyTradicion'));


Route::post('storepeligros/{areainfluencia}', array('uses' => 'AreainfluenciaController@storePeligros', 'as' => 'storePeligros'));

Route::delete('deletepeligros/{areainfluencia}/{id}',array('uses' => 'AreainfluenciaController@destroyPeligros', 'as' => 'destroyPeligros'));


Route::post('storetopologia/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeTopologia', 'as' => 'storeTopologia'));

Route::delete('deletetopologia/{areainfluencia}/{id}',array('uses' => 'AreainfluenciaController@destroyTopologia', 'as' => 'destroyTopologia'));




Route::post('storetipocultivos/{planriesgos}', array('uses' => 'PlanRiesgosController@storeTipoCultivos', 'as' => 'storeTipoCultivos'));

Route::delete('deleteTipoCultivos/{planriesgos}/{id}',array('uses' => 'PlanRiesgosController@destroyTipoCultivos', 'as' => 'destroyTipoCultivos'));



Route::post('storetipoalimentos/{planriesgos}', array('uses' => 'PlanRiesgosController@storeTipoAlimentos', 'as' => 'storeTipoAlimentos'));

Route::delete('deletetipoalimentos/{planRiesgos}/{id}',array('uses' => 'PlanRiesgosController@destroyTipoAlimentos', 'as' => 'destroyTipoAlimentos'));


Route::post('storetipoalimentosconsumo/{planriesgos}', array('uses' => 'PlanRiesgosController@storeTipoAlimentosConsumo', 'as' => 'storeTipoAlimentosConsumo'));

Route::delete('deletetipoalimentosconsumo/{planRiesgos}/{id}',array('uses' => 'PlanRiesgosController@destroyTipoAlimentosConsumo', 'as' => 'destroyTipoAlimentosConsumo'));


Route::post('storetipoanimales/{planriesgos}', array('uses' => 'PlanRiesgosController@storeTipoAnimales', 'as' => 'storeTipoAnimales'));

Route::delete('deletetipoanimales/{planRiesgos}/{id}',array('uses' => 'PlanRiesgosController@destroyTipoAnimales', 'as' => 'destroyTipoAnimales'));


Route::post('storetipoagricultura/{planriesgos}', array('uses' => 'PlanRiesgosController@storeTipoAgricultura', 'as' => 'storeTipoAgricultura'));

Route::delete('deletetipoagricultura/{planRiesgos}/{id}',array('uses' => 'PlanRiesgosController@destroyTipoAgricultura', 'as' => 'destroyTipoAgricultura'));


Route::post('storeorigeningresos/{planriesgos}', array('uses' => 'PlanRiesgosController@storeOrigenIngresos', 'as' => 'storeOrigenIngresos'));

Route::delete('deleteorigeningresos/{planRiesgos}/{id}',array('uses' => 'PlanRiesgosController@destroyOrigenIngresos', 'as' => 'destroyOrigenIngresos'));


Route::post('storegrupoalimentosproductos/{planriesgos}', array('uses' => 'PlanRiesgosController@storeGrupoAlimentosProductos', 'as' => 'storeGrupoAlimentosProductos'));

Route::delete('deletegrupoalimentosproductos/{planRiesgos}/{id}',array('uses' => 'PlanRiesgosController@destroyGrupoAlimentosProductos', 'as' => 'destroyGrupoAlimentosProductos'));

Route::resource('planRiesgosHasGAProductos', 'PlanRiesgos_Has_GrupoAlimentosProductosController');



Route::resource('asociacions', 'AsociacionController');

Route::resource('planRiesgos', 'PlanRiesgosController');


Route::resource('planRiesgosHasOrigenIngresos', 'PlanRiesgos_Has_OrigenIngresosController');

Route::resource('planRiesgosHasTipoAgriculturas', 'PlanRiesgos_Has_TipoAgriculturaController');

Route::resource('planRiesgosHasTipoAlimentos', 'PlanRiesgos_Has_TipoAlimentosController');

Route::resource('evacuacionAguaLluvias', 'EvacuacionAguaLluviaController');

Route::resource('grupoAlimentosProductos', 'GrupoAlimentosProductosController');

Route::resource('lenguajes', 'LenguajeController');

Route::resource('manejoAmbientals', 'ManejoAmbientalController');

Route::resource('nivelDeTraficos', 'NivelDeTraficoController');

Route::resource('productos', 'ProductoController');

Route::resource('precipitaciones', 'PrecipitacionesController');

Route::resource('planRiesgosHasTipoAlimentos', 'PlanRiesgos_Has_TipoAlimentosController');

Route::resource('planRiesgosHasTipoAnimales', 'PlanRiesgos_Has_TipoAnimalesController');

Route::resource('planRiesgosHasTipoCultivos', 'PlanRiesgos_Has_TipoCultivosController');

Route::resource('tallerHasTipoDesechos', 'Taller_Has_TipoDesechoController');

Route::resource('tallerHasTipoRiesgos', 'Taller_Has_TipoRiesgosController');

Route::resource('tendenciaTierras', 'TendenciaTierraController');

Route::resource('tipoAbonos', 'TipoAbonoController');

Route::resource('propietarios', 'PropietarioController');

Route::resource('recirculacionAires', 'RecirculacionAireController');

Route::resource('religions', 'ReligionController');

Route::resource('ruidos', 'RuidoController');

Route::resource('tallers', 'TallerController');

Route::resource('unidadproduccions', 'unidadproduccionController');

Route::resource('tradicions', 'tradicionController');



Route::resource('topologias', 'topologiaController');

Route::resource('tipoFuentes', 'TipoFuentesController');

Route::resource('tipoVegetals', 'TipoVegetalController');

Route::resource('topologias', 'TopologiaController');

Route::resource('tradicions', 'TradicionController');

Route::resource('organizacionSocials', 'OrganizacionSocialController');

Route::resource('planRiesgosHasOrigenIngresos', 'PlanRiesgos_Has_OrigenIngresosController');

Route::resource('paisajes', 'PaisajeController');

Route::resource('peligros', 'PeligrosController');

Route::resource('permeabilidadSuelos', 'PermeabilidadSueloController');

Route::resource('abastecimientoaguas', 'AbastecimientoaguaController');

// Route::resource('areainfluencias', 'AreainfluenciaController');

Route::resource('areainfluenciaHasLenguajes', 'Areainfluencia_has_lenguajeController');

Route::resource('areainfluenciaHasPeligros', 'Areainfluencia_has_peligrosController');

Route::resource('areainfluenciaHasReligions', 'Areainfluencia_has_religionController');

Route::resource('usoTierras', 'UsoTierraController');

// Route::resource('usosVegetacionHasAreaInfluenciaHasTipovegetals', 'UsosVegetacion_Has_AreaInfluencia_Has_TipovegetalController');

Route::resource('usosVegetacions', 'UsosVegetacionController');

Route::resource('usosVegetacions', 'UsosVegetacionController');

// Route::resource('unidadProduccionHasPropietarios', 'UnidadProduccion_Has_PropietarioController');



Route::resource('areainfluenciaHasUsotierras', 'Areainfluencia_has_usotierraController');


Route::resource('tipoAsociacions', 'TipoAsociacionController');


Route::resource('areaInfluenciaHasTipoFuentes', 'AreaInfluenciaHasTipoFuentesController');

Route::resource('areaInfluenciaHasTipoVegetals', 'AreaInfluenciaHasTipoVegetalController');

Route::resource('areaInfluenciaHasTopologias', 'AreaInfluenciaHasTopologiaController');

Route::resource('areaInfluenciaHasTradicions', 'AreaInfluenciaHasTradicionController');

Route::resource('calidadAires', 'CalidadAireController');

Route::resource('caracteristicasEtnicas', 'CaracteristicasEtnicasController');

Route::resource('categoriaProyectos', 'CategoriaProyectoController');

Route::resource('climas', 'ClimaController');

Route::resource('condicionesDrenajes', 'CondicionesDrenajeController');

Route::resource('consolidacionAreaInfluencias', 'ConsolidacionAreaInfluenciaController');

Route::resource('ecosistemas', 'EcosistemaController');

Route::resource('evacuacionAguasServidas', 'EvacuacionAguasServidasController');

Route::resource('origenIngresos', 'OrigenIngresosController');

Route::resource('tipoAgriculturas', 'TipoAgriculturaController');

Route::resource('tipoAlimentos', 'TipoAlimentosController');

Route::resource('tipoAlimentosConsumos', 'TipoAlimentosConsumoController');

Route::resource('tipoAnimales', 'TipoAnimalesController');

Route::resource('tipoControlPlagas', 'TipoControlPlagaController');

Route::resource('tipoCultivos', 'TipoCultivosController');

Route::resource('tipoDesechos', 'TipoDesechoController');

Route::resource('tipoProductos', 'TipoProductoController');

Route::resource('tipoProyectos', 'TipoProyectoController');

Route::resource('tipoRiesgos', 'TipoRiesgosController');

Route::resource('tipoSuelos', 'TipoSueloController');

Route::resource('tipoTerrenos', 'TipoTerrenoController');







Route::resource('areainfluencias', 'AreainfluenciaController');

Route::resource('calidadSuelos', 'CalidadSueloController');


Route::resource('biodigestors', 'BiodigestorController');

Route::resource('desechos', 'DesechoController');

Route::resource('tipoabonos', 'tipoabonoController');





Route::resource('tipoanimales', 'tipoanimalesController');

Route::resource('origeningresos', 'origeningresosController');

Route::resource('precuarias', 'precuariaController');

Route::resource('trabajadores', 'trabajadoresController');

Route::resource('destinos', 'destinoController');

Route::resource('tipounidads', 'tipounidadController');

Route::resource('tipoproduccions', 'tipoproduccionController');

Route::resource('amenazas', 'amenazasController');

Route::resource('vulnerabilidades', 'vulnerabilidadesController');

Route::resource('ciudads', 'ciudadController');

Route::resource('pais', 'paisController');