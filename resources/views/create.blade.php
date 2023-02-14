@extends('/layout')

@section('content')

    <div class="mid">
    <form action="/store" method="POST">
        @csrf
    
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="category">Category</label>
            <input type="text" name="category" id="category">
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
        </div>

        <div>
            <button type="submit">Create Post</button>
        </div>
    </form>
</div>
@endsection