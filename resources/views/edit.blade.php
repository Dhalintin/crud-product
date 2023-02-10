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
    <p>
        {{ $crud->id}}
    </p>
</body>
</html>
