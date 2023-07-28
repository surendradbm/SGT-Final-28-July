<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function all()
    {
        return view('pages.super_admin.shift.all-shift');
    }
    public function add_shift()
    {
        return view('pages.super_admin.shift.add-shift');
    }
    public function add_checkpoint()
    {
        return view('pages.super_admin.shift.add-checkpoint');
    }
    public function edit_checkpoint()
    {
        return view('pages.super_admin.shift.edit-checkpoint');
    }
    public function add_route()
    {
        return view('pages.super_admin.shift.add-route');
    }
    public function assign_guard()
    {
        return view('pages.super_admin.shift.assign-guard');
    }
}
