<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/about', 'App\Http\Controllers\HomeController@index')->name('home.index');


Route::get('/order', 'App\Http\Controllers\OrderController@index')->name('order.index');

Route::get('/order/create', 'App\Http\Controllers\OrderController@create')->name('order.create');

Route::post('/order/save', 'App\Http\Controllers\OrderController@save')->name('order.save');

Route::post('/order/delete', 'App\Http\Controllers\OrderController@delete')->name('order.delete');

Route::get('/order/{id}', 'App\Http\Controllers\OrderController@show')->name('order.show');

