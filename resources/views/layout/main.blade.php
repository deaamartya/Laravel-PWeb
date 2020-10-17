<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Laravel</title>

  <link href="aset/css/style.css" rel="stylesheet">
  <link href="aset/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="aset/vendor/animate.css/animate.min.css" rel="stylesheet">


    

    
    <!-- =================================================== -->
    <!-- =================================================== -->
    <!-- =================================================== -->
  <!-- <title>@yield('judul')</title> -->
  </head>
  <body>
  <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ url('/customer/display') }}">Customer</a>
                <a class="dropdown-item" href="{{ url('/user/display') }}">uUser</a>
                <a class="dropdown-item" href="{{ url('/categorie/display') }}">Categorie</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
  <h1 class="text-light"><a href="/"><span>LARAVEL</span></a></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>


  <!-- <header id="header">
        <div class="container">
          <div class="logo float-left">
            <h1 class="text-light"><a href="/"><span>LARAVEL</span></a></h1>
          </div>

          <nav class="nav-menu float-right d-none d-lg-block" >
              <ul>
                <li class="active"><a href="/">Home <i class="la la-angle-down"></i></a></li>
                <li><a href="{{ url('/product/display') }}">Product</a></li>
                <li><a href="{{ url('/sales/display') }}">Sales</a></li>
                <li class="drop-down"><a href="#">Menu</a>
              <ul>
                  <li class="drop-down"><a href="#">Master</a>
                    <ul>
                      <li><a href="{{ url('/customer/display') }}">Customer</a></li>
                      <li><a href="{{ url('/user/display') }}">User</a></li>
                      <li><a href="{{ url('/categorie/display') }}">Categorie</a></li>
                    </ul>
                  </li>
                  <li><a href="/coba">About</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </nav>
        </div>
  </header> -->
        <!-- @yield('container') -->
  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>