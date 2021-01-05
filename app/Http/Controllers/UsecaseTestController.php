<?php

namespace App\Http\Controllers;

use App\UsecaseTestSystem;
use App\UsecaseTestModule;
use App\UsecaseTestRequirement;
use Illuminate\Http\Request;

// PHP Office
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

// Create new Spreadsheet object
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;


class UsecaseTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/usecase-test', [
            'usecasetestsystems' => UsecaseTestSystem::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/usecase-test-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usecasetestsystem = UsecaseTestSystem::create($request->except('modulos'));
        $usecasetestsystem->insertModules($request->only('modulos'));
        return redirect('teste-caso-de-uso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsecaseTest  $usecaseTest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/usecase-test-view', [
            'usecasetestsystems' => UsecaseTestSystem::find($id),
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UsecaseTest  $usecaseTest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/pages/usecase-test-edit', [
            'usecasetestsystems'        => UsecaseTestSystem::find($id), 
            'usecasetestmodules'        => UsecaseTestModule::find($id), 
            'usecasetestrequirements'   => UsecaseTestRequirement::find($id),
        ]);
        return redirect('teste-caso-de-uso');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsecaseTest  $usecaseTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usecasetestsystem       =  UsecaseTestSystem::find($id);
        $usecasetestmodule       =  UsecaseTestModule::find($id);
        $usecasetestrequirement  =  UsecaseTestRequirement::find($id);
        if(isset($usecasetestsystem)) {
            $usecasetestsystem -> name_system  =  $request->input('project_name');
        }
        if(isset($usecasetestmodule)) {
            $usecasetestsystem -> name         =  $request->input('name');
        }
        if(isset($usecasetestrequirement)) {
            $usecasetestsystem -> test         =  $request->input('test');
            $usecasetestsystem -> result       =  $request->input('result');
            $usecasetestsystem -> status       =  $request->input('status');
            $usecasetestsystem -> save();
        }
        return redirect('teste-caso-de-uso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsecaseTest  $usecaseTest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usecasetestsystem = UsecaseTestSystem::find($id);
        if (isset($usecasetestsystem)) {
            $usecasetestsystem->delete();
        }
        return redirect('teste-caso-de-uso');
    }

    public function excel($id)
    {
        $usecasetestsystem = UsecaseTestSystem::find($id);
        $usecasetestmodules = UsecaseTestModule::where('usecase_id', $usecasetestsystem->id)->get();

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

        foreach($usecasetestmodules as $key => $usecasetestmodule) {
            $row = $key === 0 ? $row : $row++;

            $spreadsheet->getActiveSheet()->setCellValue("B{$row}", $usecasetestmodule->description);

            $usecasetestrequirements = UsecaseTestRequirement::where('module_id', $usecasetestmodule->id)->get();
            foreach($usecasetestrequirements as $key => $usecasetestrequirement) {
                $n = $row - 4;

                $spreadsheet->getActiveSheet()->setCellValue("A{$row}", $n);
                $spreadsheet->getActiveSheet()->setCellValue("C{$row}", $usecasetestrequirement->test);
                $spreadsheet->getActiveSheet()->setCellValue("D{$row}", $usecasetestrequirement->result);
                $spreadsheet->getActiveSheet()->setCellValue("E{$row}", $usecasetestrequirement->status);
                $row = $row +1;
            }
        }
        $line = 5;
        $cell = $spreadsheet->getActiveSheet()->setCellValue("B{$line}", $usecasetestmodule->description);

        if ($cell == $spreadsheet->getActiveSheet()->setCellValue("B{$line}", '')) {
            $spreadsheet->getActiveSheet()->setCellValue("F{$line}","Celula B{$line} está vazia");
        } else {
            $spreadsheet->getActiveSheet()->setCellValue("F{$line}","Celula B{$line} NÃO está vazia");
        }

        // Merge cells
        $spreadsheet->getActiveSheet()->mergeCells('A1:E3');

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
