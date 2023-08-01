<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CatalogueProduitsController;
use App\Http\Controllers\AjouterCategorieProduitController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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
Route::get('/dashboard',function(){
    return view('dashbaord');
})->middleware(['auth','role:user'])->name('dashboard');
Auth::routes();
Route::post('/SubmitLogin',[LoginController::class, 'Authenticate']);
Route::middleware('auth')->group(function () {
    Route::get('/catalogue-produits', [CatalogueProduitsController::class, 'index'])->name('catalogue-produits');
    Route::get('/ajouter-categorie-produit', [AjouterCategorieProduitController::class, 'index'])->name('ajouter-categorie-produit');
});
Route::get('/about',  [HomeController::class, 'index'])->name('home');
Route::get('/activate/{code}', [HomeController::class, 'activateUserAccount'])->name('user.activate');
Route::get('/resend/{email}', [HomeController::class, 'resendActivationCode'])->name('code.resend');
//products routes
Route::resource('products', 'ProductController');
Route::get('products/category/{category}', [HomeController::class, 'getProductByCategory'])->name("category.products");
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addProductToCart'])->name('add.cart');
Route::post('/cart/remove', [CartController::class, 'removeProductFromCart'])->name('remove.cart');
Route::post('/cart/update', [CartController::class, 'updateProductOnCart'])->name('update.cart');
// routes/web.php

// Route pour afficher la vue d'ajout de catégorie
Route::get('/add-category', function () {
    return view('ajouter-categorie-produit.add_category');
})->name('add_category');

// Route pour afficher la vue d'ajout de produit
Route::get('/add-product', [ProductController::class, 'create'])->name('add_product');

// Route pour la vue d'accueil (index)
Route::get('/ajouter-categorie-produit', function () {
    return view('ajouter-categorie-produit.index');
})->name('ajouter_categorie_produit');

// Route pour traiter le formulaire d'ajout de produit
Route::post('/store-product', [ProductController::class, 'store'])->name('store_product');
// routes/web.php
// routes/web.php

Route::get('categories/{id}/edit', [ProductController::class,'edit'])->name('categories.edit');


Route::put('products/{id}', [ProductController::class,'updateProduct'])->name('update_product');



