<?php

namespace App\Http\Controllers;

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
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function show(FuncionalitTest $funcionalitTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function edit(FuncionalitTest $funcionalitTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FuncionalitTest $funcionalitTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuncionalitTest $funcionalitTest)
    {
        //
    }
}
