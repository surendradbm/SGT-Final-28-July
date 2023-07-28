<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function sendSms($phone)
    {
        $receiverNumber = $phone;
        $message = "This is testing from Aman";

        try {
            $account_sid = getenv("TWILIO_ACCOUNT_SID");
            $auth_token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_FROM_NUMBER");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message
            ]);

            // dd('SMS Sent Successfully.');
        } catch (Exception $e) {
            dd("Error: " . $e->getMessage());
        }
    }
}
