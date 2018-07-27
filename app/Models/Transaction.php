<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public static function getTransaction()
    {
        $return_array = array();
        $data = file_get_contents(config('admin.api_url') . "get_pending_txn.php");
        $data = (array) json_decode($data);
        $return_array['data'][] = (array) $data['txns'];

        return $return_array;
    }

    public static function confirmTransaction($id)
    {
        $ch = curl_init(config('admin.api_url') . "confirm_txn.php");

        curl_setopt($ch, CURLOPT_POST, 1);
        if ($id) {
            curl_setopt($ch, CURLOPT_POSTFIELDS,
                http_build_query(array('id' => $id)));
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);

        curl_close($ch);

        return (array) json_decode($data);
    }
}
