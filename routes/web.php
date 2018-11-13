<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
	return view('Auth/login');
});

Route::get('/signUp', function(){
	return view('Auth/sign-up');
});

Route::get('/homeDesainer', function(){
	return view('homeDesainer');
});

Route::get('/percetakan/show', function(){
	return view('Percetakan.show');
});