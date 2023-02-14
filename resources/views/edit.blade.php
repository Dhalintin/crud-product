@extends('/layout')

@section('content')
    <div class="mid">
        <form action="/update/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
        
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $post->name }}">
            </div>
    
            <div>
                <label for="category">Category</label>
                <input type="text" name="category" id="category" value="{{ $post->category }}">
            </div>
    
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" value="{{ $post->description }}">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" value="{{ $post->price }}">
            </div>
    
            <div>
                <button type="submit">Update Post</button>
            </div>
        </form>
    </div>
@endsection
