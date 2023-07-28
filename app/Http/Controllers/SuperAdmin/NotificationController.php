<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    // Guard App Functions
    public function index()
    {
        return view('pages.super_admin.notification.index');
    }
    public function guard_logins()
    {
        return view('pages.super_admin.notification.guard_app.logins');
    }
    public function guard_shift()
    {
        return view('pages.super_admin.notification.guard_app.shift');
    }
    public function guard_checkpoint()
    {
        return view('pages.super_admin.notification.guard_app.checkpoint');
    }
    public function guard_reports()
    {
        return view('pages.super_admin.notification.guard_app.reports');
    }
    public function guard_messenger()
    {
        return view('pages.super_admin.notification.guard_app.messenger');
    }
    public function guard_settings()
    {
        return view('pages.super_admin.notification.guard_app.settings');
    }
    public function guard_leave_management()
    {
        return view('pages.super_admin.notification.guard_app.leave_management');
    }
    public function guard_account_settings()
    {
        return view('pages.super_admin.notification.guard_app.account_settings');
    }


    // Property Owner Functions
    public function owner_logins()
    {
        return view('pages.super_admin.notification.property_owner.logins');
    }
    public function owner_subscription()
    {
        return view('pages.super_admin.notification.property_owner.subscription');
    }
    public function owner_customers()
    {
        return view('pages.super_admin.notification.property_owner.customers');
    }
    public function owner_shift()
    {
        return view('pages.super_admin.notification.property_owner.shift');
    }
    public function owner_checkpoints()
    {
        return view('pages.super_admin.notification.property_owner.checkpoints');
    }
    public function owner_routes()
    {
        return view('pages.super_admin.notification.property_owner.routes');
    }
    public function owner_guard()
    {
        return view('pages.super_admin.notification.property_owner.guard');
    }
    public function owner_reports()
    {
        return view('pages.super_admin.notification.property_owner.reports');
    }
    public function owner_roles_and_permissions()
    {
        return view('pages.super_admin.notification.property_owner.roles_and_permissions');
    }
    public function owner_staff()
    {
        return view('pages.super_admin.notification.property_owner.staff');
    }
    public function owner_time_sheet()
    {
        return view('pages.super_admin.notification.property_owner.time_sheet');
    }
    public function owner_leave_management()
    {
        return view('pages.super_admin.notification.property_owner.leave_management');
    }
    public function owner_guard_attendance()
    {
        return view('pages.super_admin.notification.property_owner.guard_attendance');
    }
    public function owner_activity_log()
    {
        return view('pages.super_admin.notification.property_owner.activity_log');
    }



    public function details()
    {
        return view('pages.super_admin.notification.property_owner.details');
    }
}
