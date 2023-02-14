<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Paginator\Pagination;


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
        $posts = crud::latest()->simplepaginate(5);
 
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

        return redirect()->to('/view')->with('status', 'Product has been updated successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Crud $crud, $id)
    {
        //
        $crud = Crud::find($id);

        return view('show', ['post' => $crud]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {

        $crud = Crud::find($id);

        return view('edit', ['post' => $crud]);
    }    
       
    
        //Crud $crud,
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crud $crud)
    {
        //Validate
        $request->validate([
            'name' => 'required', 'unique',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        //Create data in database
        $crud->update($request->all());

        //Redirect
        return redirect()->to('/view')->with('status', 'Product has been updated successfully');//route('products.index')->with('sucessful', 'Product has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud $crud, $id)
    {
        //
        Crud::find($id)->delete();

        return redirect()->to('/view')->with('status', 'Product has been deleted successfully');
       
    }
}

