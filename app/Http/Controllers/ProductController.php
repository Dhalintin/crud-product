<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //Index Route
     Public function index()
    {        
        $products = Product::latest('updated_at')->paginate(6);
        return view('products/index', compact('products'));
     }

    //View Products
    Public function filter($type, $value) {

        if($type === "price" ){
            $orderby = ($value === 'ascending')? 'asc' : 'desc';
            $result = Product::orderBy('price', $orderby);
        }elseif($type === "category" ){
            $orderby = ($value === 'ascending')? 'asc' : 'desc';
            $result = Product::orderBy('category', $orderby);
        }else{
            $result = Product::latest();
        }

        $products = $result->paginate(6);
 
        return view('products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $id)
    {
        return view('products/create', ['user' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product;
        
        $product->name = $request->validated('name');
        $product->user_id = request()->user()->id;
        $product->category = $request->validated('category');
        $product->description = $request->validated('description');
        $product->price  = $request->validated('price');

        if($request->hasfile('image')){
            $image = $request->image;
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $product->image = $filename;
        }

        $product->save();

        return redirect()->route('home')->with('status', 'Product has been updated successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $product)
    {
        
        $product = Product::find($product);
        return view('products/edit', compact('product'));
    }    
       
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if($request->user()->cannot('update', $product)) {
           abort(403);
        }

        if($request->hasfile('image')){
            $image = $request->image;
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            Image::make($image)->save($location);

            $product->image = $filename;
        }

        
        $product = $product->update($request->validated());

        return redirect()->route('home')->with('status', 'Product has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($request->user()->can('delete', $product)) {
            abort('403');
        }
        $product->delete();
        
        return redirect()->route('home')->with('status', 'Product has been deleted successfully');
       
    }
}
