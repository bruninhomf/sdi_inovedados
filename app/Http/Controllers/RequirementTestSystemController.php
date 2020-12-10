<?php

namespace App\Http\Controllers;

use App\RequirementTestSystem;
use App\RequirementTestModule;
use App\RequirementTestRequirement;
use Illuminate\Http\Request;

class RequirementTestSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/requirements-test', [
            'requirementtestsystems' => RequirementTestSystem::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/requirements-test-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requirementTestSystem = RequirementTestSystem::create($request->except('modulos'));
        $requirementTestSystem->insertModules($request->only('modulos'));
        return redirect('teste-requisitos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RequirementTestSystem  $requirementTestSystem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/requirementes-test-view', [
           'requirementtestsystems' => RequirementTestSystem::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RequirementTestSystem  $requirementTestSystem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/pages/requirements-test-edit', [
            'requirementtestsystems'        => RequirementTestSystem::find($id), 
            'requirementtestmodules'        => RequirementTestModule::find($id), 
            'requirementtestrequirements'   => RequirementTestRequirement::find($id),
        ]);
        return redirect('teste-requisitos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RequirementTestSystem  $requirementTestSystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requirementtestsystem       =  RequirementTestSystem::find($id);
        $requirementtestmodule       =  RequirementTestModule::find($id);
        $requirementtestrequirement  =  RequirementTestRequirement::find($id);
        if(isset($requirementtestsystem)) {
            $requirementtestsystem -> name_system  =  $request->input('name_system');
        }
        if(isset($requirementtestmodule)) {
            $requirementtestsystem -> name         =  $request->input('name');
        }
        if(isset($requirementtestrequirement)) {
            $requirementtestsystem -> description  =  $request->input('description');
            $requirementtestsystem -> status       =  $request->input('status');
            $requirementtestsystem -> save();
        }
        return redirect('teste-requisitos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RequirementTestSystem  $requirementTestSystem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $requirementtestsystem = RequirementTestSystem::find($id);
        if (isset($requirementtestsystem)) {
            $requirementtestsystem->delete();
        }
        return redirect('teste-requisitos');
    }
}
