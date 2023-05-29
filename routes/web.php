<?php

use App\Http\Controllers\AdminController;
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
Route::get('/', [MainController::class, 'customerDashboard'])->name('dashboard.customer');

// Route::middleware(['auth', 'user-access::user'])->group(function(){

//     Route::get('/', [MainController::class, 'customerDashboard'])->name('dashboard.customer');
// });


Auth::routes();

// Route::resource('/admin/login', [AdminController::class, 'adminLogin']);

Route::get('/admin/login', [AdminController::class, 'adminLogin']);
Route::post('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('dasboard.admin');

// Route::middleware(['auth', 'user-access::user'])->group(function(){

//     Route::post('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('dasboard.admin');
// });


