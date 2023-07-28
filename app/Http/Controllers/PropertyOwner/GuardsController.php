<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuardsController extends Controller
{
    public function all()
    {
        return view('pages.property_owner.guards.guards-list');
    }

    public function add()
    {
        return view('pages.property_owner.guards.add-guard');
    }

    public function edit()
    {
        return view('pages.property_owner.guards.edit-guard');
    }
}
