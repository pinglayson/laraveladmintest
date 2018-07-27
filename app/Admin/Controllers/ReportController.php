<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;

class ReportController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('Member');
            $content->description('view member reports');

            $content->body(view('reports/reports'));
        });
    }

    public function member()
    {
        return Admin::content(function (Content $content) {
            $content->header('Member');
            $content->description('view member reports');

            $content->body(view('member/member'));
        });
    }

    public function creditTransaction()
    {
        return Admin::content(function (Content $content) {
            $content->header('Credit Transaction');
            $content->description('view credit transaction reports');

            $content->body(view('credit/credit-transaction'));
        });
    }

}
