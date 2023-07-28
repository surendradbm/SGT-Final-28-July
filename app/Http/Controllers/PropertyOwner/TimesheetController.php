<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    public function index()
    {
        return view('pages.property_owner.timesheet.index');
    }
}
