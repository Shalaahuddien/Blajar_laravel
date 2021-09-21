<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;



Auth::routes (['register'=>false]);
Route::resource('products', ProductController::class);
Route::get('/', [DashboardController::class, 'index'],function(){

    })->name('dashboard');

    

// use App\Http\Dashboardcontroller\Controller;

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


// use App\Http\Requests\ProductRequest;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\ProductIncludes;
// use Illuminate\Contracts\Container\BindingResolutionException;
// use Illuminate\Contracts\Container;
// Namespace App\Http\Controllers\ProductIncludes;
// Namespace App\Http\Controllers;

// Route::get('/', function () {
//     return view('products.ind');
// });

// Route::get('/', [DashboardController::class, 'create']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
