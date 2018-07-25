<?php

namespace App\Admin\Controllers\GTcash;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;

class GTcashSendController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('GT-Cash');
            $content->description('GT-Cash Payment');

            $content->body(view('gtcash/gt-cash-send'));
        });
    }
}
