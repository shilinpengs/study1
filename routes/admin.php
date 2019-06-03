<?php
/**
 * Created by PhpStorm.
 * User: shilinpeng
 * Date: 13/3/19
 * Time: 下午2:55
 */

Route::group(['prefix' => 'Admin', 'namespace' => 'Admin'], function() {
    Route::get('index', 'IndexController@index');
    Route::get('test', function() {
        echo phpinfo();die;
    });
});
