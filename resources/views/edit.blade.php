@extends('/layout')

@section('content')
@if($errors->any())
        @foreach ($errors as $error)
           <li> {{ $error }}</li>
        @endforeach
        
    @enderror
    <div class="grid lg:grid-cols-3">
        <div class="lg:col-span-2 pl-14 mr-32 text-justify">
            <h1 class="pb-12 text-3xl text-blue-500 mt-16 font-bold">How to sell your product</h1>
            <p class="pb-3 text-justify italic">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quo, esse fugiat sed natus commodi cumque? Cumque consequuntur perspiciatis illo sunt, amet sequi eaque nostrum porro culpa fugit debitis eos architecto, dicta non repudiandae facilis excepturi labore in. Error magni nisi ipsam molestias delectus possimus quae suscipit animi beatae eum.
            </p>
            <p class="italic">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quo, esse fugiat sed natus commodi cumque? Cumque consequuntur perspiciatis illo sunt, amet sequi eaque nostrum porro culpa fugit debitis eos architecto, dicta non repudiandae facilis excepturi labore in. Error magni nisi ipsam molestias delectus possimus quae suscipit animi beatae eum.
            </p>
        </div>

        <div class="lg:col-span-1 pl-12 bg-gray-200  dark:bg-slate-800 border rounded-lg ml-12 p-8 border-red-200 ">
            <form action="/update/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                    <p class="pb-5 text-2xl text-blue-400">Add New product</p>
                    <div class="pb-5">
                        <input type="text" name="name" id="name" value="{{ $post->name }}"class="border border-gray-300 text-sm rounded-lg  md:block md:w-full w-96 p-2.5 dark:border-blue-400 dark:bg-gray-700 dark:text-gray-200 pb-5" required>
                    </div> 
                    <div class="pb-5">
                        <input type="text" name="category" id="category" value="{{ $post->category }}" class="border border-gray-300 text-sm rounded-lg  md:block md:w-full w-96 p-2.5 dark:border-blue-400 dark:bg-gray-700 dark:text-gray-200 pb-5" placeholder="Category" required>
                    </div> 
                    <div class="pb-5">
                        <textarea  name="description" id="description" rows="5" value="{{ $post->description }}" class="border border-gray-300 text-sm rounded-lg  md:block md:w-full w-96 p-2.5 dark:border-blue-400 dark:bg-gray-700 dark:text-gray-200 mb8" placeholder="Description" required>{{ $post->description }}</textarea>
                    </div> 
                    <div class="pb-5">
                    
                        <input type="number" name="price" id="price" value="{{ $post->price }}" class="border border-gray-300 text-sm rounded-lg  md:block md:w-full w-96 p-2.5 dark:border-blue-400 dark:bg-gray-700 dark:text-gray-200" placeholder="Price" required>
                    </div> 
                    <div class="pb-5">
        
                    <button type="submit" class="border border-gray-300 text-sm text-white rounded-lg  block md:w-full w-72 p-2.5 bg-blue-500 text-center mb-8 dark:bg-slate-800 dark:text-gray-400 cursor-pointer" >Create</button></div>
            </form>
        </div>
        
    </div>
    </div>
@endsection
