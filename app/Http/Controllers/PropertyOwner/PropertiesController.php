<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function all()
    {
        return view('pages.property_owner.properties.all-properties');
    }

    public function create()
    {
        return view('pages.property_owner.properties.create-property');
    }

    public function shift()
    {
        return view('pages.property_owner.properties.create-shift');
    }

    public function checkpoints()
    {
        return view('pages.property_owner.properties.checkpoints');
    }

    public function morningShift()
    {
        return view('pages.property_owner.properties.checkpoint-morning-shift');
    }

    public function routes()
    {
        return view('pages.property_owner.properties.routes');
    }

    public function assignGuards()
    {
        return view('pages.property_owner.properties.assign-guards');
    }
}
