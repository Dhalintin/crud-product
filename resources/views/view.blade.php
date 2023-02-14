@extends('/layout')

@section('content')
    @if (session('status'))
        {{ session('status') }}
    @endif
        @foreach($posts as $post)
        <div class="mid">
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
                <a href="/show/{{ $post->id }}">Show Details</a>
                
        </div>
        @endforeach
        
        <div class="middle">
            {{ $posts->links() }}
        </div>
@endsection

