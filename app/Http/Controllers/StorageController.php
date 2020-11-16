<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StorageProposal;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/storage-proposal', [
            'storageproposals' => StorageProposal::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/storage-add-proposal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        StorageProposal::create($request->all());
        return redirect('armazenamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/armazenamento-view-proposal', [
            'armazenamento/visualizar/' => StorageProposal::find($id),
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
        return view('/pages/storage-edit-proposal', [
            'storageProposal' => StorageProposal::find($id),
        ]);
        return redirect('armazenamento');
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
        $storageproposal = StorageProposal::find($id);
        if(isset($storageproposal)) {
            $storageproposal -> diskspace   = $request->input('diskspace');
            $storageproposal -> traffic     = $request->input('traffic');
            $storageproposal -> connections = $request->input('connections');
            $storageproposal -> accounts    = $request->input('accounts');
            $storageproposal -> value       = $request->input('value');
            $storageproposal -> save();
        }
        return redirect('armazenamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $storageproposal = StorageProposal::find($id);
        if (isset($storageproposal)) {
            $storageproposal->delete();
        }
        return redirect('armazenamento');
    }
}
