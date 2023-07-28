<?php

namespace App\Http\Controllers;

use  App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index($email, $otp, $otp_created_at, $otp_expired_at)
    {
        $otp_created_at->toDayDateTimeString();
        $otp_expired_at->toDayDateTimeString();

        $otp_created_at_diffForHumans = $otp_created_at->diffForHumans();
        $otp_expired_at_diffForHumans = $otp_expired_at->diffForHumans();

        $mailData = [
            'title' => 'Verification Code for SGT Property Owner SignUp.',
            'body' => 'Your Verification Code for SGT Property Owner is ' . $otp . ' Your OTP is created at ' . $otp_created_at_diffForHumans . ' ' . $otp_created_at . ' Your OTP will expire at ' . $otp_expired_at_diffForHumans . ' ' . $otp_expired_at
        ];

        Mail::to($email)->send(new DemoMail($mailData));
    }
}
