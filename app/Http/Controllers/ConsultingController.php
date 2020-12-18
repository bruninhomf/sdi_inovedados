<?php

namespace App\Http\Controllers;

use App\ConsultingProposal;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class ConsultingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/consulting-proposal', [
            'consultingproposals' => ConsultingProposal::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/consulting-proposal-add');
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
            'project'                  => 'required', 
            'version'                  => 'required', 
            'date'                     => 'required', 
            'first_payment'            => 'required', 
            'first_payment_date'       => 'required', 
            'amount'                   => 'required',
            'proposal_validity'        => 'required', 
            'business_solution_one'    => 'required', 
            'client'                   => 'required',
            'contact_name'             => 'required', 
            'cnpj'                     => 'required', 
            'phone'                    => 'required', 
            'address'                  => 'required'
            ]);

        ConsultingProposal::create($request->all());
        return redirect('consultoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/consulting-proposal-view', [
            'consultingproposal' => ConsultingProposal::find($id),
        ]);
    }

    public function pdf(ConsultingProposal $consultoria)
    {
        $html = view('pages/consulting-proposal-pdf', [
            'consultingproposal' => $consultoria
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
        return view('/pages/consulting-proposal-edit', [
            'consultingproposal' => ConsultingProposal::find($id),
        ]);
        return redirect('consultoria');
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
        $consultingproposal = ConsultingProposal::find($id);
        if(isset($consultingproposal)) {
            $consultingproposal -> project               = $request->input('project');
            $consultingproposal -> version               = $request->input('version');
            $consultingproposal -> date                  = $request->input('date');
            $consultingproposal -> business_solution_one = $request->input('business_solution_one');
            $consultingproposal -> contact_name          = $request->input('contact_name');
            $consultingproposal -> client                = $request->input('client');
            $consultingproposal -> address               = $request->input('address');
            $consultingproposal -> phone                 = $request->input('phone');
            $consultingproposal -> cnpj                  = $request->input('cnpj');
            $consultingproposal -> amount                = $request->input('amount');
            $consultingproposal -> first_payment         = $request->input('first_payment');
            $consultingproposal -> first_payment_date    = $request->input('first_payment_date');
            $consultingproposal -> second_payment        = $request->input('second_payment');
            $consultingproposal -> second_payment_date   = $request->input('second_payment_date');
            $consultingproposal -> proposal_validity     = $request->input('proposal_validity');
            $consultingproposal -> save();
        }
        return redirect('consultoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultingproposal = ConsultingProposal::find($id);
        if (isset($consultingproposal)) {
            $consultingproposal->delete();
        }
        return redirect('consultoria');
    }
}
