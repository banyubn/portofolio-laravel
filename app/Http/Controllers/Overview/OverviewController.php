<?php

namespace App\Http\Controllers\Overview;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    //View
    public function cashier()
    {
        return view('overview.programming.cashier');
    }

    public function lateRecapitulation()
    {
        return view('overview.programming.late-recapitulation');
    }

    public function digitalInv()
    {
        return view('overview.programming.digital-invitation');
    }

    public function calculator()
    {
        return view('overview.programming.calculator');
    }

    public function studentsData()
    {
        return view ('overview.programming.students-data');
    }
}
