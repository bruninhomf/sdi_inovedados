<?php

namespace App\Http\Controllers;

use App\StorageProposal;
use \PDF;

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

    public function teste()
    {
        $pdf = PDF::loadView('pdf.report');
return $pdf->stream('report.pdf', array('Attachment' => 0));
    }
}
