<?php

namespace App\Http\Controllers;

use App\UsecaseTestSystem;
use App\UsecaseTestModule;
use App\UsecaseTestRequirement;
use Illuminate\Http\Request;

class UsecaseTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/usecase-test', [
            'usecasetestsystems' => UsecaseTestSystem::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/usecase-test-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usecasetestsystem = UsecaseTestSystem::create($request->except('modulos'));
        $usecasetestsystem->insertModules($request->only('modulos'));
        return redirect('teste-caso-de-uso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsecaseTest  $usecaseTest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/usecase-test-view', [
            'usecasetestsystems' => UsecaseTestSystem::find($id),
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UsecaseTest  $usecaseTest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/pages/usecase-test-edit', [
            'usecasetestsystems'        => UsecaseTestSystem::find($id), 
            'usecasetestmodules'        => UsecaseTestModule::find($id), 
            'usecasetestrequirements'   => UsecaseTestRequirement::find($id),
        ]);
        return redirect('teste-caso-de-uso');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsecaseTest  $usecaseTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usecasetestsystem       =  UsecaseTestSystem::find($id);
        $usecasetestmodule       =  UsecaseTestModule::find($id);
        $usecasetestrequirement  =  UsecaseTestRequirement::find($id);
        if(isset($usecasetestsystem)) {
            $usecasetestsystem -> name_system  =  $request->input('project_name');
        }
        if(isset($usecasetestmodule)) {
            $usecasetestsystem -> name         =  $request->input('name');
        }
        if(isset($usecasetestrequirement)) {
            $usecasetestsystem -> test         =  $request->input('test');
            $usecasetestsystem -> result       =  $request->input('result');
            $usecasetestsystem -> status       =  $request->input('status');
            $usecasetestsystem -> save();
        }
        return redirect('teste-caso-de-uso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsecaseTest  $usecaseTest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usecasetestsystem = UsecaseTestSystem::find($id);
        if (isset($usecasetestsystem)) {
            $usecasetestsystem->delete();
        }
        return redirect('teste-caso-de-uso');
    }
}
