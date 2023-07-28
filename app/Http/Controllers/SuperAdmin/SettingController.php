<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function company_details()
    {
        return view('pages.super_admin.setting.general.company_details');
    }

    public function notification()
    {
        return view('pages.super_admin.setting.general.notification');
    }

    public function payment()
    {
        return view('pages.super_admin.setting.general.payment');
    }

    public function support()
    {
        return view('pages.super_admin.setting.general.support');
    }
    
    public function config()
    {
        return view('pages.super_admin.setting.config');
    }
    
    public function backup()
    {
        return view('pages.super_admin.setting.backup');
    }
}
