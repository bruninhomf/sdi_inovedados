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


// Routes Protected
Route::group(['middleware' => 'auth', 'uses'], function () {
    Route::get('/', 'DashboardController@dashboard');
    Route::get('logout','AuthController@logout');
    Route::get('/historico', 'DashboardController@historico');
    Route::get('/minhaconta', 'DashboardController@minhaconta');


    //Users
    Route::get('/usuarios', 'UserController@index');
    Route::post('/usuarios', 'UserController@store');
    Route::get('/usuario/novo', 'UserController@create');
    Route::get('/usuario/visualizar', 'DashboardController@usuariovisualizar');
    Route::get('/usuario/editar/{id}', 'UserController@edit');
    Route::post('usuario/{id}', 'UserController@update');
    Route::get('usuario/apagar/{id}', 'UserController@destroy');


    //REQUIREMENTS
    //Requirements
    Route::get('requisitos', 'RequirementsGatheringsController@index');
    Route::post('requisitos', 'RequirementsGatheringsController@store');
    Route::get('requisitos/novo', 'RequirementsGatheringsController@create');
    Route::get('requisitos/visualizar/{id}', 'RequirementsGatheringsController@show');
    Route::get('requisitos/editar/{id}', 'RequirementsGatheringsController@edit');
    Route::post('requisitos/{id}', 'RequirementsGatheringsController@update');
    Route::get('requisitos/apagar/{id}', 'RequirementsGatheringsController@destroy');

    // PROPOSAL
    //Virtual
    Route::get('virtual', 'VirtualController@index');
    Route::post('virtual', 'VirtualController@store');
    Route::get('virtual/novo', 'VirtualController@create');
    Route::get('virtual/visualizar/{id}', 'VirtualController@show');
    Route::get('virtual/pdf/{virtual}', 'VirtualController@pdf');
    Route::get('virtual/editar/{id}', 'VirtualController@edit');
    Route::post('virtual/{id}', 'VirtualController@update');
    Route::get('virtual/apagar/{id}', 'VirtualController@destroy');

    //Storage
    Route::get('/armazenamento', 'StorageController@index');
    Route::post('/armazenamento', 'StorageController@store');
    Route::get('/armazenamento/novo', 'StorageController@create');
    Route::get('/armazenamento/visualizar/{id}', 'StorageController@show');
    Route::get('armazenamento/pdf/{armazenamento}', 'StorageController@pdf');
    Route::get('/armazenamento/imprimir/{proposal}', 'StorageController@imprimir');
    Route::get('/armazenamento/editar/{id}', 'StorageController@edit');
    Route::post('/armazenamento/{id}', 'StorageController@update');
    Route::get('/armazenamento/apagar/{id}', 'StorageController@destroy');

    //Hosting
    Route::get('/hospedagem', 'HostingController@index');
    Route::post('/hospedagem', 'HostingController@store');
    Route::get('/hospedagem/novo', 'HostingController@create');
    Route::get('/hospedagem/visualizar/{id}', 'HostingController@show');
    Route::get('hospedagem/pdf/{hospedagem}', 'HostingController@pdf');
    Route::get('/hospedagem/editar/{id}', 'HostingController@edit');
    Route::post('/hospedagem/{id}', 'HostingController@update');
    Route::get('/hospedagem/apagar/{id}', 'HostingController@destroy');

    //Development
    Route::get('/desenvolvimento', 'DevelopmentController@index');
    Route::post('/desenvolvimento', 'DevelopmentController@store');
    Route::get('/desenvolvimento/novo', 'DevelopmentController@create');
    Route::get('/desenvolvimento/visualizar/{id}', 'DevelopmentController@show');
    Route::get('desenvolvimento/pdf/{desenvolvimento}', 'DevelopmentController@pdf');
    Route::get('/desenvolvimento/editar/{id}', 'DevelopmentController@edit');
    Route::post('/desenvolvimento/{id}', 'DevelopmentController@update');
    Route::get('/desenvolvimento/apagar/{id}', 'DevelopmentController@destroy');

    //Consulting
    Route::get('/consultoria', 'ConsultingController@index');
    Route::post('/consultoria', 'ConsultingController@store');
    Route::get('/consultoria/novo', 'ConsultingController@create');
    Route::get('/consultoria/visualizar/{id}', 'ConsultingController@show');
    Route::get('consultoria/pdf/{consultoria}', 'ConsultingController@pdf');
    Route::get('/consultoria/editar/{id}', 'ConsultingController@edit');
    Route::post('/consultoria/{id}', 'ConsultingController@update');
    Route::get('/consultoria/apagar/{id}', 'ConsultingController@destroy');


    // TEST
    //Requirements - test
    Route::get('teste-requisitos', 'RequirementTestSystemController@index');
    Route::post('teste-requisitos', 'RequirementTestSystemController@store');
    Route::get('teste-requisitos/novo', 'RequirementTestSystemController@create');
    Route::get('teste-requisitos/visualizar/{id}', 'RequirementTestSystemController@show');
    Route::get('teste-requisitos/excel/{id}', 'RequirementTestSystemController@excel');
    Route::get('teste-requisitos/editar/{id}', 'RequirementTestSystemController@edit');
    Route::post('teste-requisitos/{id}', 'RequirementTestSystemController@update');
    Route::get('teste-requisitos/apagar/{id}', 'RequirementTestSystemController@destroy');

    //Crudes - test
    Route::get('teste-crudes', 'CrudsTestController@index');
    Route::post('teste-crudes', 'CrudsTestController@store');
    Route::get('teste-crudes/novo', 'CrudsTestController@create');
    Route::get('teste-crudes/visualizar/{id}', 'CrudsTestController@show');
    Route::get('teste-crudes/editar/{id}', 'CrudsTestController@edit');
    Route::post('teste-crudes/{id}', 'CrudsTestController@update');
    Route::get('teste-crudes/apagar/{id}', 'CrudsTestController@destroy');

    //Use case - test
    Route::get('teste-caso-de-uso', 'UsecaseTestController@index');
    Route::post('teste-caso-de-uso', 'UsecaseTestController@store');
    Route::get('teste-caso-de-uso/novo', 'UsecaseTestController@create');
    Route::get('teste-caso-de-uso/visualizar/{id}', 'UsecaseTestController@show');
    Route::get('teste-caso-de-uso/editar/{id}', 'UsecaseTestController@edit');
    Route::post('teste-caso-de-uso/{id}', 'UsecaseTestController@update');
    Route::get('teste-caso-de-uso/apagar/{id}', 'UsecaseTestController@destroy');

    //Functional - test
    Route::get('testes-funcionais', 'FunctionalitTestController@index');
    Route::post('testes-funcionais', 'FunctionalitTestController@store');
    Route::get('testes-funcionais/novo', 'FunctionalitTestController@create');
    Route::get('testes-funcionais/visualizar/{id}', 'FunctionalitTestController@show');
    Route::get('testes-funcionais/editar/{id}', 'FunctionalitTestController@edit');
    Route::post('testes-funcionais/{id}', 'FunctionalitTestController@update');
    Route::get('testes-funcionais/apagar/{id}', 'FunctionalitTestController@destroy');
});



// Authentication Route
// Route::get('/user-login', 'AuthenticationController@userLogin');
// Route::get('/user-register', 'AuthenticationController@userRegister');
// Route::get('/user-forgot-password', 'AuthenticationController@forgotPassword');
// Route::get('/user-lock-screen', 'AuthenticationController@lockScreen');

// Misc Route
Route::get('/page-404', 'MiscController@page404');
Route::get('/page-500', 'MiscController@page500');


// locale route
// Route::get('lang/{locale}',[LanguageController::class, 'swap']);

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
