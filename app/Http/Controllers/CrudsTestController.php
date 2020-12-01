<?php

namespace App\Http\Controllers;

use App\CrudsTestSystem;
use Illuminate\Http\Request;

class CrudsTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/cruds-test', [
            'crudstestsystems' => CrudsTestSystem::all(),
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
     * @param  \App\CrudsTest  $crudsTest
     * @return \Illuminate\Http\Response
     */
    public function show(CrudsTest $crudsTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CrudsTest  $crudsTest
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudsTest $crudsTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CrudsTest  $crudsTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CrudsTest $crudsTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CrudsTest  $crudsTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudsTest $crudsTest)
    {
        //
    }
}
