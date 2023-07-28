<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class RouteCacheController extends Controller
{
    public function clearRoute()
    {
        Artisan::call('route:clear');
    }
}
