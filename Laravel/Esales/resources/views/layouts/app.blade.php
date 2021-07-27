<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Esales') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

   
    <!-- Styles -->
   

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>
   <!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   

    @yield('css')
</head>
<body>
 @auth
    <input type="checkbox"  id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span>
                <span>E-sales</span>
            </h3>
            <label for="sidebar-toggle" class="fas fa-bars"></label>
        </div>
        <div class="sidebar-menu">
            <ul>
                {{-- item 1 --}}
                <li>
                    <a href="{{route('home')}}">
                        <span class="fas fa-tachometer-slowest"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- item 2 --}}
                <li>
                    <a href="{{route('products.index')}}">
                        <span class="fas fa-cart-plus"></span>
                        <span>Products</span>
                    </a>
                </li>
                {{-- item 3 --}}
                <li>
                    <a href="{{route('categories.index')}}">
                        <span class="fas fa-diamond"></span>
                        <span>Categories</span>
                    </a>
                </li>
                {{-- item 4 --}}
                <li>
                    <a href="{{route('brands.index')}}">
                        <span class="fas fa-save"></span>
                        <span>Brands</span>
                    </a>
                </li>
                {{-- item 5 --}}
                <li>
                    <a href="">
                        <span class="fas fa-shopping-bag"></span>
                        <span>Orders</span>
                    </a>
                </li>
                {{-- item 6 --}}
                <li>
                    <a href="">
                        <span class="fas fa-users"></span>
                        <span>Customers</span>
                    </a>
                </li>
                {{-- item 7 --}}
                <li>
                    <a href="">
                        <span class="fas fa-user-tag"></span>
                        <span>Sellers</span>
                    </a>
                </li>
                {{-- item 8 --}}
                <li>
                    <a href="">
                        <span class="fas fa-cog"></span>
                        <span>Settings</span>
                    </a>
                </li>
               
                {{-- item 9--}}
               
            </ul>
        </div>
    </div>
 @endauth
    {{-- //main page content appear here --}}
<div class="main-content">
   <header>
            <div class="searchwrapper">
                <span class="search"></span>
                <input type="search" placeholder="search">
            </div>
           
             {{-- <div class="socialicons"> --}}

                <div class="socialicons" >
                    <!-- Left Side Of Navbar -->
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar   ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown socialicons">
                                    <span class="fas fa-bell"></span>
                                    <span class="fas fa-comment"></span>
                                    <div>
                                        <img src="{{asset('img\user.jpg')}}" alt="">
                                    </div>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle p-4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            
        </nav>
</header>

        <main>
          @if (session()->has('success'))
            <div class="alert alert-success my-4 ">
                {{ session()->get('success') }}
            </div>

            @endif
             @if (session()->has('error'))
            <div class="alert alert-danger my-4 ">
                {{ session()->get('error') }}
            </div>

            @endif   
        {{-- content do display will appear here --}}
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</div>
</body>
</html>
