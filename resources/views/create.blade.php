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

    <div class="mid">
    <form action="/createproduct/store" method="POST">
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

</body>
</html>
