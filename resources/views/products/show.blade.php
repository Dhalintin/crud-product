@extends('products/layout')

@section('content')

    <div class="grid md:grid-cols-4 mt-8 ml-32 mr-8">        
        <main class="px-16 py-6 pb-2 md:col-span-3  bg-gray-100 dark:bg-slate-800 rounded-lg">                 
            <div class=" grid md:grid-cols-2 pl-8 ">
                <div class="pb-2 txt-md font-semibold italic">Product's Name: </div>
                <div class="pb-2 text-lg text-blue-400 font-bold">{{ $product->name }}</div>
                <div class="pb-2 txt-md font-semibold italic">Category:</div> 
                <div class="pb-2 text-lg text-blue-400 font-bold">{{ $product->category }}</div>
                <div class="pb-2 txt-md font-semibold italic">Description:</div>
                <div class="pb-2 text-lg text-blue-400 font-bold">{{ $product->description }}</div>
                <div class="pb-2 txt-md font-semibold italic">Price:</div>
                <div class="pb-2 italic text-2xl text-blue-400 font-bold">${{ $product->price }}</div>
                <div class="pb-8 txt-md font-semibold italic">Posted by:</div>
                <div class="pb-4">{{ $product->user->name }}</div>
                @if(Auth::user())
                <div class="p-4 border-none  rounded-2xl"><a href="/edit/{{ $product->id }}" class="p-3 pl-5 pr-5 border rounded-2xl mr-64  border-slate-700">Edit</a></div>
                    <form action="/delete/{{ $product->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border rounded-2xl p-3 border-slate-700 flex justify-center md:justify-end">Delete x</button>
                    </form>
                @endauth
            </div>
            
        </main>
        <div class="md:col-span-1  bg-gray-200 dark:bg-slate-900">
            <img src="../images/product2.png" alt="" class="w-225 h-225 sm:h-48 object-cover mt-12">
        </div>
    </div>
@endsection
