<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Category', [App\Http\Controllers\CategoryController::class, 'GetIndex'])->name('category.index');

Route::post('/Category/store',[CategoryController::class,'StoreCategory'])->name('Category.store');

Route::get('/dashboard', function () {
    return view('admin.dashboard');

});
Route::post('/Category/update',[App\Http\Controllers\CategoryController::class,'updateCategory'])->name('Category.update');

