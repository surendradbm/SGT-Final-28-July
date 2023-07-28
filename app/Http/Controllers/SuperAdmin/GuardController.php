<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuardController extends Controller
{
    public function all() 
    {
        return view('pages.super_admin.guard.all-guard');
    }

    public function add()
    {
        return view('pages.super_admin.guard.add-guard');
    }
    public function edit()
    {
        return view('pages.super_admin.guard.edit-guard');
    }
}
