<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function all()
    {
        return view('pages.super_admin.staff.all-staff');
    }

    public function add()
    {
        return view('pages.super_admin.staff.add-staff');
    }

    public function edit()
    {
        return view('pages.super_admin.staff.edit-staff');
    }
}
