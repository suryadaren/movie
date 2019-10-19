<?php

// url untuk halaman admin dengan menggunakan resource dan hak akses di batasi hanya untuk admin dengan menggunakan middleware
Route::resource('admin', 'AdminController')->middleware('auth');;

// url untuk login dan logout
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/loginCheck', 'Auth\LoginController@loginCheck');
Route::get('/logout', 'Auth\LoginController@logout');

// url untuk ke halaman home
Route::get('/', 'HomeController@index');

// untuk sort daftar film
Route::get('/sortby', 'HomeController@sortby');

// untuk filter daftar film
Route::get('/filter', 'HomeController@filter');

// menampilkan detail film
Route::get('/{id}', 'HomeController@show');

// menampilkan komen film
Route::get('/{id}/comment', 'HomeController@comment');
// menyimpan komen
Route::get('/{id}/comment/store', 'HomeController@store');

