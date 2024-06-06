<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Routes
Route::get('/home', 'MainController@home')->name('home.index');
Route::get('/about-me', 'MainController@aboutMe')->name('about-me');
Route::get('/programming', 'MainController@programming')->name('programming');
Route::get('/music-producing', 'MainController@musicProducing')->name('music');
Route::get('/contact', 'MainController@contact')->name('contact');

//Overview
Route::group(['namespace' => 'Overview'], function () {
    Route::get('/overview/cashier', 'OverviewController@cashier')->name('ov.cashier');
    Route::get('/overview/late-recapitulation', 'OverviewController@lateRecapitulation')->name('ov.laterecap');
    Route::get('/overview/digital-invitation', 'OverviewController@digitalInv')->name('ov.digitalinv');
    Route::get('/overview/calculator', 'OverviewController@calculator')->name('ov.calculator');
    Route::get('/overview/students-data', 'OverviewController@studentsData')->name('ov.students');

});