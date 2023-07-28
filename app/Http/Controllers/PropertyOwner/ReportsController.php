<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function all()
    {
        return view('pages.property_owner.reports.reports');
    }

    public function delete()
    {
        return view('pages.property_owner.reports.delete');
    }
}
