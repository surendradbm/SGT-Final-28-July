<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function all()
    {
        return view('pages.super_admin.language.all-language');
    }
    public function translation()
    {
        return view('pages.super_admin.language.translation');
    }
    public function keywords()
    {
        return view('pages.super_admin.language.keywords');
    }
}
