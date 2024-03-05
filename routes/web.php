<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Database\Seeders\KategoriSeeder;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/category/food-beverage', [ProductController::class, 'showFoodBeverage']);
    Route::get('/category/beauty-health', [ProductController::class, 'showBeautyHealth']);
    Route::get('/category/home-care', [ProductController::class, 'showHomeCare']);
    Route::get('/category/baby-kid', [ProductController::class, 'showBabyKid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

Route::get('/sales', [SalesController::class, 'index']);

Route::get('/level/index', [LevelController::class, 'index']);
Route::get('/kategori/index', [KategoriController::class, 'index']);
Route::get('/user/index', [UserController::class, 'index']);
