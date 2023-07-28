<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function all()
    {
        return view('pages.super_admin.coupon.all-coupon');
    }
    public function add()
    {
        return view('pages.super_admin.coupon.add-coupon');
    }
    public function edit()
    {
        return view('pages.super_admin.coupon.edit-coupon');
    }
}
