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
    return view('front.home');
});

Route::get('/about_us', function () {
    return view('front.about_us');
});

Route::get('/cooperative_partner', function () {
    return view('front.cooperative_partner');
});

Route::get('/sign_in',function (){
   return view('front.sign');
});