<!DOCTYPE html>
<html lang="en">

  <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <title>OnlineShop</title>

        <!-- Bootstrap core CSS -->
        <link href = '{{asset('vendor/bootstrap/css/bootstrap.min.css')}}' rel="stylesheet">
        

        <!-- Tailwind CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">



        <!-- Additional CSS Files -->
        <link rel="stylesheet" href = '{{asset('assets/css/fontawesome.css')}}'>
        <link rel="stylesheet" href = '{{asset('assets/css/templatemo-sixteen.css')}}'>
        <link rel="stylesheet" href = '{{asset('assets/css/owl.css')}}'>
        <link rel="stylesheet" href = '{{asset('assets/css/style.css')}}'>

        {{-- ckeditor --}}
        @yield('ckeditor')


  </head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->


      <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"><h2>Online <em>Shop</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link {{Request::routeIs('home') ? 'active' : ''}}" href="{{route('home')}}">Home</a>
              </li>
            <li class="nav-item">
              <a class="nav-link {{Request::routeIs('products') ? 'active' : ''}}" href="{{route('products')}}">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::routeIs('about') ? 'active' : ''}}" href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::routeIs('contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact Us</a>
            </li>
            @guest
              <li class="nav-item">
                <a class="nav-link {{Request::routeIs('login') ? 'active' : ''}}" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::routeIs('register') ? 'active' : ''}}" href="{{route('register')}}">Register</a>
              </li>
            @endguest
            @auth
            <li class="nav-item">
              <a class="nav-link {{Request::routeIs('dashboard') ? 'active' : ''}}" href="{{route('dashboard')}}">dashboard</a>
            </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>
  </header>

    @yield('main')

 
    <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
        
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">ALi</h5>
        
                    <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white">Link</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link</a>
                    </li>
                    </ul>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">PRODUCTS</h5>
        
                    <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 4</a>
                    </li>
                    </ul>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">USEFUL LINKS</h5>
        
                    <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 4</a>
                    </li>
                    </ul>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">CONTACT</h5>
        
                    <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 4</a>
                    </li>
                    </ul>
                </div>
                <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
            </div>
            <!-- Grid container -->
        
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="#">Armin Pariya</a>
            </div>
            <!-- Copyright -->
    </footer>
 

 <!-- Bootstrap core JavaScript -->
    <script src = '{{asset('vendor/jquery/jquery.min.js')}}'></script>
    <script src = '{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}'></script>

  
    
    <!-- Additional Scripts -->

    <script src = '{{asset('assets/js/custom.js')}}'></script>
    <script src="{{asset('assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>
    <script src="{{asset('assets/js/accordions.js')}}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>



    @yield('ckeditor2')



</body>

</html>
