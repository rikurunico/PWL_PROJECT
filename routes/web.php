<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

Route::get('/logout', [LoginController::class, 'logout']) -> name('logout');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () { return view('Loginpage.login', ['tittle' => 'Login Page']); }) -> name('LoginPage');
    Route::post('/postlogin', [LoginController::class, 'login']) -> name('login');
    Route::post('/postregister', [RegisterController::class, 'store']) -> name('register');
    Route::get('/register',[RegisterController::class, 'index'])->name('RegisterPage');
});

Route::middleware(['auth','cekLevel:admin'])->group(function () {
    Route::get('/homeAdmin', [AdminController::class, 'index']) -> name('HomePageAdmin');
    Route::get('/profileAdmin', [AdminController::class, 'profile']) -> name('ProfilePageAdmin');
    Route::post('/postProfileAdmin', [AdminController::class, 'updateDataAdmin']) -> name('PostProfileAdmin');
    Route::get('/dataProduct', [AdminController::class, 'dataproduct']) -> name('DataProductPage');
    Route::get('/dataSupplier', [AdminController::class, 'datasupplier']) -> name('DataSupplierPage');
    Route::get('/dataPenjualan', [AdminController::class, 'datapenjualan']) -> name('DataPenjualanPage');
    Route::get('/contactAdmin', [AdminController::class, 'contact']) -> name('ContactAdminPage');
   
    Route::get('/edit/{id}', [AdminController::class, 'edit']) -> name('EditUser');
    Route::post('/update/{id}', [AdminController::class, 'updateDataUser']) -> name('UpdateUser');
    Route::get('/printdata', [AdminController::class, 'cetakDataUser']) -> name('CetakDataUser');
    Route::get('/createUser', [AdminController::class, 'createUser']) -> name('CreateUser');
    Route::post('/postCreateUser', [AdminController::class, 'storeUser']) -> name('PostCreateUser');
    Route::get('/delete/{id}', [AdminController::class, 'destroy']) -> name('DeletePengguna');

});

Route::middleware(['auth','cekLevel:user'])->group(function () {
    Route::get('/home', [HomePageController::class, 'index']) -> name('HomePage');
    Route::get('/profile', [HomePageController::class, 'profile']) -> name('ProfilePage');
    Route::get('/contact', [HomePageController::class, 'contact']) -> name('ContactPage');
    Route::get('/gallery', [HomePageController::class, 'gallery']) -> name('GalleryPage');
    Route::post('/postupdateDataUser', [HomePageController::class, 'updateDataUser']) -> name('updateDataUser');
    Route::get('/checkout', [HomePageController::class, 'checkout']) -> name('CheckoutPage');
    Route::get('/shopingcart', [HomePageController::class, 'shopingcart']) -> name('shopingCart');
});