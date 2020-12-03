<?php

namespace App\Http\Controllers;

use App\RequirementsGatherings;
use App\RequirementsGatheringsDescriptions;
use App\RequirementsGatheringsMenus;
use App\RequirementsGatheringsTitles;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class RequirementsGatheringsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/requirements-gathering', [
            'requirementsgatherings' => RequirementsGatherings::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/requirements-gathering-add', [
            'requirementsgatherings' => RequirementsGatherings::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(['project_name' => 'required']);
        // $request->validate(['lr_id' => 'required']);
        // dd($request->all());
        $requirementsgatherings = RequirementsGatherings::create($request->all());
        $requirementsgatheringstitles = RequirementsGatheringsTitles::create($request->all());
        $requirementsgatheringsmenu = RequirementsGatheringsMenus::create($request->all());
        $requirementsgatheringsdescriptions = RequirementsGatheringsDescriptions::create($request->all());
        return redirect('requisitos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RequirementsGatherings  $requirementsGatherings
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/requirements-gathering-view', [
            'requisitos' => RequirementsGatherings::find($id),
         ]);
    }


    public function pdf(RequirementsGatherings $requisitos)
    {
        // $css = asset('css/pages/pdf.css');
        $html = view('pages/requirements-gathering-pdf', [
            'requirementsgathering' => $requisitos
        ])->render();
        $mpdf = new Mpdf();
        // $mpdf->WriteHTML($css, 1);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RequirementsGatherings  $requirementsGatherings
     * @return \Illuminate\Http\Response
     */
    public function edit(RequirementsGatherings $requirementsGatherings)
    {
        return view('/pages/requirements-gathering-edit', [
            'requirementsgathering' => RequirementsGatherings::find($id),
        ]);
        return redirect('requisitos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RequirementsGatherings  $requirementsGatherings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requirementsgathering = RequirementsGatherings::find($id);
        if(isset($requirementsgathering)) {
            $requirementsgathering -> cpu    = $request->input('cpu');
            $requirementsgathering -> memory = $request->input('memory');
            $requirementsgathering -> system = $request->input('system');
            $requirementsgathering -> ip     = $request->input('ip');
            $requirementsgathering -> value  = $request->input('value');
            $requirementsgathering -> save();
        }
        return redirect('requisitos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RequirementsGatherings  $requirementsGatherings
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $requirementsgathering = RequirementsGatherings::find($id);
        if (isset($requirementsgathering)) {
            $requirementsgathering->delete();
        }
        return redirect('requisitos');
    }
}
