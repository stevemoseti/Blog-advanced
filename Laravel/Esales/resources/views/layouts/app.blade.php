<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>

    <title>Esales</title>
</head>
<body>
    {{-- this is the side bar --}}
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
    {{-- //main page content appear here --}}
    <div class="main-content">
        <header>
            <div class="searchwrapper">
                <span class="search"></span>
                <input type="search" placeholder="search">
            </div>
            <div class="socialicons">
                <span class="fas fa-bell"></span>
                <span class="fas fa-comment"></span>
               {{-- user image --}}
               <div>
                   <img src="img\user.jpg" alt="">
               </div>
            </div>
        </header>
        <main>
        {{-- content do display will appear here --}}
            @yield('content')
        </main>
    </div>

    
</body>
</html>