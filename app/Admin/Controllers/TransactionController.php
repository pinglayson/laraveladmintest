<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;

class TransactionController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('正在上映的电影');
            $content->description('上海');

            $content->body(view('transaction'));

        });
    }
}
