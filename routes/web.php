<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return redirect("/dashboard");
});

Route::get('/dashboard', [DashboardController::class, "showDashboard"]);
Route::get('/products', [ProductController::class, "showAllProducts"]);
Route::get('/products-management', [ProductController::class, "showAllProductsManagement"]);
Route::get('/users', [UserController::class, "showAllUsers"]);
Route::get('/suppliers', [SupplierController::class, "showAllSuppliers"]);
