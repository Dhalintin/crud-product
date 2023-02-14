@extends('/layout')

@section('content')
        @foreach($crud as $post)
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
            <a href="/edit"><button>Edit</button></a>
            <a href="/delete"><button>Delete</button></a>
        </div>
        @endforeach
        
@endsection
