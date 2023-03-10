<?php

use App\Http\Controllers\ProfileController;
use App\Models\Crud;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;

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

Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/view/{name?}','viewproduct');
    Route::get('/create', 'create')->middleware(['auth', 'verified'])->name('create');
    Route::post('/store', 'store')->middleware(['auth', 'verified'])->name('store');
    Route::get('/edit/{product}', 'edit')->middleware(['auth', 'verified'])->name('edit');
    Route::get('/show/{product}', 'show')->name('show');
    Route::put('/update/{product}', 'update')->name('updat');
    Route::delete('/delete/{product}', 'destroy')->middleware(['auth', 'verified']);
    Route::get('/filter/{type}/{value}', 'filter')->name('filter');

});


//Welcome route
Route::get('welcome', function(){
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
