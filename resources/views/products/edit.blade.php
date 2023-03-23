@extends('products/layout')
@section('content')
    @if($errors->any())
        @foreach ($errors as $error)
           <li> {{ $error }}</li>
        @endforeach
    @enderror

    <div class="grid lg:grid-cols-3">
        <div class="info-col">
            <h1 class="title">How to sell your product</h1>
            <p class="pb-3 text-justify italic">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quo, esse fugiat sed natus commodi cumque? Cumque consequuntur perspiciatis illo sunt, amet sequi eaque nostrum porro culpa fugit debitis eos architecto, dicta non repudiandae facilis excepturi labore in. Error magni nisi ipsam molestias delectus possimus quae suscipit animi beatae eum.
            </p>
            <p class="italic">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quo, esse fugiat sed natus commodi cumque? Cumque consequuntur perspiciatis illo sunt, amet sequi eaque nostrum porro culpa fugit debitis eos architecto, dicta non repudiandae facilis excepturi labore in. Error magni nisi ipsam molestias delectus possimus quae suscipit animi beatae eum.
            </p>
        </div>

        <div class="form ">
            <form action="{{ route('update', ['product' => $product->id]) }}" method="POST">
                @csrf
                @method('PUT')
                    <p class="pb-5 text-2xl text-blue-400">Update Product Details</p>
                    <div class="pb-5">
                        <input type="text" name="name" id="name" value="{{ $product->name }}"class="form-input pb-5" required>
                    </div> 
                    <div class="pb-5">
                        <input type="text" name="category" id="category" value="{{ $product->category }}" class="form-input pb-5" placeholder="Category" required>
                    </div> 
                    <div class="pb-5">
                        <textarea  name="description" id="description" rows="5" value="{{ $product->description }}" class="form-input mb-8" placeholder="Description" required>{{ $product->description }}</textarea>
                    </div> 
                    <div class="pb-5">
                    
                        <input type="number" name="price" id="price" value="{{ $product->price }}" class="form-input" placeholder="Price" required>
                    </div> 
                    <div class="pb-5">
        
                    <button type="submit" class="submit-btn" >Update</button></div>
            </form>
        </div>
        
    </div>
    </div>
@endsection
