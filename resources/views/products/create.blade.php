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
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <p class="pb-5 text-2xl text-blue-400">Add New product</p>
                    <div class="pb-5">
                    <input type="text" name="name" id="name" class="form-input pb-5" placeholder="Product Name" required>
                    </div> 
                    <div class="pb-5">
                    <input type="text" name="category" id="category" class="form-input pb-5" placeholder="Category" required>
                    </div> 
                    <div class="pb-5">
                    <textarea  name="description" id="description" rows="5" class="form-input mb8" placeholder="Description" required></textarea>
                    </div> 
                    <div class="pb-5">
                    
                    <input type="number" name="price" id="price" class="form-input" placeholder="Price" required>
                    </div> 

                    <div class="pb-5">
                    <input type="file" name="image" id="image" required>
                    </div> 
        
                    <button type="submit" class="submit-btn" >Create</button></div>
            </form>
        </div>
        
    </div>
    
@endsection
