<?php

Route::group(['prefix' => 'admin','middleware'=>['web', 'admin', 'auth:admin']], function ($route) {

//dd($route);
    Route::get('/pages', '\Untrefmedia\UMPages\App\Http\Controllers\Admin\PageController@index');

});