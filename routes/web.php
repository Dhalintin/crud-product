<?php

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

//index route
Route::get('/', [CrudController::class, 'index']);

//View Route
Route::get('/view/{name?}', [CrudController::class, 'viewproduct']);

//Create Route
Route::get('/create', [CrudController::class, 'create']);

//Store Route
Route::post('/store', [CrudController::class, 'store']);

//Edit Route
Route::get('/edit/{id}', [CrudController::class, 'edit']);

//Show Route
Route::get('/show/{id}', [CrudController::class, 'show']);

//Update Route
Route::put('/update/{id}', [CrudController::class, 'update']);

//Delete Route
Route::delete('/delete/{id}', [CrudController::class, 'destroy']);

//Filter Route
Route::get('/filter/{name}', [CrudController::class, 'filter']);

