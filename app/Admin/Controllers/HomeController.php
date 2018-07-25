<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Dashboard');
            $content->description('overview of common reports');

            $content->body(view('reports/reports'));

            // $content->row(Dashboard::title());

            // $content->row(function (Row $row) {

            //     $row->column(4, function (Column $column) {
            //         $column->append(Dashboard::environment());
            //     });

            //     $row->column(4, function (Column $column) {
            //         $column->append(Dashboard::extensions());
            //     });

            //     $row->column(4, function (Column $column) {
            //         $column->append(Dashboard::dependencies());
            //     });
            // });
        });
    }
}
