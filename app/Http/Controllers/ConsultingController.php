<?php

namespace App\Http\Controllers;

use App\ConsultingProposal;
use Illuminate\Http\Request;

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
        return view('pages/consulting-add-proposal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        return view('/pages/consulting-view-proposal', [
            'consultingproposal' => ConsultingProposal::find($id),
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
        return view('/pages/consulting-edit-proposal', [
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
