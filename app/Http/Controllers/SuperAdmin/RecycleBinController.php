<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecycleBinController extends Controller
{
    public function index()
    {
        return view('pages.super_admin.recycle_bin.index');
    }
}
