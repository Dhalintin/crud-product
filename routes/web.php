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
Route::get('/view', [CrudController::class, 'viewproduct']);

//Create Route
Route::get('/create', [CrudController::class, 'create']);

//Store Route
Route::post('/store', [CrudController::class, 'store']);

//Create Route
Route::get('/edit', [CrudController::class, 'edit']);

/*

Route::get('/edit', function (Request $request) {
    $posts = crud::latest()->get();
 
    return view('edit', ['posts' => $posts]);
});

Route::get('/delete/{{$post->id}}', function (crud $crud) {

    $posts = crud::query();
 
    return view('delete', ['posts' => $posts]);
});
*/
