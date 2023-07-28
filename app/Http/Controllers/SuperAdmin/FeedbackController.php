<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function all()
    {
        return view('pages.super_admin.feedback.all-feedback');
    }
}
