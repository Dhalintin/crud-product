@extends('/layout')

@section('content')
    @if ($message = Session::get('success'))
        {{ $message }}
    @endif
    @if($errors->any())
        @foreach ($errors->any() as $error)
           <li> {{ $error }}</li>
        @endforeach
        
    @enderror
    
    <section>
        <nav-left>

            <a href="/create" ><img src="images/letterc2.png">reate
            <p>Create a new product to add to the catalog</p></a>
        </nav-left>

        <nav-right>
            <a href="/view" id="head1"><img src="images/letterr2.png">ead
            <p>Check out all the products in stock</p></a>
        </nav-right>
    </section>

    <section>
        <nav-left>
            <a href="/view" id="head1"><img src="images/letteru2.png">pdate
            <p>Update prices and details of products </p></a>
        </nav-left>

        <nav-right>
            <a href="/view" id="head1"><img src="images/letterd.png">elete
            <p>Delete product from database</p></a>
        </nav-right>
    </section>


@endsection 
