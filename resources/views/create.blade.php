@extends('/layout')

@section('content')
@if($errors->any())
        @foreach ($errors as $error)
           <li> {{ $error }}</li>
        @endforeach
        
    @enderror

    <div class="mid">
        <form action="/store" method="POST">
            @csrf
           
            <div>
                <label for="name">NAME:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div>
                <label for="category">CATEGORY</label>
                <input type="text" name="category" id="category" required>
            </div>

            <div>
                <label for="description">DESCRIPTION</label>
                <textarea  name="description" id="description" rows="5" required></textarea>
            </div>
            <div>
                <label for="price">PRICE</label>
                <input type="number" name="price" id="price" required>
            </div>
            

            <div>
                <button type="submit">Create</button>
            </div>
            <br><br><br><br>
        </form>
    </div>
@endsection