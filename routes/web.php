<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendPagesController;
use App\Http\Controllers\api\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TypesController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin/login', [DashboardController::class, 'index']);
// Route::get('/admin/register', [DashboardController::class, 'index']);
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/news', [NewsController::class, 'index'])->name('admin.news');
Route::post('/admin/news', [NewsController::class, 'store'])->name('admin.news');
Route::get('/admin/news/create', [NewsController::class, 'create'])->name('admin.news.create');

Route::get('/admin/types', [TypesController::class, 'index'])->name('admin.types');
Route::post('/admin/types', [TypesController::class, 'store'])->name('admin.types');
<<<<<<< HEAD
=======

>>>>>>> 42620daf1c17fb18f9f15c2bc2810de5efe4fdce
