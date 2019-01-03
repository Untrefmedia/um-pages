<?php

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin', 'auth:admin']], function ($route) {
//dd($route);
    Route::get('page', '\Untrefmedia\UMPages\App\Http\Controllers\Admin\PageController@index');

});
