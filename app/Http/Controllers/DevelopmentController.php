<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevelopmentProposal;
use Mpdf\Mpdf;

class DevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/development-proposal', [
            'developmentproposals' => DevelopmentProposal::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/development-proposal-add');
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
            'start_development'        => 'required',
            'texting_release'          => 'required', 
            'start_test'               => 'required', 
            'homologation'             => 'required', 
            'delivery'                 => 'required',
            'requirements'             => 'required', 
            'first_payment'            => 'required', 
            'first_payment_date'       => 'required', 
            'amount'                   => 'required',
            'proposal_validity'        => 'required', 
            'business_solution_one'    => 'required', 
            'business_solution_two'    => 'required', 
            'business_solution_three'  => 'required',
            'client'                   => 'required',
            'contact_name'             => 'required', 
            'cnpj'                     => 'required', 
            'phone'                    => 'required', 
            'address'                  => 'required'
            ]);

        DevelopmentProposal::create($request->all());
        return redirect('desenvolvimento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/development-proposal-view', [
            'developmentproposal' => DevelopmentProposal::find($id),
        ]);
    }

    public function pdf(DevelopmentProposal $desenvolvimento)
    {
        $html = view('pages/development-proposal-pdf', [
            'developmentproposal' => $desenvolvimento
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
        return view('/pages/development-proposal-edit', [
            'developmentproposal' => DevelopmentProposal::find($id),
        ]);
        return redirect('desenvolvimento');
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
        $developmentproposal = DevelopmentProposal::find($id);
        if(isset($developmentproposal)) {
            $developmentproposal -> project                 = $request->input('project');
            $developmentproposal -> version                 = $request->input('version');
            $developmentproposal -> date                    = $request->input('date');
            $developmentproposal -> business_solution_one   = $request->input('business_solution_one');
            $developmentproposal -> business_solution_two   = $request->input('business_solution_two');
            $developmentproposal -> business_solution_three = $request->input('business_solution_three');
            $developmentproposal -> requirements            = $request->input('requirements');
            $developmentproposal -> start_development       = $request->input('start_development');
            $developmentproposal -> texting_release         = $request->input('texting_release');
            $developmentproposal -> start_test              = $request->input('start_test');
            $developmentproposal -> delivery                = $request->input('delivery');
            $developmentproposal -> homologation            = $request->input('homologation');
            $developmentproposal -> contact_name            = $request->input('contact_name');
            $developmentproposal -> client                  = $request->input('client');
            $developmentproposal -> address                 = $request->input('address');
            $developmentproposal -> phone                   = $request->input('phone');
            $developmentproposal -> cnpj                    = $request->input('cnpj');
            $developmentproposal -> amount                  = $request->input('amount');
            $developmentproposal -> first_payment           = $request->input('first_payment');
            $developmentproposal -> first_payment_date      = $request->input('first_payment_date');
            $developmentproposal -> second_payment          = $request->input('second_payment');
            $developmentproposal -> second_payment_date     = $request->input('second_payment_date');
            $developmentproposal -> proposal_validity       = $request->input('proposal_validity');
            $developmentproposal -> save();
        }
        return redirect('desenvolvimento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $developmentproposal = DevelopmentProposal::find($id);
        if (isset($developmentproposal)) {
            $developmentproposal->delete();
        }
        return redirect('desenvolvimento');
    }
}
