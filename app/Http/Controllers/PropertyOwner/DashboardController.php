<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function propertyOwnerDashboard()
    {
        return view('pages.dashboards.index');
    }
}
