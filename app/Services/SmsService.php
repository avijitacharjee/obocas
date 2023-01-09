<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{
    public function sendSms($to, $msg)
    {
        $endPoint = 'https://api.sms.net.bd/sendsms';
        $apiKey = env('SMS_API_KEY');

        $response = Http::get("{$endPoint}?api_key={$apiKey}&msg={$msg}&to={$to}&sender_id=obocas");
        return $response;
    }
    public function sendOtp($to, $otp)
    {
        $msg = "{$otp} is your verification code for obocas";
        return $this->sendSms($to, $msg);
    }
}
