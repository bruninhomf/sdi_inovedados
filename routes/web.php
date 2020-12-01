<?php
use App\Http\Controllers\LanguageController;
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
    //SGDI
// Route::get('/', 'AuthenticationController@userLogin');
Route::get('/user-forgot-password', 'AuthenticationController@forgotPassword');
Route::get('logout','AuthController@logout');

Route::get('excel','DashboardController@excel');


// Routes Protected
Route::get('/', ['middleware' => 'auth', 'uses' => 'DashboardController@dashboard']);
Route::get('/historico', ['middleware' => 'auth', 'uses' => 'DashboardController@historico']);
Route::get('/minhaconta', ['middleware' => 'auth', 'uses' => 'DashboardController@minhaconta']);

//Users
Route::get('/usuarios', ['middleware' => 'auth', 'uses' => 'UserController@index']);
Route::post('/usuarios', ['middleware' => 'auth', 'uses' => 'UserController@store']);
Route::get('/usuario/novo', ['middleware' => 'auth', 'uses' => 'UserController@create']);
Route::get('/usuario/visualizar', ['middleware' => 'auth', 'uses' => 'DashboardController@usuariovisualizar']);
Route::get('/usuario/editar/{id}', ['middleware' => 'auth', 'uses' => 'UserController@edit']);
Route::post('usuario/{id}', ['middleware' => 'auth', 'uses' => 'UserController@update']);
Route::get('usuario/apagar/{id}', ['middleware' => 'auth', 'uses' => 'UserController@destroy']);



