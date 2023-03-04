<?php

use App\Http\Controllers\ProfileController;
use App\Models\Crud;
use App\Http\Controllers\Crudcontroller;
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
//Welcome route
Route::get('welcome', function(){
    return view('welcome');
});

Route::controller(CrudController::class)->group(function () {
    Route::get('/','index');
    Route::get('/view/{name?}', 'viewproduct');
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit')->middleware(['auth', 'verified']);
    Route::get('/show/{id}', 'show');
    Route::put('/update/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy')->middleware(['auth', 'verified']);
    Route::get('/filter/{name}', 'filter');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
