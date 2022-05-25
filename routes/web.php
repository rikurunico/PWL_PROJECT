<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;

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
    return redirect('/home');
});

Route::get('/home', [HomePageController::class, 'index']) -> name('HomePage');

Route::get('/login', function () {
    return view('Loginpage.login');
}) -> name('LoginPage');

Route::post('/postlogin', [LoginController::class, 'login']) -> name('login');