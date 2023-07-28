<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function all()
    {
        return view('pages.property_owner.shift.all-shift');
    }

    public function edit()
    {
        return view('pages.property_owner.shift.edit-shift');
    }

    public function checkpoint()
    {
        return view('pages.property_owner.shift.checkpoint-shift');
    }

    public function checkpointEdit()
    {
        return view('pages.property_owner.shift.routes-shift');
    }

    public function assignGuards()
    {
        return view('pages.property_owner.shift.assign-guards-shift');
    }

}
