<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
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
        $posts = Product::latest()->simplepaginate(6);
       
 
        return view('index', ['posts' => $posts]);
     }

    //View Products
    Public function viewproduct($name) {

        if($name === "aprice" ){
            $posts = Product::OrderBy('price')->simplepaginate(6);
        }elseif($name === "dprice" ){
            $posts = Product::OrderByDesc('price')->simplepaginate(6);
        }elseif($name === "acate" ){
            $posts = Product::OrderBy('category')->simplepaginate(6);
        }elseif($name === "dcate" ){
            $posts = Product::OrderByDesc('category')->simplepaginate(6);
        }else{
            $posts = Product::latest()->simplepaginate(6);
        }
 
        return view('view', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $id)
    {

        return view('create', ['user' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $product = new Product;
        
        
        $this->validate($request, array(
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required'
        ));
       

        
        
        $product->name = $request->name;
        $product->user_id = $id;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price  = $request->price;

        $product->save();

        return redirect()->to('/view/default')->with('status', 'Product has been updated successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $id)
    {
        return view('show', ['post' => $id]);
       
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
