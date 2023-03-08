<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //Index Route
     Public function index() {
       
 
        return view('index');
     }

    //View Products
    Public function viewproduct($name) {

        if($name === "aprice" ){
            $posts = Product::OrderBy('price')->simplepaginate(5);
        }elseif($name === "dprice" ){
            $posts = Product::OrderByDesc('price')->simplepaginate(5);
        }elseif($name === "acate" ){
            $posts = Product::OrderBy('category')->simplepaginate(5);
        }elseif($name === "dcate" ){
            $posts = Product::OrderByDesc('category')->simplepaginate(5);
        }else{
            $posts = Product::latest()->simplepaginate(5);
        }
 
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
        //Validation
        $request->validate([
            'name' => ['required'],
            //'user_id' = auth()->id(),
            'category' => ['required'],
            'description' => ['required'],
            'price' => ['required']
        ]);
        
       // return view('index');

        
        //Create data in database
        Product::create($request->all());

        return redirect()->to('/view/default')->with('status', 'Product has been updated successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $Product, $id)
    {
        //
        $Product = Product::find($id);

        return view('show', ['post' => $Product]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {

        $Product = Product::find($id);

        return view('edit', ['post' => $Product]);
    }    
       
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $Product, $id)
    {
        //Validate
        $request->validate([
            'name' => 'required', 'unique',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        //Update data in database
        Product::find($id)->update($request->all());
        //$Product->update();

        //Redirect
        return redirect()->to('/view/default')->with('status', 'Product has been updated successfully');//route('products.index')->with('sucessful', 'Product has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $Product, $id)
    {
        //
        Product::find($id)->delete();

        return redirect()->to('/view')->with('status', 'Product has been deleted successfully');
       
    }
}
