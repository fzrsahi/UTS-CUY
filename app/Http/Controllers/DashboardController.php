<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function showDashboard()
    {
        return view("dashboard");
    }
}
