<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index()
    {
        return view('pages.super_admin.property.index');
    }

    public function create()
    {
        // dd("res");
        return view('pages.super_admin.property.create-property');
    }

    public function shift()
    {
        return view('pages.super_admin.property.create-shift');
    }

    public function checkpoints()
    {
        return view('pages.super_admin.property.checkpoints');
    }

    public function morningShift()
    {
        return view('pages.super_admin.property.checkpoint-morning-shift');
    }

    public function routes()
    {
        return view('pages.super_admin.property.routes');
    }

    public function assignGuards()
    {
        return view('pages.super_admin.property.assign-guards');
    }
}
