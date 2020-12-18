<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HostingProposal;
use Mpdf\Mpdf;

class HostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/hosting-proposal', [
            'hostingproposals' => HostingProposal::all(), 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/hosting-proposal-add');
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
            'diskspace'   => 'required', 
            'traffic'     => 'required', 
            'domanins'    => 'required', 
            'subdomains'  => 'required',
            'mailboxes'   => 'required', 
            'ftp_accounts'     => 'required', 
            'database'    => 'required', 
            'php_processes'  => 'required',
            'value'       => 'required'
            ]);

        HostingProposal::create($request->all());
        return redirect('hospedagem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/hosting-proposal-view', [
            'hostingproposal' => HostingProposal::find($id),
        ]);
    }

    public function pdf(HostingProposal $hospedagem)
    {
        $html = view('pages/hosting-proposal-pdf', [
            'hostingproposal' => $hospedagem
        ])->render();
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
        return view('/pages/hosting-proposal-edit', [
            'hostingproposal' => HostingProposal::find($id),
        ]);
        return redirect('hospedagem');
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
        $hostingproposal = HostingProposal::find($id);
        if(isset($hostingproposal)) {
            $hostingproposal -> diskspace     = $request->input('diskspace');
            $hostingproposal -> traffic       = $request->input('traffic');
            $hostingproposal -> domanins      = $request->input('domanins');
            $hostingproposal -> subdomains    = $request->input('subdomains');
            $hostingproposal -> mailboxes     = $request->input('mailboxes');
            $hostingproposal -> ftp_accounts  = $request->input('ftp_accounts');
            $hostingproposal -> database      = $request->input('database');
            $hostingproposal -> php_processes = $request->input('php_processes');
            $hostingproposal -> value         = $request->input('value');
            $hostingproposal -> save();
        }
        return redirect('hospedagem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hostingproposal = HostingProposal::find($id);
        if (isset($hostingproposal)) {
            $hostingproposal->delete();
        }
        return redirect('hospedagem');
    }
}
