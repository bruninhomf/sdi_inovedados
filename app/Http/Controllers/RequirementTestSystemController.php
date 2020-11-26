<?php

namespace App\Http\Controllers;

use App\RequirementTestSystem;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RequirementTestSystem  $requirementTestSystem
     * @return \Illuminate\Http\Response
     */
    public function show(RequirementTestSystem $requirementTestSystem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RequirementTestSystem  $requirementTestSystem
     * @return \Illuminate\Http\Response
     */
    public function edit(RequirementTestSystem $requirementTestSystem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RequirementTestSystem  $requirementTestSystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequirementTestSystem $requirementTestSystem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RequirementTestSystem  $requirementTestSystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequirementTestSystem $requirementTestSystem)
    {
        //
    }
}
