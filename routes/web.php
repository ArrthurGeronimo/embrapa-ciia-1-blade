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

Route::group(['prefix' => 'backEnd'], function()
{
  Route::resource('fazenda', 'backEnd\FazendaController');

});

Route::resource('clima', 'frontEnd\ClimaController');
Route::resource('bebedourodados', 'frontEnd\BebedourodadosController');
Route::resource('cercadados', 'frontEnd\CercadadosController');
Route::resource('cochodados', 'frontEnd\CochodadosController');
Route::resource('animalsensor', 'frontEnd\AnimalsensorController');
Route::resource('drone', 'frontEnd\DroneController');
Route::resource('pastagemsensor', 'frontEnd\PastagemsensorController');
Route::resource('solosensor', 'frontEnd\SolosensorController');
Route::resource('paidolote', 'frontEnd\PaidoloteController');
Route::resource('faixa', 'frontEnd\FaixaController');
Route::resource('experimento', 'frontEnd\ExperimentoController');
Route::resource('bloco', 'frontEnd\BlocoController');
Route::resource('tratamento', 'frontEnd\TratamentoController');
Route::resource('tratamentofaixa', 'frontEnd\TratamentofaixaController');
Route::resource('tratamentobloco', 'frontEnd\TratamentoblocoController');
Route::resource('inteiramentecasualizado', 'frontEnd\InteiramentecasualizadoController');

Route::get('storetratamentosbloco', 'frontEnd\BlocoController@storeTratamentos');

