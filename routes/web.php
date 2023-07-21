<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;


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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/about',  [HomeController::class, 'index'])->name('home');
Route::get('/activate/{code}', [HomeController::class, 'activateUserAccount'])->name('user.activate');
Route::get('/resend/{email}', [HomeController::class, 'resendActivationCode'])->name('code.resend');
//products routes
Route::resource('products', 'ProductController');
Route::get('products/category/{category}', [HomeController::class, 'getProductByCategory'])->name("category.products");
//products routes
Route::resource('products', 'ProductController');
Route::get('products/category/{category}', [HomeController::class,'getProductByCategory'])->name("category.products");
//cart routes
Route::get('/cart', [CartController::class,'index'])->name('cart.index');
Route::post('/add/cart/{product}', [CartController::class ,'addProductToCart'])->name('add.cart');
Route::delete('/remove/{product}/cart', [CartController::class,'removeProductFromCart'])->name('remove.cart');
Route::put('/update/{product}/cart', [CartController::class,'updateProductOnCart'])->name('update.cart');
//payment routes
Route::get('/handle-payment', [PaypalPaymentController::class,'handlePayment'])->name('make.payment');
Route::get('/cancel-payment', [PaypalPaymentController::class,'paymentCancel'])->name('cancel.payment');
Route::get('/payment-success', [PaypalPaymentController::class,'paymentSuccess'])->name('success.payment');
//admin routes
Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
Route::get('/admin/login', [AdminController::class,'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login',[ AdminController::class,'adminLogin'])->name('admin.login');
Route::get('/admin/logout', [AdminController::class,'adminLogout'])->name('admin.logout');
Route::get('/admin/products', [AdminController::class,'getProducts'])->name('admin.products');
Route::get('/admin/orders', [AdminController::class,'getOrders'])->name('admin.orders');
//orders routes
