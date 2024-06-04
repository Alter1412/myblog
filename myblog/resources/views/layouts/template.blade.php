<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   {{--  <script src="https://cdn.tailwindcss.com"></script> --}}
    <title>@yield('title')</title>
</head>
<body>
    <header >
        <div >
            <svg ></svg>
        </div>
        @if (Route::has('login'))
            <nav >
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                    >
                        Log in  
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    @yield('content')
</body>
</html>