<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('ekta');
});
<<<<<<< HEAD
=======
Route::get('/', function () {
    return view('khushbuCv');
});
Route::get('/master', function () {
    return view('layouts.master');
});
>>>>>>> af451a623a4bd0248d582587f74233016246bd80

