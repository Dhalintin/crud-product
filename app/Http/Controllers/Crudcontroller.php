<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class Crudcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     //Index Route
     Public function index() {
        $posts = crud::latest()->get();
 
        return view('index');
     }

    //View Products
    Public function viewproduct() {
        $posts = crud::latest()->get();
 
        return view('view', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$post = new Crud;

        //Validation
        $request->validate([
            'name' => ['required'],//, 'unique:products_table, name'],
            'category' => ['required'],
            'description' => ['required'],
            'price' => ['required']
        ]);

        
        //Create data in database
        Crud::create($request->all());

        //$post ->save();

        return redirect()->to('/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crud  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Crud $crud)
    {
        return view('edit', ['crud' => $crud]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
       
    }
}

