<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pembimbings','PembimbingController');
Route::resource('kloters','KloterController');
Route::resource('identitasjemaahs','IdentitasJemaahController');