<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/dashboard', ['pageConfigs' => $pageConfigs]);
    }

    public function usuariovisualizar()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/user-view', ['pageConfigs' => $pageConfigs]);
    }

    public function usuarioeditar()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/usuarioeditar', ['pageConfigs' => $pageConfigs]);
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
}
