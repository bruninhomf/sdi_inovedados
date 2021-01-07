<?php

namespace App\Http\Controllers;

use App\ConsultingProposal;
use App\CrudsTestSystem;
use App\DevelopmentProposal;
use App\FunctionalitTestSystem;
use App\HostingProposal;
use Illuminate\Support\Facades\Auth;
use App\StorageProposal;
use App\RequirementTestSystem;
use App\RequirementsGatherings;
use App\UsecaseTestSystem;
use App\User;
use App\virtualProposal;
use Spatie\Permission\Models\Role;
// use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Role::create(['name'=>'user.read']);
        // return User::permission('users.read')->get();


        // navbar large
        $users = Auth::user();
        // $resultado = $users->can('users.read');

        $pageConfigs = ['navbarLarge' => false];

        // Return annual report Requirements
        $annualRequirementsGathering = [];
        $annualVirtual = [];
        $annualStorage = [];
        $annualHosting = [];
        $annualDevelopment = [];
        $annualConsulting = [];
        $annualRequirement = [];
        $annualCruds = [];
        $annualUsecase = [];
        $annualFunctionalit = [];
            $n = 1;
            while($n <= 12) {
                array_push($annualRequirementsGathering, RequirementsGatherings::getMonthRequirements($n));
                array_push($annualVirtual, virtualProposal::getMonthVirtual($n));
                array_push($annualStorage, StorageProposal::getMonthStorage($n));
                array_push($annualHosting, HostingProposal::getMonthHosting($n));
                array_push($annualDevelopment, DevelopmentProposal::getMonthDevelopment($n));
                array_push($annualConsulting, ConsultingProposal::getMonthCosulting($n));
                array_push($annualRequirement, RequirementTestSystem::getMonthRequirementsTest($n));
                array_push($annualCruds, CrudsTestSystem::getMonthCruds($n));
                array_push($annualUsecase, UsecaseTestSystem::getMonthUsecase($n));
                array_push($annualFunctionalit, FunctionalitTestSystem::getMonthFunctionalit($n));
                $n++;
            }
        $totalAnnualProposal = [];
        $totalAnnualTestes = [];
            $t = 0;
            while($t <= 11) {
                $totalAnnualProposal[] = ($annualVirtual[$t] + $annualStorage[$t] + $annualHosting[$t] + $annualDevelopment[$t] + $annualConsulting[$t]);
                $totalAnnualTestes[] = ($annualRequirement[$t] + $annualCruds[$t] + $annualUsecase[$t] + $annualFunctionalit[$t]);
                $t++;
            }

        // Return monthly report of total proposals
        $virtualTotal     = virtualProposal::count();
        $storageTotal     = StorageProposal::count();
        $hostingTotal     = HostingProposal::count();
        $developmentTotal = DevelopmentProposal::count();
        $consultingTotal  = ConsultingProposal::count();
        $monthProposals = [
            $storageTotal, $consultingTotal, $developmentTotal, $hostingTotal, $virtualTotal
        ];
        $totalMonthlyProposal = array_sum($monthProposals);

        // Return monthly report of total testes
        $UsecaseTestSystem      = UsecaseTestSystem::count();
        $CrudsTestSystem        = CrudsTestSystem::count();
        $RequirementTestSystem  = RequirementTestSystem::count();
        $FunctionalitTestSystem = FunctionalitTestSystem::count();
        $monthlyTestes = [
            $UsecaseTestSystem, $CrudsTestSystem, $RequirementTestSystem, $FunctionalitTestSystem
        ];
        $totalMonthlyTestes = array_sum($monthlyTestes);

        // Export data Json
        $exportData = [$monthProposals, $monthlyTestes, $annualRequirementsGathering, $totalAnnualProposal, $totalAnnualTestes]; 

        return view('/pages/dashboard', [
            'pageConfigs' => $pageConfigs, 
            'graficMonthlyProposalsTotal' => $totalMonthlyProposal, 
            'graficMonthlyTestesTotal' => $totalMonthlyTestes, 
            'exportData' => $exportData
            ]);


    }

    public function historico()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/historico', ['pageConfigs' => $pageConfigs]);
    }
}
