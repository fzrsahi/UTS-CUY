<?php

use App\Http\Controllers\AuthController;
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
    return redirect("/login");
});

Route::get('/dashboard', [DashboardController::class, "showDashboard"])->middleware("auth");
Route::get('/products', [ProductController::class, "showAllProducts"])->middleware("auth");
Route::get('/products-management', [ProductController::class, "showAllProductsManagement"])->middleware("auth");
Route::get('/users', [UserController::class, "showAllUsers"])->middleware("auth");
Route::get('/suppliers', [SupplierController::class, "showAllSuppliers"])->middleware("auth");
Route::get('/login', [AuthController::class, "index"])->name("login")->middleware("guest");
Route::post('/login', [AuthController::class, "authenticate"]);