//REQUIREMENTS
//Requirements
Route::get('requisitos', ['middleware' => 'auth', 'uses' => 'RequirementsController@index']);
Route::post('requisitos', ['middleware' => 'auth', 'uses' => 'RequirementsController@store']);
Route::get('requisitos/novo', ['middleware' => 'auth', 'uses' => 'RequirementsController@create']);
Route::get('requisitos/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'RequirementsController@show']);
Route::get('requisitos/editar/{id}', ['middleware' => 'auth', 'uses' => 'RequirementsController@edit']);
Route::post('requisitos/{id}', ['middleware' => 'auth', 'uses' => 'RequirementsController@update']);
Route::get('requisitos/apagar/{id}', ['middleware' => 'auth', 'uses' => 'RequirementsController@destroy']);

//Crudes - requirement
Route::get('crudes', ['middleware' => 'auth', 'uses' => 'CrudsRequirementController@index']);
Route::post('crudes', ['middleware' => 'auth', 'uses' => 'CrudsRequirementController@store']);
Route::get('crudes/novo', ['middleware' => 'auth', 'uses' => 'CrudsRequirementController@create']);
Route::get('crudes/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'CrudsRequirementController@show']);
Route::get('crudes/editar/{id}', ['middleware' => 'auth', 'uses' => 'CrudsRequirementController@edit']);
Route::post('crudes/{id}', ['middleware' => 'auth', 'uses' => 'CrudsRequirementController@update']);
Route::get('crudes/apagar/{id}', ['middleware' => 'auth', 'uses' => 'CrudsRequirementController@destroy']);

//Use case - requirement
Route::get('cado-de-uso', ['middleware' => 'auth', 'uses' => 'RequirementUsecaseController@index']);
Route::post('cado-de-uso', ['middleware' => 'auth', 'uses' => 'RequirementUsecaseController@store']);
Route::get('cado-de-uso/novo', ['middleware' => 'auth', 'uses' => 'RequirementUsecaseController@create']);
Route::get('cado-de-uso/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'RequirementUsecaseController@show']);
Route::get('cado-de-uso/editar/{id}', ['middleware' => 'auth', 'uses' => 'RequirementUsecaseController@edit']);
Route::post('cado-de-uso/{id}', ['middleware' => 'auth', 'uses' => 'RequirementUsecaseController@update']);
Route::get('cado-de-uso/apagar/{id}', ['middleware' => 'auth', 'uses' => 'RequirementUsecaseController@destroy']);

//Functionalit - requirement
Route::get('requisitos-funcionais', ['middleware' => 'auth', 'uses' => 'FuncionalitRequirementController@index']);
Route::post('requisitos-funcionais', ['middleware' => 'auth', 'uses' => 'FuncionalitRequirementController@store']);
Route::get('requisitos-funcionais/novo', ['middleware' => 'auth', 'uses' => 'FuncionalitRequirementController@create']);
Route::get('requisitos-funcionais/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'FuncionalitRequirementController@show']);
Route::get('requisitos-funcionais/editar/{id}', ['middleware' => 'auth', 'uses' => 'FuncionalitRequirementController@edit']);
Route::post('requisitos-funcionais/{id}', ['middleware' => 'auth', 'uses' => 'FuncionalitRequirementController@update']);
Route::get('requisitos-funcionais/apagar/{id}', ['middleware' => 'auth', 'uses' => 'FuncionalitRequirementController@destroy']);


// PROPOSAL
//Virtual
Route::get('virtual', ['middleware' => 'auth', 'uses' => 'VirtualController@index']);
Route::post('virtual', ['middleware' => 'auth', 'uses' => 'VirtualController@store']);
Route::get('virtual/novo', ['middleware' => 'auth', 'uses' => 'VirtualController@create']);
Route::get('virtual/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'VirtualController@show']);
Route::get('virtual/pdf/{virtual}', ['middleware' => 'auth', 'uses' => 'VirtualController@pdf']);
Route::get('virtual/editar/{id}', ['middleware' => 'auth', 'uses' => 'VirtualController@edit']);
Route::post('virtual/{id}', ['middleware' => 'auth', 'uses' => 'VirtualController@update']);
Route::get('virtual/apagar/{id}', ['middleware' => 'auth', 'uses' => 'VirtualController@destroy']);

//Storage
Route::get('/armazenamento', ['middleware' => 'auth', 'uses' => 'StorageController@index']);
Route::post('/armazenamento', ['middleware' => 'auth', 'uses' => 'StorageController@store']);
Route::get('/armazenamento/novo', ['middleware' => 'auth', 'uses' => 'StorageController@create']);
Route::get('/armazenamento/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'StorageController@show']);
Route::get('armazenamento/pdf/{armazenamento}', ['middleware' => 'auth', 'uses' => 'StorageController@pdf']);
Route::get('/armazenamento/imprimir/{proposal}', ['middleware' => 'auth', 'uses' => 'StorageController@imprimir']);
Route::get('/armazenamento/editar/{id}', ['middleware' => 'auth', 'uses' => 'StorageController@edit']);
Route::post('/armazenamento/{id}', ['middleware' => 'auth', 'uses' => 'StorageController@update']);
Route::get('/armazenamento/apagar/{id}', ['middleware' => 'auth', 'uses' => 'StorageController@destroy']);

//Hosting
Route::get('/hospedagem', ['middleware' => 'auth', 'uses' => 'HostingController@index']);
Route::post('/hospedagem', ['middleware' => 'auth', 'uses' => 'HostingController@store']);
Route::get('/hospedagem/novo', ['middleware' => 'auth', 'uses' => 'HostingController@create']);
Route::get('/hospedagem/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'HostingController@show']);
Route::get('hospedagem/pdf/{hospedagem}', ['middleware' => 'auth', 'uses' => 'HostingController@pdf']);
Route::get('/hospedagem/editar/{id}', ['middleware' => 'auth', 'uses' => 'HostingController@edit']);
Route::post('/hospedagem/{id}', ['middleware' => 'auth', 'uses' => 'HostingController@update']);
Route::get('/hospedagem/apagar/{id}', ['middleware' => 'auth', 'uses' => 'HostingController@destroy']);

//Development
Route::get('/desenvolvimento', ['middleware' => 'auth', 'uses' => 'DevelopmentController@index']);
Route::post('/desenvolvimento', ['middleware' => 'auth', 'uses' => 'DevelopmentController@store']);
Route::get('/desenvolvimento/novo', ['middleware' => 'auth', 'uses' => 'DevelopmentController@create']);
Route::get('/desenvolvimento/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'DevelopmentController@show']);
Route::get('desenvolvimento/pdf/{desenvolvimento}', ['middleware' => 'auth', 'uses' => 'DevelopmentController@pdf']);
Route::get('/desenvolvimento/editar/{id}', ['middleware' => 'auth', 'uses' => 'DevelopmentController@edit']);
Route::post('/desenvolvimento/{id}', ['middleware' => 'auth', 'uses' => 'DevelopmentController@update']);
Route::get('/desenvolvimento/apagar/{id}', ['middleware' => 'auth', 'uses' => 'DevelopmentController@destroy']);

//Consulting
Route::get('/consultoria', ['middleware' => 'auth', 'uses' => 'ConsultingController@index']);
Route::post('/consultoria', ['middleware' => 'auth', 'uses' => 'ConsultingController@store']);
Route::get('/consultoria/novo', ['middleware' => 'auth', 'uses' => 'ConsultingController@create']);
Route::get('/consultoria/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'ConsultingController@show']);
Route::get('consultoria/pdf/{consultoria}', ['middleware' => 'auth', 'uses' => 'ConsultingController@pdf']);
Route::get('/consultoria/editar/{id}', ['middleware' => 'auth', 'uses' => 'ConsultingController@edit']);
Route::post('/consultoria/{id}', ['middleware' => 'auth', 'uses' => 'ConsultingController@update']);
Route::get('/consultoria/apagar/{id}', ['middleware' => 'auth', 'uses' => 'ConsultingController@destroy']);

// TEST
//Requirements - test
Route::get('teste-requisitos', ['middleware' => 'auth', 'uses' => 'RequirementTestSystemController@index']);
Route::post('teste-requisitos', ['middleware' => 'auth', 'uses' => 'RequirementTestSystemController@store']);
Route::get('teste-requisitos/novo', ['middleware' => 'auth', 'uses' => 'RequirementTestSystemController@create']);
Route::get('teste-requisitos/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'RequirementTestSystemController@show']);
Route::get('teste-requisitos/editar/{id}', ['middleware' => 'auth', 'uses' => 'RequirementTestSystemController@edit']);
Route::post('teste-requisitos/{id}', ['middleware' => 'auth', 'uses' => 'RequirementTestSystemController@update']);
Route::get('teste-requisitos/apagar/{id}', ['middleware' => 'auth', 'uses' => 'RequirementTestSystemController@destroy']);

//Crudes - test
Route::get('teste-crudes', ['middleware' => 'auth', 'uses' => 'CrudsTestController@index']);
Route::post('teste-crudes', ['middleware' => 'auth', 'uses' => 'CrudsTestController@store']);
Route::get('teste-crudes/novo', ['middleware' => 'auth', 'uses' => 'CrudsTestController@create']);
Route::get('teste-crudes/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'CrudsTestController@show']);
Route::get('teste-crudes/editar/{id}', ['middleware' => 'auth', 'uses' => 'CrudsTestController@edit']);
Route::post('teste-crudes/{id}', ['middleware' => 'auth', 'uses' => 'CrudsTestController@update']);
Route::get('teste-crudes/apagar/{id}', ['middleware' => 'auth', 'uses' => 'CrudsTestController@destroy']);

//Use case - test
Route::get('teste-cado-de-uso', ['middleware' => 'auth', 'uses' => 'UsecaseTestController@index']);
Route::post('teste-cado-de-uso', ['middleware' => 'auth', 'uses' => 'UsecaseTestController@store']);
Route::get('teste-cado-de-uso/novo', ['middleware' => 'auth', 'uses' => 'UsecaseTestController@create']);
Route::get('teste-cado-de-uso/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'UsecaseTestController@show']);
Route::get('teste-cado-de-uso/editar/{id}', ['middleware' => 'auth', 'uses' => 'UsecaseTestController@edit']);
Route::post('teste-cado-de-uso/{id}', ['middleware' => 'auth', 'uses' => 'UsecaseTestController@update']);
Route::get('teste-cado-de-uso/apagar/{id}', ['middleware' => 'auth', 'uses' => 'UsecaseTestController@destroy']);

//Functional - test
Route::get('testes-funcionais', ['middleware' => 'auth', 'uses' => 'FunctionalitTestController@index']);
Route::post('testes-funcionais', ['middleware' => 'auth', 'uses' => 'FuncionalitTestController@store']);
Route::get('testes-funcionais/novo', ['middleware' => 'auth', 'uses' => 'FuncionalitTestController@create']);
Route::get('testes-funcionais/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'FuncionalitTestController@show']);
Route::get('testes-funcionais/editar/{id}', ['middleware' => 'auth', 'uses' => 'FuncionalitTestController@edit']);
Route::post('testes-funcionais/{id}', ['middleware' => 'auth', 'uses' => 'FuncionalitTestController@update']);
Route::get('testes-funcionais/apagar/{id}', ['middleware' => 'auth', 'uses' => 'FuncionalitTestController@destroy']);



// Authentication Route
Route::get('/user-login', 'AuthenticationController@userLogin');
Route::get('/user-register', 'AuthenticationController@userRegister');
Route::get('/user-forgot-password', 'AuthenticationController@forgotPassword');
Route::get('/user-lock-screen', 'AuthenticationController@lockScreen');

// Misc Route
Route::get('/page-404', 'MiscController@page404');
Route::get('/page-500', 'MiscController@page500');


// locale route
Route::get('lang/{locale}',[LanguageController::class, 'swap']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
