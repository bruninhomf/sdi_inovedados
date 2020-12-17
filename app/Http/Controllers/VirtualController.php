<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\virtualProposal;
use Mpdf\Mpdf;

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
            'virtualProposals' => virtualProposal::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/virtual-proposal-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cpu'     => 'required', 
            'memory'  => 'required', 
            'network' => 'required', 
            'system'  => 'required', 
            'ip'      => 'required',
            'value'   => 'required'
            ]);

        $virtualProposal = virtualProposal::create($request->all());
        return redirect('virtual');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/virtual-proposal-view', [
           'virtualproposal' => virtualProposal::find($id),
        ]);
    }

    public function pdf(virtualProposal $virtual)
    {
        // $css = asset('css/pages/pdf.css');
        $html = view('pages/virtual-proposal-pdf', [
            'virtualproposal' => $virtual
        ])->render();
        // return $html;
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_top' => 0,
            'margin_left' => 0,
            'margin_right' => 0,
            'margin_bottom' => 0,
            'margin_footer' => 0,
            'mirrorMargins' => true,
        ]);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/pages/virtual-proposal-edit', [
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
            $virtualProposal->cpu    = $request->input('cpu');
            $virtualProposal->memory = $request->input('memory');
            $virtualProposal->system = $request->input('system');
            $virtualProposal->ip     = $request->input('ip');
            $virtualProposal->value  = $request->input('value');
            $virtualProposal->save();
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
