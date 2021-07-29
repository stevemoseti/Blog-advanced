<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>welcome</title>

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    />
    <!-- Styles -->
    <link href="{{ asset('frontendcss/app.css') }}" rel="stylesheet" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="header">
      <div class="header-top">
        <div class="row">
          <div class="row-item">
            <p>Welcome to Esales Store!</p>
          </div>
          <div class="row-item">
            <span>
              <a  class="top" href=""
                ><i class="fas fa-map-marker-check"></i>Location</a
              >
            </span>
            <span>
              <a   class="top" href="{{ route('login') }}"
                ><i class="fas fa-user"></i>Login</a
              >
            </span>
            <span> | </span>
            <span>
              <a  class="top" href="{{ route('register') }}"
                ><i class="fas fa-user"></i>Register</a
              >
            </span>
          </div>
        </div>
      </div>
      <div class="header-middle">
        <div class="container">
          <div class="row">
            <a href="#">
              <img src="{{ asset('img/esales.png') }}" alt="" />
            </a>
            <div class="header__search">
              <input class="searchInput" type="text" />
              <!-- /* logo */ -->
              <button class="header__SearchIcon">
                <i class="fas fa-search center"></i>
              </button>
            </div>
            <div class="header-nav">
                <div class="wishlist">
                   <a  class="top" href="" class="d-flex">
                       My Wishlist
                   </a>
                </div>
                <div  class="cart">
                        <a  class="top" href="">
                            <i class="fas fa-shopping-cart">{{ 0 }}</i>
                        </a>
                </div>

            </div>
          </div>
        </div>
      </div>
      <hr />
      <div class="header-bottom">
        <nav class="navbar navbar-expand-sm">
          <ul>
            <li>
              <a href=""> Home </a>
            </li>
            <li>
              <a href=""> About </a>
            </li>
            <li>
              <a href="">Categories </a>
            </li>
            <li>
              <a href="">Brands </a>
            </li>
            <li>
              <a href=""> Contact </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <main>
        @yield('content')
    </main>
  </body>
</html>
