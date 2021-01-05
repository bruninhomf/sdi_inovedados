<?php

namespace App\Http\Controllers;

use App\FunctionalitTestModule;
use App\FunctionalitTestRequirement;
use App\FunctionalitTestSystem;
use Illuminate\Http\Request;

// PHP Office
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

// Create new Spreadsheet object
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;


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
        return view('/pages/functionalit-test-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $functionalittestsystem = FunctionalitTestSystem::create($request->except('modulos'));
        $functionalittestsystem->insertModules($request->only('modulos'));
        return redirect('testes-funcionais');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/functionalit-test-view', [
            'functionalittestsystems' => FunctionalitTestSystem::find($id),
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/pages/functionalit-test-edit', [
            'functionalittestsystems'        => FunctionalitTestSystem::find($id), 
            'functionalittestmodules'        => FunctionalitTestModule::find($id), 
            'functionalittestrequirements'   => FunctionalitTestRequirement::find($id),
        ]);
        return redirect('testes-funcionais');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $functionalittestsystem       =  FunctionalitTestSystem::find($id);
        $functionalittestmodule       =  FunctionalitTestModule::find($id);
        $functionalittestrequirement  =  FunctionalitTestRequirement::find($id);
        if(isset($functionalittestsystem)) {
            $functionalittestsystem -> name_system  =  $request->input('project_name');
        }
        if(isset($functionalittestmodule)) {
            $functionalittestsystem -> description  =  $request->input('description');
        }
        if(isset($functionalittestrequirement)) {
            $functionalittestsystem -> test         =  $request->input('test');
            $functionalittestsystem -> result       =  $request->input('result');
            $functionalittestsystem -> status       =  $request->input('status');
            $functionalittestsystem -> save();
        }
        return redirect('testes-funcionais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuncionalitTest  $funcionalitTest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $functionalittestsystem = FunctionalitTestSystem::find($id);
        if (isset($functionalittestsystem)) {
            $functionalittestsystem->delete();
        }
        return redirect('testes-funcionais');
    }

    public function excel($id)
    {
        $functionalittestsystem = FunctionalitTestSystem::find($id);
        $functionalittestmodules = FunctionalitTestModule::where('functionalit_id', $functionalittestsystem->id)->get();

        $row = 5; 

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'TESTES DE REQUISITOS')
            ->setCellValue('A4', 'Nº')
            ->setCellValue('B4', 'Módulos')
            ->setCellValue('C4', 'Testes a serem executados')
            ->setCellValue('D4', 'Resultado a ser apresentado')
            ->setCellValue('E4', 'Situação');

        foreach($functionalittestmodules as $key => $functionalittestmodule) {
            $row = $key === 0 ? $row : $row++;

            $spreadsheet->getActiveSheet()->setCellValue("B{$row}", $functionalittestmodule->description);

            $functionalittestrequirements = FunctionalitTestRequirement::where('module_id', $functionalittestmodule->id)->get();
            foreach($functionalittestrequirements as $key => $functionalittestrequirement) {
                $n = $row - 4;

                $spreadsheet->getActiveSheet()->setCellValue("A{$row}", $n);
                $spreadsheet->getActiveSheet()->setCellValue("C{$row}", $functionalittestrequirement->test);
                $spreadsheet->getActiveSheet()->setCellValue("D{$row}", $functionalittestrequirement->result);
                $spreadsheet->getActiveSheet()->setCellValue("E{$row}", $functionalittestrequirement->status);
                $row = $row +1;
            }
        }

        // Merge cells
        $spreadsheet->getActiveSheet()->mergeCells('A1:E3'); // Just to test...

        // Set alignments
        $spreadsheet->getActiveSheet()->getStyle('A1:E1000')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('A1:A1000')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('A1:E4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('E5:E1000')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        // wrap text
        $spreadsheet->getActiveSheet()->getStyle('B5:D1000')->getAlignment()->setWrapText(true);

        // Set thin black border outline around column
        $styleThinBlackBorderOutline = [
            'borders' => [
                'outline' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];
        $spreadsheet->getActiveSheet()->getStyle('A1:E3')->applyFromArray($styleThinBlackBorderOutline);
        $spreadsheet->getActiveSheet()->getStyle('A4:E4')->applyFromArray($styleThinBlackBorderOutline);

        // Set fills background collors
        $spreadsheet->getActiveSheet()->getStyle('A1:E4')->getFill()->setFillType(Fill::FILL_SOLID);
        $spreadsheet->getActiveSheet()->getStyle('A1:E4')->getFill()->getStartColor()->setARGB('404040');

        // Set column widths
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(6);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(32);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(55);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(55);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(13);

        // Set fonts
        $spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
        $spreadsheet->getActiveSheet()->getStyle('A4:E4')->getFont()->setSize(12);
        $spreadsheet->getActiveSheet()->getStyle('A1:E4')->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle('A1:E4')->getFont()->getColor()->setARGB(Color::COLOR_WHITE);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Levantamento de requisitos.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
    }
}
