<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionAndInvoiceController extends Controller
{
    public function index()
    {
        return view('pages.super_admin.transaction_and_invoice.index');
    }

    public function view_details()
    {
        return view('pages.super_admin.transaction_and_invoice.view_details');
    }

    public function view_invoice()
    {
        return view('pages.super_admin.transaction_and_invoice.view_invoice');
    }
}