<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontHome;
use App\Http\Controllers\BackHome;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BackForntController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Contact;
use App\Http\Controllers\BackContact;
use App\Http\Controllers\CashPaySubmit;
use App\Http\Controllers\BackPayment;
use App\Http\Controllers\AuthController;

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

// Front Home Pages
Route::get('/', [FrontHome::class, 'home'])->name('front.home');
Route::get('/Rango/Contacts', [FrontHome::class, 'contacts'])->name('front.contacts');
Route::get('/All-Products/{brand}', [FrontHome::class, 'allProducts'])->name('front.all');

// Cart
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

// Front Product Details
Route::get('/product-details/{id}', [FrontHome::class, 'productDetails'])->name('product-details');

// Front Event View
Route::get('/Rango/Services', [FrontHome::class, 'service'])->name('services');
Route::get('/Rango/about', [FrontHome::class, 'about'])->name('about');

// Contacts
Route::get('/Contacts', [FrontHome::class, 'contacts'])->name('contacts');
Route::post('/Contacts/submit', [Contact::class, 'submitcontact'])->name('submit.contact');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

// Authentication
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Payment Options
    Route::get('/Payment/{id}', [BackForntController::class, 'payment'])->name('payment');
    Route::post('Rango/Cash/Payment/', [BackForntController::class, 'confirmPayment'])->name('confirm.payment');
    Route::post('/Rango/Payment/submit/cash', [CashPaySubmit::class, 'cashPayment'])->name('cash-pay-submit');
    Route::post('/Rango/Payment/submit/online', [CashPaySubmit::class, 'onlinePayment'])->name('online-pay-submit');
});

// Admin Panel
Route::prefix('/Admin')->middleware('whoAdmin', 'auth')->group(function () {
    // Admin Home
    Route::get('/Rango-Electronics/Home', [BackForntController::class, 'home'])->name('dashboard');
    Route::get('/dashboard', [BackHome::class, 'home'])->name('back.home');

    // Products
    Route::get('/Add-product', [ProductController::class, 'addProduct'])->name('add-product');
    Route::get('/Manage-product', [ProductController::class, 'manageProduct'])->name('manage-product');
    Route::post('/New-product', [ProductController::class, 'newProduct'])->name('new-product');
    Route::get('/Edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
    Route::get('/Delete-Product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
    Route::post('/Update-Product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');

    // Events
    Route::get('/add-Category', [CategoryController::class, 'addCategory'])->name('add.category');
    Route::post('/new-Category', [CategoryController::class, 'newCategory'])->name('new-category');
    Route::get('/manage-Category', [CategoryController::class, 'manageCategory'])->name('manage-category');
    Route::get('/edit-Category/{id}', [CategoryController::class, 'editCategory'])->name('edit-categorys');
    Route::post('/update-Category/{id}', [CategoryController::class, 'updateCategory'])->name('update-Category');
    Route::get('/delete-Category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-categorys');

    // Payment Confirmation
    Route::get('/Confirm/payment/Check/', [BackPayment::class, 'paymentView'])->name('payment.view');
    Route::get('/Confirm/payment/Delete/{id}', [BackPayment::class, 'deletePayment'])->name('delete-payment');

    // Contacts Message
    Route::get('/Contact/-View/Manage', [BackContact::class, 'contactView'])->name('contact.view');
    Route::get('/delete-Contacts/{id}', [BackContact::class, 'deleteContacts'])->name('delete-contacts');
});
