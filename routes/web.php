<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as SymfonyRoute;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index'])->name('welcome');
Route::get('customer/dashboard', [MainController::class, 'customerDashboard'])->name('dashboard.customer');



Auth::routes();

// Route::resource('/admin/login', [AdminController::class, 'adminLogin']);

Route::get('admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::post('admin/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard.admin');
Route::resource('category', CategoryController::class);
Route::resource('brand', BrandController::class);


