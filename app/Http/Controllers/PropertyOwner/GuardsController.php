<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuardsController extends Controller
{
    public function all()
    {
        return view('pages.property_owner.guards.guards-list');
    }

    public function add()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('pages.property_owner.guards.add-guard', $data);
    }

    public function add_check(Request $request)
    {
        return $request->all();
        return view('pages.property_owner.guards.add-guard');
    }

    public function edit()
    {
        return view('pages.property_owner.guards.edit-guard');
    }
}
