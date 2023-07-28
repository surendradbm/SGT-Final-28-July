<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribtionConfirmationMail;

class SubscribtionConfirmationController extends Controller
{
    public function index($email, $first_name, $last_name, $last_entry, $subscription_title)
    {
        // return "yes";
        $mailData = [
            'title' => 'SGT Subscribtion',
            'body' => 'Congrulations' . ' ' . $first_name . ' ' . $last_name . 'your SGT subscribtion is active for ' . $email . ' . Your Subscription Name ' . $subscription_title . ''
        ];

        Mail::to($email)->send(new SubscribtionConfirmationMail($mailData));
    }
}
