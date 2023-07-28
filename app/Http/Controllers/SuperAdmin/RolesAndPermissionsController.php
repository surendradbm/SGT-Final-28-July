<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesAndPermissionsController extends Controller
{
    public function manage()
    {
        return view('pages.super_admin.roles_and_permissions.manage');
    }
    public function add()
    {
        return view('pages.super_admin.roles_and_permissions.add-roles');
    }
}