<?php

/*
|--------------------------------------------------------------------------
| Marketing
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('marketing.index');
})->name('homepage');

Route::get('/subscription-confirmed', function () {
    return view('marketing.subscription-confirmed');
});

Route::get('/terms-and-conditions', function () {
    return view('marketing.terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/privacy-policy', function () {
    return view('marketing.privacy-policy');
})->name('privacy-policy');

Route::get('/imprint', function () {
    return view('marketing.imprint');
})->name('imprint');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
|
*/

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/*
|--------------------------------------------------------------------------
| Application routes
|--------------------------------------------------------------------------
|
| The following routes are application routes. That means an authentication
| is absolutely necessary to access these on your browser.
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/services', 'ServicesController@index')->name('services');
    Route::get('/settings/profile', 'ProfileController@edit')->name('settings.profile.edit');
    Route::get('/billing', 'CreditsController@index')->name('billing.credits');
});

