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



Route::get('verify','RequirementsController@verify');

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



//Requirements


// PROPOSAL
//Virtual
Route::get('virtual', ['middleware' => 'auth', 'uses' => 'VirtualController@index']);
Route::post('virtual', ['middleware' => 'auth', 'uses' => 'VirtualController@store']);
Route::get('virtual/novo', ['middleware' => 'auth', 'uses' => 'VirtualController@create']);
Route::get('virtual/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'VirtualController@show']);
Route::get('virtual/editar/{id}', ['middleware' => 'auth', 'uses' => 'VirtualController@edit']);
Route::post('virtual/{id}', ['middleware' => 'auth', 'uses' => 'VirtualController@update']);
Route::get('virtual/apagar/{id}', ['middleware' => 'auth', 'uses' => 'VirtualController@destroy']);

//Storage
Route::get('/armazenamento', ['middleware' => 'auth', 'uses' => 'StorageController@index']);
Route::post('/armazenamento', ['middleware' => 'auth', 'uses' => 'StorageController@store']);
Route::get('/armazenamento/novo', ['middleware' => 'auth', 'uses' => 'StorageController@create']);
Route::get('/armazenamento/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'StorageController@show']);
Route::get('/armazenamento/editar/{id}', ['middleware' => 'auth', 'uses' => 'StorageController@edit']);
Route::post('/armazenamento/{id}', ['middleware' => 'auth', 'uses' => 'StorageController@update']);
Route::get('/armazenamento/apagar/{id}', ['middleware' => 'auth', 'uses' => 'StorageController@destroy']);

//Hosting
Route::get('/hospedagem', ['middleware' => 'auth', 'uses' => 'HostingController@index']);
Route::post('/hospedagem', ['middleware' => 'auth', 'uses' => 'HostingController@store']);
Route::get('/hospedagem/novo', ['middleware' => 'auth', 'uses' => 'HostingController@create']);
Route::get('/hospedagem/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'HostingController@show']);
Route::get('/hospedagem/editar/{id}', ['middleware' => 'auth', 'uses' => 'HostingController@edit']);
Route::post('/hospedagem/{id}', ['middleware' => 'auth', 'uses' => 'HostingController@update']);
Route::get('/hospedagem/apagar/{id}', ['middleware' => 'auth', 'uses' => 'HostingController@destroy']);

//Development
Route::get('/desenvolvimento', ['middleware' => 'auth', 'uses' => 'DevelopmentController@index']);
Route::post('/desenvolvimento', ['middleware' => 'auth', 'uses' => 'DevelopmentController@store']);
Route::get('/desenvolvimento/novo', ['middleware' => 'auth', 'uses' => 'DevelopmentController@create']);
Route::get('/desenvolvimento/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'DevelopmentController@show']);
Route::get('/desenvolvimento/editar/{id}', ['middleware' => 'auth', 'uses' => 'DevelopmentController@edit']);
Route::post('/desenvolvimento/{id}', ['middleware' => 'auth', 'uses' => 'DevelopmentController@update']);
Route::get('/desenvolvimento/apagar/{id}', ['middleware' => 'auth', 'uses' => 'DevelopmentController@destroy']);

//Consulting
Route::get('/consultoria', ['middleware' => 'auth', 'uses' => 'ConsultingController@index']);
Route::post('/consultoria', ['middleware' => 'auth', 'uses' => 'ConsultingController@store']);
Route::get('/consultoria/novo', ['middleware' => 'auth', 'uses' => 'ConsultingController@create']);
Route::get('/consultoria/visualizar/{id}', ['middleware' => 'auth', 'uses' => 'ConsultingController@show']);
Route::get('/consultoria/editar/{id}', ['middleware' => 'auth', 'uses' => 'ConsultingController@edit']);
Route::post('/consultoria/{id}', ['middleware' => 'auth', 'uses' => 'ConsultingController@update']);
Route::get('/consultoria/apagar/{id}', ['middleware' => 'auth', 'uses' => 'ConsultingController@destroy']);

// TEST



// User Route
// Route::get('/page-users-list', 'UserController@usersList');
// Route::get('/page-users-view', 'UserController@usersView');
// Route::get('/page-users-edit', 'UserController@usersEdit');

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
