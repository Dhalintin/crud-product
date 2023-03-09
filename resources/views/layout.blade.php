<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musixluvas</title>
    <link rel="icon" type="image" href="../images/logo1.png">
    
    <!--script-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light dark:bg-dark bg-cover dark:text-gray-300">
    <!--Content Wrapper-->
    <div class="grid md:grid-cols-2">
            <nav class="text-right md:col-span-1">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold uppercase p-4">
                        <a href="/" class="hover:text-gray-700 w-3"><img src="../images/logo-home.png"></a>
                    </h1>
                </div>
            </nav>

            <main class="px-16 py-6 pb-2 md:col-span-1">
                

                <div class="flex justify-center md:justify-end" id="menu">
                @if(Auth::user())
                    <div class="rounded-full py-2 px-3 text-xs font-bold cursor-pointer tracking-wider text-red-400 border-red-400 md:border-2 hover:bg-red-400 hover:text-white transition ease-out duration-1000"><a  href="/create/{{ Auth::user()->id }}">Create</a>
                    </div>

                    <div class="rounded-full py-2 px-3 text-xs uppercase font-bold cursor-pointer tracking-wider text-red-400 border-red-400 md:border-2 hover:bg-red-400 hover:text-white transition ease-out duration-1000">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" >
                                {{ __('Logout') }}
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="rounded-full py-2 px-3 text-xs uppercase font-bold cursor-pointer tracking-wider text-red-400 border-red-400 md:border-2 hover:bg-red-400 hover:text-white transition ease-out duration-1000">Log in</a>
                    <a href="{{ route('register') }}" class="rounded-full py-2 px-3 text-xs uppercase font-bold cursor-pointer tracking-wider text-red-400  ml-2 border-red-500 md:border-2 hover:bg-red-400 hover:text-white transition ease-out duration-1000">Sign up</a>
                @endif
                </div>
            </main>
    </div>

    <div class="container cols-span-2">
        <br>
        @yield('content')
    </div>

    <footer class="flex p-12 justify-center">
        <div>
            <div>
                <a href=""><span>Home</span>
                    <svg class="w-5 ml-2 md:inline" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </a>
            

                <a href=""><span>About</span>
                    <svg class="w-5 ml-2 md:inline" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                    </svg>
                </a>
            

                <a href=""><span>Contact</span>
                    <svg class="w-5 ml-2 md:inline" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </a>
            </div>
            
            <div class="flex justify-center">
                <span >Designed by Dhalitin</span>
            </div>
        </div>
        
    </footer>
</body>

</html>
</body>
</html>
