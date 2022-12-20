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

Route::view('/login', 'pages.front.login.index')->name('login');
Route::view('/register', 'pages.front.login.register')->name('login');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::view('/', 'pages.admin.dashboard')->name('dashboard');
    Route::post('/logout', function() {
        Session()->flush();

        return redirect()->to('/login');
    })->name('logout');
});
