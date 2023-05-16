@extends('products/layout')

@section('content')
<div class="grid lg:grid-cols-3">
    <div class="info-col">
        <h1 class="title">Here are your Tags</h1>
        @foreach ($tags as $tag)
        <p class="pb-3 text-justify italic">
            {{ $tag->name }}
        </p>
    @endforeach
    </div>

    <div class="form ">
        <form action="{{ route('savetag') }}" method="POST">
            @csrf
            <p class="pb-5 text-2xl text-blue-400">
                <label for="tag">Create New Tag</label>
            </p>
            <div class="pb-5">
            <input type="text" name="name" id="tag" required class="form-input pb-5">
            </div>
            
            <button type="submit" class="submit-btn">Create new Tag</button>
            
        </form>
    </div>
    
</div>
    
@endsection