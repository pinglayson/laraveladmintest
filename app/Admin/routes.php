<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->get('reports/member', 'ReportController@member');
    $router->get('reports/credit-transaction', 'ReportController@creditTransaction');
    $router->get('reports/home', 'ReportController@index');

    $router->get('transactions/home', 'TransactionController@index');
    $router->get('transactions/get-transactions', 'TransactionController@getTransaction');

    $router->get('gt-cash/home', 'GTcashController@index');

});

Route::group([
    'namespace' => config('admin.route.namespace'),
], function (Router $router) {

    $router->post('admin/transactions/confirm-transactions/{id}', 'TransactionController@confirmTransaction');

    $router->post('admin/gt-cash/send-gt-cash', 'GTCashController@sendGTCashPayment');

});
