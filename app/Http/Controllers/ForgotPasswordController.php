<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function index($email, $token)
    {
        $resetLink = route('property_owner.showResetForm', ['email' => $email, 'token' => $token]);

        $mailData = [
            'title' => 'Forgot Password Link for SGT Property Owner SignIn.',
            'body' => 'Your Forgot Password Link for SGT Property Owner is: ' . $resetLink,
        ];

        Mail::to($email)->send(new ForgotPassword($mailData));
    }
}
