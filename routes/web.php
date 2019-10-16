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

Route::get('/qrcode',function() {
	return view('reader');
})->name('reader');

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/parade','MainController@parade')->name('parade');

Route::get('/stamp', function() {
	return view('stamp');
})->name('stamp');

Route::get('/exhibit', function() {
	return view('exhibit');
})->name('exhibit');

Route::get('/QnA', function() {
	return view('QnA');
})->name('QnA');

Route::get('/students','MainController@students');

Route::post('/insert_fixed','MainController@insert_fixed');

Route::post('/insert_infos','MainController@insert_infos');

Route::post('/get_jd/{num}','MainController@get_jd');

Route::get('/code/{account}/{name}/{text}',function($account,$name,$text) {
	return view('code',compact('account','name','text'));
});

Route::get('/', function () {
    return redirect('home');
});