<?php

namespace App\Http\Controllers;

use App\CrudsTestModule;
use App\CrudsTestRequirement;
use App\CrudsTestSystem;
use Illuminate\Http\Request;

// PHP Office
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

// Create new Spreadsheet object
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;


class CrudsTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/cruds-test', [
            'crudstestsystems' => CrudsTestSystem::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/cruds-test-add');
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
            'name'          => 'required', 
            'description'   => 'required', 
            'register'      => 'required', 
            'view'          => 'required',
            'edit'          => 'required', 
            'delete'        => 'required'
            ]);

        $crudstestsystem = CrudsTestSystem::create($request->except('modulos'));
        $crudstestsystem->insertModules($request->only('modulos'));
        return redirect('teste-crudes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CrudsTest  $crudsTest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/cruds-test-view', [
            'crudstestsystems' => CrudsTestSystem::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CrudsTest  $crudsTest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/pages/cruds-test-edit', [
            'crudstestsystems'        => CrudsTestSystem::find($id), 
            'crudstestmodules'        => CrudsTestModule::find($id), 
            'crudstestrequirements'   => CrudsTestRequirement::find($id),
        ]);
        return redirect('teste-crudes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CrudsTest  $crudsTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crudstestsystem       =  CrudsTestSystem::find($id);
        $crudstestmodule       =  CrudsTestModule::find($id);
        $crudstestrequirement  =  CrudsTestRequirement::find($id);
        if(isset($crudstestsystem)) {
            $crudstestsystem -> name  =  $request->input('name');
        }
        if(isset($crudstestmodule)) {
            $crudstestsystem -> description         =  $request->input('description');
        }
        if(isset($crudstestrequirement)) {
            $crudstestsystem -> description  =  $request->input('description');
            $crudstestsystem -> register     =  $request->input('register');
            $crudstestsystem -> view         =  $request->input('view');
            $crudstestsystem -> edit         =  $request->input('edit');
            $crudstestsystem -> delete       =  $request->input('delete');
            $crudstestsystem -> save();
        }
        return redirect('teste-requisitos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CrudsTest  $crudsTest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crudstestsystem = CrudsTestSystem::find($id);
        if (isset($crudstestsystem)) {
            $crudstestsystem->delete();
        }
        return redirect('teste-crudes');
    }

    public function excel($id)
    {
        $crudstestsystem = CrudsTestSystem::find($id);
        $crudstestmodules = CrudsTestModule::where('cruds_id', $crudstestsystem->id)->get();

        $row = 6; 

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'TESTES DE REQUISITOS')
            ->setCellValue('A4', 'Nº')
            ->setCellValue('B4', 'Módulos')
            ->setCellValue('C4', 'Requisitos')
            ->setCellValue('D4', 'Situação')
            ->setCellValue('A5', 'INICIO');

        foreach($crudstestmodules as $key => $crudstestmodule) {
            $row = $key === 0 ? $row : $row++;
            
            $spreadsheet->getActiveSheet()->setCellValue("B{$row}", $crudstestmodule->name);
            
            $crudstestrequirements = CrudsTestRequirement::where('module_id', $crudstestmodule->id)->get();
            foreach($crudstestrequirements as $key => $crudstestrequirement) {
                $n = $row - 5;

                $spreadsheet->getActiveSheet()->setCellValue("A{$row}", $n);
                $spreadsheet->getActiveSheet()->setCellValue("C{$row}", $crudstestrequirement->description);
                $spreadsheet->getActiveSheet()->setCellValue("D{$row}", $crudstestrequirement->status);
                $row = $row +1;
            }
        }


        // Merge cells
        $spreadsheet->getActiveSheet()->mergeCells('A1:D3');
        $spreadsheet->getActiveSheet()->mergeCells('A5:D5'); // Just to test...

        // Set alignments
        $spreadsheet->getActiveSheet()->getStyle('A1:D100')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('A1:D5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('D6:D100')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        // Set thin black border outline around column
        $styleThinBlackBorderOutline = [
            'borders' => [
                'outline' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];
        $spreadsheet->getActiveSheet()->getStyle('A1:D3')->applyFromArray($styleThinBlackBorderOutline);
        $spreadsheet->getActiveSheet()->getStyle('A4:D4')->applyFromArray($styleThinBlackBorderOutline);

        // Set fills background collors
        $spreadsheet->getActiveSheet()->getStyle('A1:D5')->getFill()->setFillType(Fill::FILL_SOLID);
        $spreadsheet->getActiveSheet()->getStyle('A1:D4')->getFill()->getStartColor()->setARGB('404040');
        $spreadsheet->getActiveSheet()->getStyle('A5:D5')->getFill()->getStartColor()->setARGB('757171');

        // Set column widths
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(6);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(32);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(62);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(11);

        // Set fonts
        $spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
        $spreadsheet->getActiveSheet()->getStyle('A4:D5')->getFont()->setSize(12);
        $spreadsheet->getActiveSheet()->getStyle('A1:D5')->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle('A1:D5')->getFont()->getColor()->setARGB(Color::COLOR_WHITE);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Levantamento de requisitos.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
    }
}
