<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musixluvas</title>
    <link rel="icon" type="image" href="../images/logo1.png">
    <link rel="stylesheet" type="text/css" href="{{ url('/style.css') }}" />
</head>
<body>
    <header>
        <a href="/" id="head1"><img src="../images/logo-home.png">usixLuvas</a>
        <div class="spacing">
            <a href="/create" class="head2">Create</a>
            <a href="/view/default" class="head2">Go Back</a>
            @if(isset(Auth::user()->name))
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                </a>
                </form>
                
            @else
                <a href="{{ route('login') }}" class="head2">Login</a>
                <a href="{{ route('register') }}" class="head2">Register</a>

        @endif
    </header>
    <div class="container">
        @yield('content')
    </div>

    <br>
    <br>
    <br>
    
    <footer>
        <p>Designed by Dhalitin</p>
    </footer>

</body>
</html>
</body>
</html>