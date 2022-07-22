<?php

use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Administrator\OrderController;
use App\Http\Controllers\Administrator\ProductController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store\StoreController;

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

Route::middleware(['auth'])->group(function () {
    Route::prefix('administrator')->group(function () {
        Route::get('administrator', [AdministratorController::class, 'administrator'])->name('administrator.administrator');
        Route::get('moderator', [AdministratorController::class, 'moderator'])->name('administrator.moderator');
        Route::get('storekeeper', [AdministratorController::class, 'storekeeper'])->name('administrator.storekeeper');
        Route::resource('order', OrderController::class);
        Route::resource('product', ProductController::class);
    });
});

Route::get('/home', [UserController::class, 'home'])->name('user.home');
Route::get('/', [UserController::class, 'home'])->name('user.home');
Route::get('/favorites', [UserController::class, 'favorites'])->name('user.favorites');
Route::get('/cart', [UserController::class, 'cart'])->name('user.cart');
Route::get('/orders', [UserController::class, 'orders'])->name('user.orders');
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/about', [UserController::class, 'about'])->name('user.about');
Route::get('/addresses', [UserController::class, 'addresses'])->name('user.addresses');
Route::get('/payments', [UserController::class, 'payments'])->name('user.payments');
Route::get('/help', [UserController::class, 'help'])->name('user.help');
Route::get('/faq', [UserController::class, 'faq'])->name('user.faq');
Route::get('/catalog', [UserController::class, 'catalog'])->name('user.catalog');
Route::get('/unit', [UserController::class, 'unit'])->name('user.unit');
Route::get('/', [UserController::class, 'home']);
Route::get('/{store}/item/{id}', [StoreController::class, 'product']);
Route::get('/{store}/search', [StoreController::class, 'search']);
require __DIR__ . '/auth.php';
