<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/member', 'Reports\MemberController@index');
    $router->get('/credit-transaction', 'Reports\CreditTransactionController@index');
    $router->get('/reports-home', 'Reports\ReportsController@index');
    $router->get('/transaction', 'TransactionController@index');
    $router->get('/gt-cash-send', 'GTcash\GTcashSendController@index');

    // GET http://laraveladmin.test/admin/get-transations
    // transaction from http://sandbox.gtdollar.com/api/dummy/get_pending_txn.php
    $router->get('/get-transations', function () {
        $return_array = array();
        $data = file_get_contents(config('admin.api_url') . "get_pending_txn.php");
        $data = (array) json_decode($data);
        $return_array['data'][] = (array) $data['txns'];

        return $return_array;
    });
});

// POST http://laraveladmin.test/admin/confirm-transations/123456
// confirm transaction to http://sandbox.gtdollar.com/api/dummy/confirm_txn.php
Route::post('admin/confirm-transations/{id?}', function ($id = null) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, config('admin.api_url') . "confirm_txn.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    if ($id) {
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            http_build_query(array('id' => $id)));
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);

    curl_close($ch);

    return (array) json_decode($data);
});
