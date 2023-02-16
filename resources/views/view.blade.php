@extends('/layout')

@section('content')
    <div>
        @if (session('status'))
            {{ session('status') }}
        @endif
    </div>

    <div>
        <span class="filterhead">Filter result by:</span>
        <a href="//aprice" class="filter">Ascending Price</a>
        <a href="/filter/dprice" class="filter">Descending price</a>
        <a href="/filter/acate" class="filter">Ascending Category</a>
        <a href="/filter/dcat" class="filter">Descending Category</a>
    </div><br><br>
    
        @foreach($posts as $post)
        <div class="mid">
            <table>  
                <tr>
                    <td >
                        <span class="title">Product's Name: </span>
                    </td>
                    <td>
                        <span class="info">{{ $post->name }}</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="details">Category:</span> 
                    </td>
                    <td>
                        <span class="info">{{ $post->category }}</span>
                    </td><br>
                </tr>
                <tr>
                    <td>
                        <span class="details">Price:</span> 
                    </td>
                    <td>
                        <span class="info">${{ $post->price }}</span>
                    </td><br>
                </tr>
                
                    <tr>
                        <td><a href="/show/{{ $post->id }}">Show Details</a></td>
                        <td></td>
                    </tr>
            </table>
        </div>
        @endforeach
    
        <div class="middle">
            {{ $posts->links() }}
        </div>
@endsection

