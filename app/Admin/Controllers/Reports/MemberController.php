<?php

namespace App\Admin\Controllers\Reports;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;

class MemberController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('Member');
            $content->description('view member reports');

            $content->body(view('member/member'));
        });
    }
}
