@extends('layout.header')

@section('judul', 'H.S Bouquet')

@section('container')

<!-- css -->
        <!-- slideshow and Footer -->
        <link href="aset/css/style.css" rel="stylesheet">
        <!-- carausel -->
        <link href="aset/vendor/icofont/icofont.min.css" rel="stylesheet">

        <!-- sidebar dashboard -->
        <!-- <link href="https://getbootstrap.com/docs/4.5/examples/dashboard/dashboard.css" rel="stylesheet"> -->
        <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/"> -->
        <!-- Bootstrap core CSS -->
        <!-- <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->



<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators">
      <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#heroCarousel" data-slide-to="1" class=""></li>
      <li data-target="#heroCarousel" data-slide-to="2" class=""></li>
    </ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('img/19619.jpg');">
          <div class="carousel-container">
            <div class="carousel-content container">
              <h2 class="animated fadeInDown">Welcome to H.S Bouquet, {{ Auth::user()->first_name }}</h2>
              <!-- <h2 class="animated fadeInDown">Welcome to H.S Bouquet, {{auth()->user()->name}}</h2> -->
              <p class="animated fadeInUp">Beta Will Be Open Soon</p>
              <a href="#" class="btn-get-started animated fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('img/32822.jpg');">
          <div class="carousel-container">
            <div class="carousel-content container">
              <h2 class="animated fadeInDown">Profil</h2>
              <p class="animated fadeInUp"></p>
              <a href="/profil" class="btn-get-started animated fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url('img/449811.jpg');">
          <div class="carousel-container">
            <div class="carousel-content container">
              <h2 class="animated fadeInDown">About</h2>
              <p class="animated fadeInUp"></p>
              <a href="#" class="btn-get-started animated fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

    </div>
  </div>
</section>

<!----------- Footer ------------>
    <footer class="footer-bs">
      <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <h2>H.S Bouquet</h2>
            <p>© 2014 BS3 UI Kit, All rights reserved</p>
        </div>
        <div class="col-md-4 footer-nav animated fadeInUp">
          <h4>Menu</h4>
            <div class="col-md-6">
                <ul class="pages">
                  <li><a href="{{ url('/categorie/display') }}">Categorie</a></li>
                  @if(auth()->user()->job_status == 'admin')
                    <li><a href="{{ url('/customer/display') }}">Customer</a></li>
                    <li><a href="{{ url('/user/display') }}">User</a></li>
                    @endif
                    <li><a href="{{ url('/product/display') }}">Product</a></li>
                    <li><a href="{{ url('/sales/display') }}">Sales</a></li>
                    <!-- <li><a href="{{ url('/sales_detail/display') }}">Sales_Detail</a></li> -->
                    <!--<li><a href="{{ url('/login') }}">login</a></li>-->
                    <!--<li><a href="{{ url('/register') }}">register</a></li>-->
                </ul>
            </div>
          </div>
        <div class="col-md-2 footer-social animated fadeInDown">
          <h4>Follow Me</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">WhatsApp</a></li>
                </ul>
          </div>
      <div class="col-md-3 footer-ns animated fadeInRight">
        <h4>Location</h4>
            <p>Jl. Gubeng Kertajaya Block 5B / 53</p>
            <p>Surabaya, East Java, Indonesia</p>
            <!--<div class="col-md-6">-->
            <!--    <ul class="list">-->
            <!--        <li><a href="#">Profil</a></li>-->
            <!--        <li><a href="#">Contact</a></li>-->
            <!--        <li><a href="#">Terms & Condition</a></li>-->
            <!--        <li><a href="#">Privacy Policy</a></li>-->
            <!--    </ul>-->
            <!--</div>-->
        </div>
      </div>
    </footer>
    
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script> -->
<!-- <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="https://getbootstrap.com/docs/4.5/examples/dashboard/dashboard.js"></script>

@endsection