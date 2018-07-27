<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GTCash extends Model
{
    public static function sendGTCashPayment()
    {
        $ch = curl_init(config('admin.api_url') . "confirm_txn.php");

        $payload = json_encode($_POST);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($ch);
        curl_close($ch);

        return (array) json_decode($data);
    }
}
