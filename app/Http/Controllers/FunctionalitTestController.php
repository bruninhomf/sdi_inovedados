<?php

namespace App\Http\Controllers;

use App\FunctionalitTestModule;
use App\FunctionalitTestRequirement;
use App\FunctionalitTestSystem;
use Illuminate\Http\Request;

class FunctionalitTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/functionalit-test', [
            'functionalittestsystems' => FunctionalitTestSystem::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/functionalit-test-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $functionalittestsystem = FunctionalitTestSystem::create($request->except('modulos'));
        $functionalittestsystem->insertModules($request->only('modulos'));
        return redirect('testes-funcionais');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/functionalit-test-view', [
            'functionalittestsystems' => FunctionalitTestSystem::find($id),
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/pages/requirements-test-edit', [
            'functionalittestsystems'        => FunctionalitTestSystem::find($id), 
            'functionalittestmodules'        => FunctionalitTestModule::find($id), 
            'functionalittestrequirements'   => FunctionalitTestRequirement::find($id),
        ]);
        return redirect('testes-funcionais');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $functionalittestsystem       =  FunctionalitTestSystem::find($id);
        $functionalittestmodule       =  FunctionalitTestModule::find($id);
        $functionalittestrequirement  =  FunctionalitTestRequirement::find($id);
        if(isset($functionalittestsystem)) {
            $functionalittestsystem -> name_system  =  $request->input('project_name');
        }
        if(isset($functionalittestmodule)) {
            $functionalittestsystem -> name         =  $request->input('name');
        }
        if(isset($functionalittestrequirement)) {
            $functionalittestsystem -> test         =  $request->input('test');
            $functionalittestsystem -> result       =  $request->input('result');
            $functionalittestsystem -> status       =  $request->input('status');
            $functionalittestsystem -> save();
        }
        return redirect('teste-requisitos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $functionalittestsystem = FunctionalitTestSystem::find($id);
        if (isset($functionalittestsystem)) {
            $functionalittestsystem->delete();
        }
        return redirect('testes-funcionais');
    }
}
