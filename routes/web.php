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
    // return view('welcome');
    // return view('roadassist');
    return redirect('/roadassist');
});

Route::get('/roadassist', function () {
    // return view('welcome');
    // return view('roadassist');
    return view('roadassist');
});

Route::get('/roadassist/request/{any}', function ($any) {
    // return view('welcome');
    return view('roadassist');
});

Route::get('/roadassist/tracking/{any}', function ($any) {
    // return view('welcome');
    return view('roadassist');
});

Route::get('/roadassist/{any}', function ($any) {
    // return view('welcome');
    return view('roadassist');
});
