<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class SendSmsMessageHelper
{
    public static function sendSMS($message, $phoneNumber)
    {
        $response = Http::post(env('SMS_URL'), [
            'phoneNumber' => $phoneNumber,
            'message' => $message,
        ]);
        return $response->body();
    }
}