Route::group(['prefix' => 'frontEnd'], function()
{
  
  Route::resource('fazenda', 'frontEnd\FazendaController');
  Route::resource('loteanimal', 'frontEnd\LoteanimalController');
  Route::resource('animal', 'frontEnd\AnimalController');
  Route::resource('manejoanimal', 'frontEnd\ManejoanimalController');
  Route::resource('animaldado', 'frontEnd\AnimaldadoController');
  Route::resource('talhao', 'frontEnd\TalhaoController');
  Route::resource('estacao', 'frontEnd\EstacaoController');
  Route::resource('sensor', 'frontEnd\SensorController');
  Route::resource('piquete', 'frontEnd\PiqueteController');
  Route::resource('praga', 'frontEnd\PragaController');
  Route::resource('amostrapasto', 'frontEnd\AmostrapastoController');
  Route::resource('plantiocultura', 'frontEnd\PlantioculturaController');
  Route::resource('amostrasolo', 'frontEnd\AmostrasoloController');
  Route::resource('operacao', 'frontEnd\OperacaoController');
  Route::resource('experimento', 'frontEnd\ExperimentoController');
  Route::resource('tratamento', 'frontEnd\TratamentoController');
  Route::resource('bloco', 'frontEnd\BlocoController');
  Route::resource('parcela', 'frontEnd\ParcelaController');
  Route::resource('experimentopraga', 'frontEnd\ExperimentopragaController');
  Route::resource('experimentoplantiocultura', 'frontEnd\ExperimentoplantioculturaController');
  Route::resource('experimentoamostrapasto', 'frontEnd\ExperimentoamostrapastoController');
  Route::resource('experimentoamostrasolo', 'frontEnd\ExperimentoamostrasoloController');




  /* FAZENDA - TALHÕES */
  Route::get('fazenda/{id}/talhoes', 'frontEnd\FazendaController@verTalhoes');
  Route::get('fazenda/{id}/talhao/create', 'frontEnd\FazendaController@criarTalhao');
  Route::get('fazenda/{fazenda_id}/talhao/{talhao_id}/edit', 'frontEnd\FazendaController@editarTalhao');
  Route::get('fazenda/{fazenda_id}/talhao/{talhao_id}', 'frontEnd\FazendaController@mostrarTalhao');
  /* FAZENDA - LOTES */
  Route::get('fazenda/{id}/lotes', 'frontEnd\FazendaController@verLotes');
  Route::get('fazenda/{id}/lote/create', 'frontEnd\FazendaController@criarLote');
  Route::get('fazenda/{fazenda_id}/lote/{loteanimal_id}/edit', 'frontEnd\FazendaController@editarLote');
  Route::get('fazenda/{fazenda_id}/lote/{loteanimal_id}', 'frontEnd\FazendaController@mostrarLote');
  /* LOTES - ANIMAIS */
  Route::get('lote/{id}/animais', 'frontEnd\LoteanimalController@verAnimais');
  Route::get('lote/{id}/animal/create', 'frontEnd\LoteanimalController@criarAnimal');
  Route::get('lote/{loteanimal_id}/animal/{animal_id}/edit', 'frontEnd\LoteanimalController@editarAnimal');
  Route::get('lote/{loteanimal_id}/animal/{animal_id}', 'frontEnd\LoteanimalController@mostrarAnimal');
  /* ANIMAIS - MANEJO ANIMAL */
  Route::get('animal/{id}/manejos', 'frontEnd\AnimalController@verManejos');
  Route::get('animal/{id}/manejoanimal/create', 'frontEnd\AnimalController@criarManejo');
  Route::get('animal/{animal_id}/manejoanimal/{manejoanimal_id}/edit', 'frontEnd\AnimalController@editarManejo');
  Route::get('animal/{animal_id}/manejoanimal/{manejoanimal_id}', 'frontEnd\AnimalController@mostrarManejo');
  /* ANIMAIS - ANIMAL DADO */
  Route::get('animal/{id}/animaldados', 'frontEnd\AnimalController@verAnimaldados');
  Route::get('animal/{id}/animaldado/create', 'frontEnd\AnimalController@criarAnimaldado');
  Route::get('animal/{animal_id}/animaldado/{animaldado_id}/edit', 'frontEnd\AnimalController@editarAnimaldado');
  Route::get('animal/{animal_id}/animaldado/{animaldado_id}', 'frontEnd\AnimalController@mostrarAnimaldado');
  /* TALHÕES - PIQUETES */
  Route::get('talhao/{id}/piquetes', 'frontEnd\TalhaoController@verPiquetes');
  Route::get('talhao/{id}/piquete/create', 'frontEnd\TalhaoController@criarPiquete');
  Route::get('talhao/{talhao_id}/piquete/{piquete_id}/edit', 'frontEnd\TalhaoController@editarPiquete');
  Route::get('talhao/{talhao_id}/piquete/{piquete_id}', 'frontEnd\TalhaoController@mostrarPiquete');
    /* TALHÕES - ESTAÇÃO */
  Route::get('talhao/{id}/estacoes', 'frontEnd\TalhaoController@verEstacoes');
  Route::get('talhao/{id}/estacao/create', 'frontEnd\TalhaoController@criarEstacao');
  Route::get('talhao/{talhao_id}/estacao/{estacao_id}/edit', 'frontEnd\TalhaoController@editarEstacao');
  Route::get('talhao/{talhao_id}/estacao/{estacao_id}', 'frontEnd\TalhaoController@mostrarEstacao');
    /* ESTAÇÃO - SENSOR */
  Route::get('estacao/{id}/sensores', 'frontEnd\EstacaoController@verSensores');
  Route::get('estacao/{id}/sensor/create', 'frontEnd\EstacaoController@criarSensor');
  Route::get('estacao/{estacao_id}/sensor/{sensor_id}/edit', 'frontEnd\EstacaoController@editarSensor');
  Route::get('estacao/{estacao_id}/sensor/{sensor_id}', 'frontEnd\EstacaoController@mostrarSensor');
  /* PIQUETES - AMOSTRAS PASTO */
  Route::get('piquete/{id}/amostraspasto', 'frontEnd\PiqueteController@verAmostraspasto');
  Route::get('piquete/{id}/amostrapasto/create', 'frontEnd\PiqueteController@criarAmostrapasto');
  Route::get('piquete/{piquete_id}/amostrapasto/{amostrapasto_id}/edit', 'frontEnd\PiqueteController@editarAmostrapasto');
  Route::get('piquete/{piquete_id}/amostrapasto/{amostrapasto_id}', 'frontEnd\PiqueteController@mostrarAmostrapasto');
  /* PIQUETES - PRAGAS */
  Route::get('piquete/{id}/pragas', 'frontEnd\PiqueteController@verPragas');
  Route::get('piquete/{id}/praga/create', 'frontEnd\PiqueteController@criarPraga');
  Route::get('piquete/{piquete_id}/praga/{praga_id}/edit', 'frontEnd\PiqueteController@editarPraga');
  Route::get('piquete/{piquete_id}/praga/{praga_id}', 'frontEnd\PiqueteController@mostrarPraga');
  /* PIQUETES - PLANTIO CULTURA */
  Route::get('piquete/{id}/plantioscultura', 'frontEnd\PiqueteController@verPlantioscultura');
  Route::get('piquete/{id}/plantiocultura/create', 'frontEnd\PiqueteController@criarPlantiocultura');
  Route::get('piquete/{piquete_id}/plantiocultura/{plantiocultura_id}/edit', 'frontEnd\PiqueteController@editarPlantiocultura');
  Route::get('piquete/{piquete_id}/plantiocultura/{plantiocultura_id}', 'frontEnd\PiqueteController@mostrarPlantiocultura');
  /* PIQUETES - AMOSTRAS PASTO */
  Route::get('piquete/{id}/amostrassolo', 'frontEnd\PiqueteController@verAmostrassolo');
  Route::get('piquete/{id}/amostrasolo/create', 'frontEnd\PiqueteController@criarAmostrasolo');
  Route::get('piquete/{piquete_id}/amostrasolo/{amostrasolo_id}/edit', 'frontEnd\PiqueteController@editarAmostrasolo');
  Route::get('piquete/{piquete_id}/amostrasolo/{amostrasolo_id}', 'frontEnd\PiqueteController@mostrarAmostrasolo');
  /* PIQUETES - OPERAÇÕES */
  Route::get('piquete/{id}/operacoes', 'frontEnd\PiqueteController@verOperacoes');
  Route::get('piquete/{id}/operacao/create', 'frontEnd\PiqueteController@criarOperacao');
  Route::get('piquete/{piquete_id}/operacao/{operacao_id}/edit', 'frontEnd\PiqueteController@editarOperacao');
  Route::get('piquete/{piquete_id}/operacao/{operacao_id}', 'frontEnd\PiqueteController@mostrarOperacao');
  /* PIQUETES - EXPERIMENTOS */
  Route::get('piquete/{id}/experimentos', 'frontEnd\PiqueteController@verExperimentos');
  Route::get('piquete/{id}/experimento/create', 'frontEnd\PiqueteController@criarExperimento');
  Route::get('piquete/{piquete_id}/experimento/{experimento_id}/edit', 'frontEnd\PiqueteController@editarExperimento');
  Route::get('piquete/{piquete_id}/experimento/{experimento_id}', 'frontEnd\PiqueteController@mostrarExperimento');
  /* EXPERIMENTOS - TRATAMENTO */
  Route::get('experimento/{id}/tratamentos', 'frontEnd\ExperimentoController@verTratamentos');
  Route::get('experimento/{id}/tratamento/create', 'frontEnd\ExperimentoController@criarTratamento');
  Route::get('experimento/{experimento_id}/tratamento/{tratamento_id}/edit', 'frontEnd\ExperimentoController@editarTratamento');
  Route::get('experimento/{experimento_id}/tratamento/{tratamento_id}', 'frontEnd\ExperimentoController@mostrarTratamento');
  /* TRATAMENTO - BLOCOS */
  Route::get('tratamento/{id}/blocos', 'frontEnd\TratamentoController@verBlocos');
  Route::get('tratamento/{id}/bloco/create', 'frontEnd\TratamentoController@criarBloco');
  Route::get('tratamento/{tratamento_id}/bloco/{bloco_id}/edit', 'frontEnd\TratamentoController@editarBloco');
  Route::get('tratamento/{tratamento_id}/bloco/{bloco_id}', 'frontEnd\TratamentoController@mostrarBloco');
  /* BLOCOS - PARCELAS */
  Route::get('bloco/{id}/parcelas', 'frontEnd\BlocoController@verParcelas');
  Route::get('bloco/{id}/parcela/create', 'frontEnd\BlocoController@criarParcela');
  Route::get('bloco/{bloco_id}/parcela/{parcela_id}/edit', 'frontEnd\BlocoController@editarParcela');
  Route::get('bloco/{bloco_id}/parcela/{parcela_id}', 'frontEnd\BlocoController@mostrarParcela');
    /* PARCELAS - EXPERIMENTOSPRAGA */
  Route::get('parcela/{id}/experimentopragas', 'frontEnd\ParcelaController@verExperimentopragas');
  Route::get('parcela/{id}/experimentopraga/create', 'frontEnd\ParcelaController@criarExperimentopraga');
  Route::get('parcela/{parcela_id}/experimentopraga/{experimentopraga_id}/edit', 'frontEnd\ParcelaController@editarExperimentopraga');
  Route::get('parcela/{parcela_id}/experimentopraga/{experimentopraga_id}', 'frontEnd\ParcelaController@mostrarExperimentopraga');
    /* PARCELAS - EXPERIMENTOPLANTIOCULTURA */
  Route::get('parcela/{id}/experimentoplantioculturas', 'frontEnd\ParcelaController@verExperimentoplantioculturas');
  Route::get('parcela/{id}/experimentoplantiocultura/create', 'frontEnd\ParcelaController@criarExperimentoplantiocultura');
  Route::get('parcela/{parcela_id}/experimentoplantiocultura/{experimentoplantiocultura_id}/edit', 'frontEnd\ParcelaController@editarExperimentoplantiocultura');
  Route::get('parcela/{parcela_id}/experimentoplantiocultura/{experimentoplantiocultura_id}', 'frontEnd\ParcelaController@mostrarExperimentoplantiocultura');
    /* PARCELAS - EXPERIMENTOAMOSTRAPASTO */
  Route::get('parcela/{id}/experimentoamostrapastos', 'frontEnd\ParcelaController@verExperimentoamostrapastos');
  Route::get('parcela/{id}/experimentoamostrapasto/create', 'frontEnd\ParcelaController@criarExperimentoamostrapasto');
  Route::get('parcela/{parcela_id}/experimentoamostrapasto/{experimentoamostrapasto_id}/edit', 'frontEnd\ParcelaController@editarExperimentoamostrapasto');
  Route::get('parcela/{parcela_id}/experimentoamostrapasto/{experimentoamostrapasto_id}', 'frontEnd\ParcelaController@mostrarExperimentoamostrapasto');
    /* PARCELAS - EXPERIMENTOAMOSTRASOLO */
  Route::get('parcela/{id}/experimentoamostrasolos', 'frontEnd\ParcelaController@verExperimentoamostrasolos');
  Route::get('parcela/{id}/experimentoamostrasolo/create', 'frontEnd\ParcelaController@criarExperimentoamostrasolo');
  Route::get('parcela/{parcela_id}/experimentoamostrasolo/{experimentoamostrasolo_id}/edit', 'frontEnd\ParcelaController@editarExperimentoamostrasolo');
  Route::get('parcela/{parcela_id}/experimentoamostrasolo/{experimentoamostrasolo_id}', 'frontEnd\ParcelaController@mostrarExperimentoamostrasolo');

  

});


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
