<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\PurchaseController;

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
    Route::get('/contactAdmin', [AdminController::class, 'contact']) -> name('ContactAdminPage');
    Route::post('/changePassword', [AdminController::class, 'updateDataPassword']) -> name('ChangePasswordAdmin');

    Route::get('/dataPenjualan', [AdminController::class, 'datapenjualan']) -> name('DataPenjualanPage');
    Route::get('/editDataPenjualan/{id}', [AdminController::class, 'editDataPenjualan']) -> name('editDataPenjualan');
    Route::post('/updateDataPenjualan/{id}', [AdminController::class, 'updateDataPenjualan']) -> name('updateDataPenjualan');
    Route::get('/deleteDataPenjualan/{id}', [AdminController::class, 'deleteDataPenjualan']) -> name('deleteDataPenjualan');
    Route::get('/cetakDataPenjualan', [AdminController::class, 'cetakDataPenjualan']) -> name('cetakDataPenjualan');
    
    Route::get('/edit/{id}', [AdminController::class, 'edit']) -> name('EditUser');
    Route::post('/update/{id}', [AdminController::class, 'updateDataUser']) -> name('UpdateUser');
    Route::get('/printdata', [AdminController::class, 'cetakDataUser']) -> name('CetakDataUser');
    Route::get('/createUser', [AdminController::class, 'createUser']) -> name('CreateUser');
    Route::post('/postCreateUser', [AdminController::class, 'storeUser']) -> name('PostCreateUser');
    Route::get('/delete/{id}', [AdminController::class, 'destroy']) -> name('DeletePengguna');

    Route::get('/createProduct', [ProductController::class, 'createProduct']) -> name('CreateProduct');
    Route::post('/postCreateProduct', [ProductController::class, 'storeProduct']) -> name('PostCreateProduct');
    Route::get('/editProduct/{id}', [ProductController::class, 'editproduct']) -> name('EditProduct');
    Route::post('/updateProduct/{id}', [ProductController::class, 'updateDataProduct']) -> name('UpdateProduct');
    Route::get('/deleteProduct/{id}', [ProductController::class, 'destroyProduct']) -> name('DeleteProduct');
    Route::get('/printProduct', [ProductController::class, 'cetakDataProduct']) -> name('CetakDataProduct');

    Route::get('/createSupplier', [SuplierController::class, 'create']) -> name('CreateSupplier');
    Route::post('/postCreateSupplier', [SuplierController::class, 'store']) -> name('PostCreateSupplier');
    Route::post('/postUpdateSupplier/{id}', [SuplierController::class, 'postUpdateSuplier']) -> name('PostUpdateSupplier');
    Route::get('/editSupplier/{id}', [SuplierController::class, 'edit']) -> name('EditSupplier');
    Route::post('/updateSupplier/{id}', [SuplierController::class, 'updateDataSupplier']) -> name('UpdateSupplier');
    Route::get('/deleteSupplier/{id}', [SuplierController::class, 'destroy']) -> name('DeleteSupplier');
    Route::get('/printSupplier', [SuplierController::class, 'cetakDataSupplier']) -> name('CetakDataSupplier');

   

    Route::get('/searching', [HomePageController::class, 'searching'])->name('Searching');

});

Route::middleware(['auth','cekLevel:user'])->group(function () {
    Route::get('/home', [HomePageController::class, 'index']) -> name('HomePage');
    Route::get('/profile', [HomePageController::class, 'profile']) -> name('ProfilePage');
    Route::get('/contact', [HomePageController::class, 'contact']) -> name('ContactPage');
    Route::post('/postupdateDataUser', [HomePageController::class, 'updateDataUser']) -> name('updateDataUser');
    Route::get('/checkout', [HomePageController::class, 'checkout']) -> name('CheckoutPage');
    Route::get('/shopingcart', [HomePageController::class, 'shopingcart']) -> name('shopingCart');
    Route::post('postupdateDataPassword', [HomePageController::class, 'updateDataPassword']) -> name('gantiPassword');

    Route::get('/gallery', [HomePageController::class, 'gallery']) -> name('GalleryPage'); 
    Route::get('/cart', [HomePageController::class, 'cart'])->name('Cart');
    Route::get('/addcart/{id}', [HomePageController::class, 'addToCart'])->name('AddCart');
    Route::delete('/removecart', [HomePageController::class, 'remove'])->name('Removecart');
    Route::patch('/updatecart', [HomePageController::class, 'update'])->name('Updatecart');
    Route::get('/checkout', [HomePageController::class, 'checkout']) -> name('CheckoutPage');
    Route::get('/searchProduct', [HomePageController::class, 'searchProduct']) -> name('SearchProduct');
    Route::get('/sorting', [HomePageController::class, 'gallerySort']) -> name('Sorting');

    Route::post('/postCheckout', [HomePageController::class, 'postCheckOut']) -> name('PostCheckout');

    Route::get('/purchase', [HomePageController::class, 'purchaseHistory']) -> name('PurchasePage');
    Route::get('/editDataPurchase/{id}', [PurchaseController::class, 'editDataPurchase']) -> name('EditPurchase');
    Route::post('/postUpdatePurchase/{id}', [PurchaseController::class, 'store']) -> name('PostUpdatePurchase');
    Route::post('/updatePurchas/{id}', [PurchaseController::class, 'updateDataPurchase']) -> name('UpdatePurchase');
    Route::get('/deletePurchase/{id}', [PurchaseController::class, 'destroy']) -> name('DeletePurchase');
    Route::get('/cetakPurchase', [PurchaseController::class, 'cetakPurchase']) -> name('CetakPurchaseHistory');
});