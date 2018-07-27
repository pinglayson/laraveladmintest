<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GTCash;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;

class GTCashController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('GT-Cash');
            $content->description('GT-Cash Payment');

            $content->body(view('gtcash/gt-cash-send'));
        });
    }

    public function sendGTCashPayment()
    {
        return GTCash::sendGTCashPayment();
    }
}
