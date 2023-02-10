<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musixluvas</title>
    <link rel="icon" type="image" href="images/logo1.png">
    <link rel="stylesheet" type="text/css" href="{{ url('/style.css') }}" />
</head>
<body>
    <header>
        <a href="/" id="head1"><img src="images/logo-home.png">usixLuvas</a>
        <div class="spacing">
            <a href="/" class="head2">Home</a>
            <a href="#" class="head2">Register</a>
            <a href="#" class="head2">Login</a>
        </div>
    </header>
        @foreach($posts as $post)
        <div class="mid">

        {{ $post->id}}
            <tr>
                <td class="title">
                    Product's Name: 
                </td>
                <td>
                    {{ $post->name }}
                </td><br>
            </tr>
            <tr>
                <td class="details">
                    Category: 
                </td>
                <td>
                    {{ $post->category }}
                </td><br>
            </tr>
            <tr>
                <td class="details">
                    Description:
                </td>
                <td>
                    {{ $post->description }}
                </td><br>
            </tr>
            <tr>
                <td class="details">
                    Price:
                </td>
                <td>
                    ${{ $post->price }}
                </td><br>
            </tr>
            <form action="/destroy/{{ $post->id }}" method="POST">
                <a href="/show/{{ $post->id }}">Show Details</a>
                <a href="/edit/{{ $post->id }}" >Edit</a>
    
                @csrf
                @method('DELETE')
                <button type="button" class="btn-btn-danger">Delete</button>
            </form>
        </div>
        @endforeach
        
    
</body>
</html>
