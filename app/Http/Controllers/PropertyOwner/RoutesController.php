<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function all()
    {
        return view('pages.property_owner.routes.all');
    }
}
