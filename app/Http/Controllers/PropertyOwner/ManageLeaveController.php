<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageLeaveController extends Controller
{
    public function requested_leaves()
    {
        return view('pages.property_owner.manage_leaves.requested-leaves');
    }
    public function approved_leaves()
    {
        return view('pages.property_owner.manage_leaves.approved-leaves');
    }
    public function rejected_leaves()
    {
        return view('pages.property_owner.manage_leaves.rejected-leaves');
    }
    public function leave_policy()
    {
        return view('pages.property_owner.manage_leaves.leave-policy');
    }
}
