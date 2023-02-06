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

Route::get('/', function () {
   

    return view('index');
});

Route::get('/view', function () {
    $posts = crud::latest()->get();
 
     return view('view', ['posts' => $posts]);
 });

//Create Route
Route::get('/create', function () {
    return view('create');
});

//Store Route
Route::post('/createproduct/store', function (Request $request) {
    
    $post = new Crud;

    //Validation
    $request->validate([
        'name' => ['required'],//, 'unique:products_table, name'],
        'category' => ['required'],
        'description' => ['required'],
        'price' => ['required']
    ]);

    
    $post->name = $request->name;
    $post->category = $request->category;
    $post->description = $request->description;
    $post->price = $request->price;

    $post ->save();

    return redirect()->to('/');
});

