<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\virtualProposal;

class VirtualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/virtual-proposal', [
            'vproposals' => virtualProposal::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/virtual-add-proposal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $virtualProposal = virtualProposal::create($request->all());
        return redirect('virtual/' . $virtualProposal->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/virtual-view-proposal', [
           'virtual/visualizar/' => virtualProposal::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/pages/virtual-edit-proposal', [
            'virtualProposal' => virtualProposal::find($id),
        ]);
        return redirect('virtual');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $virtualProposal = virtualProposal::find($id);
        if(isset($virtualProposal)) {
            $virtualProposal -> cpu    = $request->input('cpu');
            $virtualProposal -> memory = $request->input('memory');
            $virtualProposal -> system = $request->input('system');
            $virtualProposal -> ip     = $request->input('ip');
            $virtualProposal -> value  = $request->input('value');
            $virtualProposal -> save();
        }
        return redirect('virtual');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $virtualProposal = virtualProposal::find($id);
        if (isset($virtualProposal)) {
            $virtualProposal->delete();
        }
        return redirect('virtual');
    }
}
