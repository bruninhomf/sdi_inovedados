<?php

namespace App\Http\Controllers;

use App\RequirementsGatherings;
use App\RequirementsGatheringsDescriptions;
use App\RequirementsGatheringsMenus;
use App\RequirementsGatheringsTitles;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

// PHP Office
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

// Create new Spreadsheet object
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;


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
        return view('/pages/requirements-gathering-add');
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
            'project_name'  => 'required', 
            'lr_id'         => 'required', 
            'version'       => 'required',
            'date'          => 'required'
        ]);
        
        $requirementsGatherings = RequirementsGatherings::create($request->all());
        return redirect('requisitos');


        // foreach ($request->requirements as $key => $requirementsgathering) {
            
        // dd($key, $requirementsgathering);
        //     $requirementsgatherings = RequirementsGatherings::create($request->except('requirements'));
        //     $requirementsgatherings->insertModules($request->only('requirements'));
        // }
        // return redirect('requisitos');
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
            'requirementsgathering'             => RequirementsGatherings::find($id),
            'requirementsgatheringtitles'      => RequirementsGatheringsTitles::find($id),
            'requirementsgatheringmenus'        => RequirementsGatheringsMenus::find($id),
            'requirementsgatheringdescriptions' => RequirementsGatheringsDescriptions::find($id) 
         ]);
    }


    public function pdf(RequirementsGatherings $requirementsgathering)
    {
        $html = view('pages/requirements-gathering-pdf', [
            'requirementsgatherings' => $requirementsgathering
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
     * @param  \App\RequirementsGatherings  $requirementsGatherings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
            $requirementsgathering->lr_id = $request->input('lr_id');
            $requirementsgathering->project_name = $request->input('project_name');
            $requirementsgathering->version = $request->input('version');
            $requirementsgathering->date = $request->input('date');
            $requirementsgathering->save();
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

    public function excel($id)
    {
        $requirementsgatherings = RequirementsGatherings::find($id);

        $row = 1; 

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

            
            foreach($requirementsgatherings->titles as $key => $titles) {
                $row = $key === 0 ? $row : $row++;
                $rowB = $row +1;

                $spreadsheet->getActiveSheet()->setCellValue("A{$row}", $titles->titles);
                $spreadsheet->getActiveSheet()->mergeCells("A{$row}:B{$rowB}");
                $spreadsheet->getActiveSheet()->getStyle("A{$row}:B{$rowB}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                $spreadsheet->getActiveSheet()->getStyle("A{$row}:B{$rowB}")->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
                $spreadsheet->getActiveSheet()->getStyle("A{$row}:B{$rowB}")->getFill()->setFillType(Fill::FILL_SOLID);
                $spreadsheet->getActiveSheet()->getStyle("A{$row}:B{$rowB}")->getFill()->getStartColor()->setARGB('212121');
                $spreadsheet->getActiveSheet()->getStyle("A{$row}:B{$rowB}")->getFont()->getColor()->setARGB(Color::COLOR_WHITE);
                $spreadsheet->getActiveSheet()->getStyle("A{$row}:B{$rowB}")->getFont()->setSize(18);
                $spreadsheet->getActiveSheet()->getStyle("A{$row}:B{$rowB}")->getFont()->setBold(true);
                $row = $row +2;
                foreach($titles->menu()->withCount('description')->get() as $key => $menu) {
                    
                    $rowB = $rowB + $menu->description_count;
                    $spreadsheet->getActiveSheet()->mergeCells("A{$row}:A{$rowB}");
                    $spreadsheet->getActiveSheet()->setCellValue("A{$row}", $menu->menu);
                    $spreadsheet->getActiveSheet()->getStyle("A{$row}")->getAlignment()->setWrapText(true);
                    $spreadsheet->getActiveSheet()->getStyle("A{$row}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                    $spreadsheet->getActiveSheet()->getStyle("A{$row}")->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
                    $spreadsheet->getActiveSheet()->getStyle("A{$row}")->getFill()->setFillType(Fill::FILL_SOLID);
                    $spreadsheet->getActiveSheet()->getStyle("A{$row}")->getFill()->getStartColor()->setARGB('d6d6d6');
                    $styleThinBlackBorderOutline = [
                        'borders' => [
                            'outline' => [
                                'borderStyle' => Border::BORDER_THIN,
                                'color' => ['argb' => 'FFFFFF'],
                            ],
                        ],
                    ];
                    $spreadsheet->getActiveSheet()->getStyle("A{$row}:A{$rowB}")->applyFromArray($styleThinBlackBorderOutline);
                    

                    foreach($menu->description as $key => $description) {
                        $valor = $row;
                        $spreadsheet->getActiveSheet()->setCellValue("B{$row}", $description->description);
                        // $spreadsheet->getActiveSheet()->setCellValue("A{$row}", $menu->menu);
                        $spreadsheet->getActiveSheet()->getStyle("B{$row}")->getAlignment()->setWrapText(true);
                        $spreadsheet->getActiveSheet()->getStyle("B{$row}")->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
                        
                        if($valor % 2 == 0){
                            $spreadsheet->getActiveSheet()->getStyle("B{$row}")->getFill()->setFillType(Fill::FILL_SOLID);
                            $spreadsheet->getActiveSheet()->getStyle("B{$row}")->getFill()->getStartColor()->setARGB('ffffff');
                       } else {
                            $spreadsheet->getActiveSheet()->getStyle("B{$row}")->getFill()->setFillType(Fill::FILL_SOLID);
                            $spreadsheet->getActiveSheet()->getStyle("B{$row}")->getFill()->getStartColor()->setARGB('ebebeb');
                       }
                        $row = $row +1;
                    }
                    
                }
            }

        // Set column widths
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(40);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(80);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Levantamento de requisitos.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
    }
}
