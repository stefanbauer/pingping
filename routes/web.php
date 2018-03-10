<?php

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/services', 'ServicesController@index')->name('services');
