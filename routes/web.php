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

//Main Routes
Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/about-me', 'AboutMeController@index')->name('about-me');
    Route::get('/programming', 'ProgrammingController@index')->name('programming');
    Route::get('/music-producing', 'MusicController@index')->name('music');
    Route::get('/contact', 'ContactController@index')->name('contact');
});

//Overview
Route::group(['namespace' => 'Overview'], function () {
    Route::get('/overview/cashier', 'OverviewController@cashier')->name('ov.cashier');
    Route::get('/overview/late-recapitulation', 'OverviewController@lateRecapitulation')->name('ov.laterecap');
    Route::get('/overview/digital-invitation', 'OverviewController@digitalInv')->name('ov.digitalinv');
    Route::get('/overview/calculator', 'OverviewController@calculator')->name('ov.calculator');
    Route::get('/overview/students-data', 'OverviewController@studentsData')->name('ov.students');
});
