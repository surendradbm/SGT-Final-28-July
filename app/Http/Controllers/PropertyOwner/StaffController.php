<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function all()
    {
        return view('pages.property_owner.staff.all');
    }

    public function add()
    {
        return view('pages.property_owner.staff.add');
    }

    public function edit()
    {
        return view('pages.property_owner.staff.edit');
    }
}
