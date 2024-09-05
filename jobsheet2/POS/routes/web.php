<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Produk
Route::prefix('category')->group(function() {
    Route::get('/list', [ProductsController::class, 'categoryList'])->name('products.categoryList');
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage'])->name('products.foodBeverage');
    Route::get('/beauty-health', [ProductsController::class, 'beautyHealth'])->name('products.beautyHealth');
    Route::get('/home-care', [ProductsController::class, 'homeCare'])->name('products.homeCare');
    Route::get('/baby-kid', [ProductsController::class, 'babyKid'])->name('products.babyKid');
});

// Halaman User
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');

// Halaman Sales
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
?>
