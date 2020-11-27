<?php

namespace App\Http\Controllers;

use App\StorageProposal;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

// Create new Spreadsheet object
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Protection;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;


use PhpOffice\PhpSpreadsheet\Cell\DataValidation;
use PhpOffice\PhpSpreadsheet\NamedRange;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/dashboard', ['pageConfigs' => $pageConfigs]);
    }

    public function minhaconta()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/minhaconta', ['pageConfigs' => $pageConfigs]);
    }

    public function historico()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/historico', ['pageConfigs' => $pageConfigs]);
    }

    public function excel()
    {
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

            
        $spreadsheet->getActiveSheet()->setCellValue('A6', '1');
        $spreadsheet->getActiveSheet()->setCellValue('B6', 'Gestão de clientes');
        $spreadsheet->getActiveSheet()->setCellValue('C6', 'Deve conter formulário de cadastro de dados pessoais, deve ser possivel visualizar, editar e ativa/desativar o cliente.');
        $spreadsheet->getActiveSheet()->setCellValue('D6', 'Online');


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
