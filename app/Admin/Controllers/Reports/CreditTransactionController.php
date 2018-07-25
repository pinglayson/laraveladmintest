<?php

namespace App\Admin\Controllers\Reports;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;

class CreditTransactionController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('Credit Transaction');
            $content->description('view credit transaction reports');

            $content->body(view('credit/credit-transaction'));
        });
    }
}
