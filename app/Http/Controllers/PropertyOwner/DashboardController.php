<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function propertyOwnerDashboard()
    {
        $user_id = auth()->user()->id;
        $user_subscribed = Subscriber::where('user_id', $user_id)->first();
        // $data['value'] = '1';
        $data['value'] = '';
        return view('pages.dashboards.index', compact('user_subscribed'), $data);
    }
}
