<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendPagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;

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

// Route::get('/', function () {
//     return view('frontend.app');
// });

Route::get('/', [FrontendPagesController::class, 'index']);


// Route::get('/admin/login', [DashboardController::class, 'index']);
// Route::get('/admin/register', [DashboardController::class, 'index']);
Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/news', [NewsController::class, 'index'])->name('admin.news');
Route::get('/admin/news/create', [NewsController::class, 'create'])->name('admin.news.create');
