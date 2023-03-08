@extends('/layout')

@section('content')
      
        <div class="mid">
            <tr>
                <td class="title">
                    <div class="titleText">Product's Name: </div>
                
                    <div class="text">{{ $post->name }}</div>
                </td><br>
            </tr>
            <tr>
                <td class="details">
                    <div class="titleText">Category:</div> 
                
                <div class="text">{{ $post->category }}</div>
                </td><br>
            </tr>
            <tr>
                <td class="details">
                    <div class="titleText">Description:</div>
                
                <div class="text">{{ $post->description }}</div>
                </td><br>
            </tr>
            <tr>
                <td class="details">
                    <div class="titleText">Price:</div>
                
                <div class="text">${{ $post->price }}</div>
                </td><br>
            </tr>
            <tr>
                <td class="details">
                    <div class="titleText">Posted by:</div>
                
                <div class="text">{{ $post->user->name }}</div>
                </td><br>
            </tr>
            <form action="/delete/{{ $post->id }}" method="POST">
                <a href="/edit/{{ $post->id }}" >Edit</a>
    
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-btn-danger">Delete</button>
            </form>
        </div>
@endsection
