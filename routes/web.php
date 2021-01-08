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
Route::get('/user-forgot-password', 'AuthenticationController@forgotPassword');


// Routes Protected
Route::group(['middleware' => 'auth', 'uses'], function () {
    Route::get('/', 'DashboardController@dashboard');
    Route::get('logout','AuthController@logout');
    Route::get('/historico', 'DashboardController@historico');


    //Users
    Route::group(['middleware' => ['role_or_permission:users.read']], function () {
        Route::get('/usuarios', 'UserController@index');
        Route::get('/usuario/visualizar/{id}', 'UserController@show');

        Route::group(['middleware' => ['role_or_permission:users.create']], function () {
            Route::get('/usuario/novo', 'UserController@create');
            Route::post('/usuarios', 'UserController@store');
        });
        Route::group(['middleware' => ['role_or_permission:users.edit']], function () {
            Route::get('/usuario/editar/{id}', 'UserController@edit');
            Route::post('/usuario/{id}', 'UserController@update');
            Route::get('/minhaconta/{id}', 'UserController@myaccount');
            Route::post('/minhaconta/{id}', 'UserController@myaccountupdate');
        });
        Route::group(['middleware' => ['role_or_permission:users.delete']], function () {
            Route::get('usuario/apagar/{id}', 'UserController@destroy');
        });
    });


    //REQUIREMENTS
    //Requirements
    Route::group(['middleware' => ['role_or_permission:requirements.read']], function () {
        Route::get('requisitos', 'RequirementsGatheringsController@index');
        Route::get('requisitos/visualizar/{id}', 'RequirementsGatheringsController@show');
        
        Route::group(['middleware' => ['role_or_permission:requirements.create']], function () {
            Route::get('requisitos/novo', 'RequirementsGatheringsController@create');
            Route::post('requisitos', 'RequirementsGatheringsController@store');
            Route::post('{id}/titulo/', 'RequirementsGatheringsController@storeTitle');
            Route::post('{id}/menu/', 'RequirementsGatheringsController@storeMenu');
            Route::post('{id}/descricao/', 'RequirementsGatheringsController@storeDescription');
        });

        Route::group(['middleware' => ['role_or_permission:requirements.edit']], function () {
            Route::get('requisitos/editar/{id}', 'RequirementsGatheringsController@edit');
            Route::post('requisitos/{id}', 'RequirementsGatheringsController@update');
        });

        Route::group(['middleware' => ['role_or_permission:requirements.additional']], function () {
            Route::get('requisitos/pdf/{requirementsgathering}', 'RequirementsGatheringsController@pdf');
            Route::get('requisitos/excel/{id}', 'RequirementsGatheringsController@excel');
        });

        Route::group(['middleware' => ['role_or_permission:requirements.delete']], function () {
            Route::get('requisitos/apagar/{id}', 'RequirementsGatheringsController@destroy');
        });
    });
    

    // PROPOSAL
    //Virtual
    Route::group(['middleware' => ['role_or_permission:proposals.read']], function () {
        Route::get('virtual', 'VirtualController@index');
        Route::get('virtual/visualizar/{id}', 'VirtualController@show');

        Route::group(['middleware' => ['role_or_permission:proposals.create']], function () {
            Route::get('virtual/novo', 'VirtualController@create');
            Route::post('virtual', 'VirtualController@store');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.edit']], function () {
            Route::get('virtual/editar/{id}', 'VirtualController@edit');
            Route::post('virtual/{id}', 'VirtualController@update');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.additional']], function () {
            Route::get('virtual/pdf/{virtual}', 'VirtualController@pdf');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.delete']], function () {
            Route::get('virtual/apagar/{id}', 'VirtualController@destroy');
        });
    });

    //Storage
    Route::group(['middleware' => ['role_or_permission:proposals.read']], function () {
        Route::get('/armazenamento', 'StorageController@index');
        Route::get('/armazenamento/visualizar/{id}', 'StorageController@show');

        Route::group(['middleware' => ['role_or_permission:proposals.create']], function () {
            Route::get('/armazenamento/novo', 'StorageController@create');
            Route::post('/armazenamento', 'StorageController@store');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.edit']], function () {
            Route::get('/armazenamento/editar/{id}', 'StorageController@edit');
            Route::post('/armazenamento/{id}', 'StorageController@update');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.additional']], function () {
            Route::get('armazenamento/pdf/{armazenamento}', 'StorageController@pdf');
            Route::get('/armazenamento/imprimir/{proposal}', 'StorageController@imprimir');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.delete']], function () {
            Route::get('/armazenamento/apagar/{id}', 'StorageController@destroy');
        });
    });

    //Hosting
    Route::group(['middleware' => ['role_or_permission:proposals.read']], function () {
        Route::get('/hospedagem', 'HostingController@index');
        Route::get('/hospedagem/visualizar/{id}', 'HostingController@show');
        Route::group(['middleware' => ['role_or_permission:proposals.create']], function () {
            Route::get('/hospedagem/novo', 'HostingController@create');
            Route::post('/hospedagem', 'HostingController@store');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.edit']], function () {
            Route::get('/hospedagem/editar/{id}', 'HostingController@edit');
            Route::post('/hospedagem/{id}', 'HostingController@update');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.additional']], function () {
            Route::get('hospedagem/pdf/{hospedagem}', 'HostingController@pdf');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.delete']], function () {
            Route::get('/hospedagem/apagar/{id}', 'HostingController@destroy');
        });
    });

    //Development
    Route::group(['middleware' => ['role_or_permission:proposals.read']], function () {
        Route::get('/desenvolvimento', 'DevelopmentController@index');
        Route::get('/desenvolvimento/visualizar/{id}', 'DevelopmentController@show');
        Route::group(['middleware' => ['role_or_permission:proposals.create']], function () {
            Route::get('/desenvolvimento/novo', 'DevelopmentController@create');
            Route::post('/desenvolvimento', 'DevelopmentController@store');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.edit']], function () {
            Route::get('/desenvolvimento/editar/{id}', 'DevelopmentController@edit');
            Route::post('/desenvolvimento/{id}', 'DevelopmentController@update');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.additional']], function () {
            Route::get('desenvolvimento/pdf/{desenvolvimento}', 'DevelopmentController@pdf');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.delete']], function () {
            Route::get('/desenvolvimento/apagar/{id}', 'DevelopmentController@destroy');
        });
    });

    //Consulting
    Route::group(['middleware' => ['role_or_permission:proposals.read']], function () {
        Route::get('/consultoria', 'ConsultingController@index');
        Route::get('/consultoria/visualizar/{id}', 'ConsultingController@show');
        Route::group(['middleware' => ['role_or_permission:proposals.create']], function () {
            Route::get('/consultoria/novo', 'ConsultingController@create');
            Route::post('/consultoria', 'ConsultingController@store');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.edit']], function () {
            Route::get('/consultoria/editar/{id}', 'ConsultingController@edit');
            Route::post('/consultoria/{id}', 'ConsultingController@update');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.additional']], function () {
            Route::get('consultoria/pdf/{consultoria}', 'ConsultingController@pdf');
        });
        Route::group(['middleware' => ['role_or_permission:proposals.delete']], function () {
            Route::get('/consultoria/apagar/{id}', 'ConsultingController@destroy');
        });
    });


    // TEST
    //Requirements - test
    Route::group(['middleware' => ['role_or_permission:tests.read']], function () {
        Route::get('teste-requisitos', 'RequirementTestSystemController@index');
        Route::get('teste-requisitos/visualizar/{id}', 'RequirementTestSystemController@show');

        Route::group(['middleware' => ['role_or_permission:tests.create']], function () {
            Route::get('teste-requisitos/novo', 'RequirementTestSystemController@create');
            Route::post('teste-requisitos', 'RequirementTestSystemController@store');
        });

        Route::group(['middleware' => ['role_or_permission:tests.edit']], function () {
            Route::post('teste-requisitos/{id}', 'RequirementTestSystemController@update');
        });
        
        Route::group(['middleware' => ['role_or_permission:tests.additional']], function () {
            Route::get('teste-requisitos/excel/{id}', 'RequirementTestSystemController@excel');
            Route::get('teste-requisitos/editar/{id}', 'RequirementTestSystemController@edit');
        });

        Route::group(['middleware' => ['role_or_permission:tests.delete']], function () {
            Route::get('teste-requisitos/apagar/{id}', 'RequirementTestSystemController@destroy');
        });
    });

    //Crudes - test
    Route::group(['middleware' => ['role_or_permission:tests.read']], function () {
        Route::get('teste-crudes', 'CrudsTestController@index');
        Route::get('teste-crudes/visualizar/{id}', 'CrudsTestController@show');

        Route::group(['middleware' => ['role_or_permission:tests.create']], function () {
            Route::get('teste-crudes/novo', 'CrudsTestController@create');
            Route::post('teste-crudes', 'CrudsTestController@store');
        });
        Route::group(['middleware' => ['role_or_permission:tests.edit']], function () {
            Route::get('teste-crudes/editar/{id}', 'CrudsTestController@edit');
            Route::post('teste-crudes/{id}', 'CrudsTestController@update');
        });
        Route::group(['middleware' => ['role_or_permission:tests.additional']], function () {
            Route::get('teste-crudes/excel/{id}', 'CrudsTestController@excel');
        });
        Route::group(['middleware' => ['role_or_permission:tests.delete']], function () {
            Route::get('teste-crudes/apagar/{id}', 'CrudsTestController@destroy');
        });
    });

    //Use case - test
    Route::group(['middleware' => ['role_or_permission:tests.read']], function () {
        Route::get('teste-caso-de-uso', 'UsecaseTestController@index');
        Route::get('teste-caso-de-uso/visualizar/{id}', 'UsecaseTestController@show');

        Route::group(['middleware' => ['role_or_permission:tests.create']], function () {
            Route::get('teste-caso-de-uso/novo', 'UsecaseTestController@create');
            Route::post('teste-caso-de-uso', 'UsecaseTestController@store');
        });
        Route::group(['middleware' => ['role_or_permission:tests.edit']], function () {
            Route::get('teste-caso-de-uso/editar/{id}', 'UsecaseTestController@edit');
            Route::post('teste-caso-de-uso/{id}', 'UsecaseTestController@update');
        });
        Route::group(['middleware' => ['role_or_permission:tests.additional']], function () {
            Route::get('teste-caso-de-uso/excel/{id}', 'UsecaseTestController@excel');
        });
        Route::group(['middleware' => ['role_or_permission:tests.delete']], function () {
            Route::get('teste-caso-de-uso/apagar/{id}', 'UsecaseTestController@destroy');
        });
    });

    //Functional - test
    Route::group(['middleware' => ['role_or_permission:tests.read']], function () {
        Route::get('testes-funcionais', 'FunctionalitTestController@index');
        Route::get('testes-funcionais/visualizar/{id}', 'FunctionalitTestController@show');

        Route::group(['middleware' => ['role_or_permission:tests.create']], function () {
            Route::get('testes-funcionais/novo', 'FunctionalitTestController@create');
            Route::post('testes-funcionais', 'FunctionalitTestController@store');
        });
        Route::group(['middleware' => ['role_or_permission:tests.edit']], function () {
            Route::get('testes-funcionais/editar/{id}', 'FunctionalitTestController@edit');
            Route::post('testes-funcionais/{id}', 'FunctionalitTestController@update');
        });
        Route::group(['middleware' => ['role_or_permission:tests.additional']], function () {
            Route::get('testes-funcionais/excel/{id}', 'FunctionalitTestController@excel');
        });
        Route::group(['middleware' => ['role_or_permission:tests.delete']], function () {
            Route::get('testes-funcionais/apagar/{id}', 'FunctionalitTestController@destroy');
        });
    });
});


// Misc Route
Route::get('/page-404', 'MiscController@page404');
Route::get('/page-500', 'MiscController@page500');


// locale route
// Route::get('lang/{locale}',[LanguageController::class, 'swap']);

Auth::routes();
