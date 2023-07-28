<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function all()
    {
        return view('pages.super_admin.customer.all-costumer');
    }
    public function add()
    {
        return view('pages.super_admin.customer.add-costumer');
    }
    public function edit()
    {
        return view('pages.super_admin.customer.edit-costumer');
    }
}
