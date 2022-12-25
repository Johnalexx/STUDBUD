<?php

use Illuminate\Support\Facades\Route;

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
// Application
Route::get('/index', function () {
    return view('pages/index');
});
Route::get('/profile',function () {
    return view('pages/profile');
});
Route::get('/shelf', function () {
    return view('pages/shelf');
});
Route::get('/timetable', function () {
    return view('pages/timetable');
});
//Auth
Route::get('/create-account', function () {
    return view('pages/auth/create-account');
});
Route::get('/login', function () {
    return view('pages/auth/login');
});
// 
Route::get('/contact', function() {
    return view('pages/contact');
});