<?php

namespace App\Http\Controllers;

class MiscController extends Controller
{
    public function page404()
    {
        // custome class and customizer remove
        $pageConfigs = ['bodyCustomClass' => 'bg-full-screen-image', 'isCustomizer' => false];

        return view('pages.page-404', ['pageConfigs' => $pageConfigs]);
    }
    public function page500()
    {
        // custome class and customizer remove
        $pageConfigs = ['bodyCustomClass' => 'bg-full-screen-image', 'isCustomizer' => false];

        return view('pages.page-500', ['pageConfigs' => $pageConfigs]);
    }
}
