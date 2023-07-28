<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckpointContoller extends Controller
{
    public function index()
    {
        return view('pages.property_owner.checkpoints.index');
    }
    public function history()
    {
        return view('pages.property_owner.checkpoints.history');
    }
}
