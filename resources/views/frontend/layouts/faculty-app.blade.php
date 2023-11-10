<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8" />
    <title>Comilla University |  @yield('title')</title>

    <!-- Mobile Specific Metas
	================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Construction Html5 Template" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=5.0"
    />
    <meta name="author" content="Nano Information Technology" />
    <meta name="generator" content="Nano Information Technology" />

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/old_frontend/plugins/bootstrap/bootstrap.min.css') }}" />
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('public/old_frontend/plugins/slick/slick.css') }}" />
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ asset('public/old_frontend/plugins/themify-icons/themify-icons.css') }}" />
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('public/old_frontend/plugins/animate/animate.css') }}" />
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('public/old_frontend/plugins/aos/aos.css') }}" />
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{ asset('public/old_frontend/plugins/venobox/venobox.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('public/frontend/css/vc.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('public/frontend/node_modules/@fortawesome/fontawesome-free/css/all.css') }}">
    <!-- Main Stylesheet -->
    <link href="{{ asset('public/old_frontend/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('public/old_frontend/css/faculty_of_science.css') }}" />
    <link href="{{ asset('public/frontend/dist/css/custom.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('public/frontend/dist/css/main.css') }}"> --}}
    <!--Favicon-->
    <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->
    <link rel="icon" href="{{ asset('public/old_frontend/images/footer/footer.png') }}" type="image/x-icon">

    <style type="text/css">
     .back-to-top {
         position: fixed;
         bottom: 30px;
         right: 30px;
         width: 48px;
         height: 48px;
         z-index: 9999;
         cursor: pointer;
         text-decoration: none;
         transition: opacity 0.2s ease-out;
         background-color: #00b2ff;
         background-repeat: no-repeat;
         background-size: 80%;
         background-position: center;
         background-image: url({{ asset('public/frontend/cuimages/arrow-up-fill.png') }});

      }

      .navbar-dark .navbar-brand {
          color: #fff;
          font-weight: 700;
          font-size: 18px;
          padding: 15px 0px;
      }
      .nav-fill .nav-item{
          border: 1px solid gray;
          color: #000;
      }
      .top-banner {
          margin-top: 80px;
          padding-top: 135px;
          padding-bottom: 100px;
      }

      @media only screen and (max-width: 990px) {
        .navbar-dark .nav-item > .dropdown-toggle::after {
            border: 0;
            margin-left: 0.255em;
            vertical-align: 1px;
            content: "+";
            font-family: "themify";
            float: right;
            font-size: 16px;
            font-weight: 700;
            width: auto;
        }

        .navbar-dark .nav-item > .dropdown-toggle[aria-expanded="true"]::after {
            content: "-";
        }
        .navbar .dropdown .dropdown .dropdown-toggle, .navbar .dropdown-item {
            text-align: left;
        }
        .dropdown-menu{
          background-color: transparent;
        }
        .navbar .dropdown .dropdown .dropdown-toggle, .navbar .dropdown-item{
          color: #fff;
          font-size: 16px;
          font-weight: 600;
        }
        .faculty-icon-list ul li a{
            padding: 0px;
        }

        .top-banner {
            margin-top: 80px;
            padding-top: 80px;
            padding-bottom: 30px;
        }
    }


    </style>

     @yield('my_style')

  </head>

  <body id="faculty_of_science">

    <a href="#" class="back-to-top"></a>
    {{-- @include('frontend.layouts.header') --}}

    @yield('content')

    {{-- @include('frontend.layouts.footer') --}}

    <!-- jQuery -->
    <script src="{{ asset('public/old_frontend/plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('public/old_frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('public/old_frontend/plugins/slick/slick.min.js') }}"></script>
    <!-- aos -->
    <script src="{{ asset('public/old_frontend/plugins/aos/aos.js') }}"></script>
    <!-- venobox popup -->
    <script src="{{ asset('public/old_frontend/plugins/venobox/venobox.min.js') }}"></script>
    <!-- filter -->
    <script src="{{ asset('public/old_frontend/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/old_frontend/plugins/scroll/jquery.autoscroll.js') }}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="{{ asset('public/old_frontend/plugins/google-map/gmap.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('public/old_frontend/js/script.js') }}"></script>

    <script src="{{ asset('public/frontend/dist/js/jquery.easy-ticker.js') }}"></script>
    <script src="{{ asset('public/frontend/dist/js/jquery-ui.js') }}"></script>
    @yield('add_script_ref')
    <script type="text/javascript">
      $('.carousel').carousel({
          //Time between slides. 1000 = 1s
          interval: 5000,
          //Whether the slider should stop when hovered over.
          pause: false
        });

      $('.link').click(function(e){
          e.preventDefault();
          $.scrollTo('2000px', 300);
      });
    </script>

    <script type="text/javascript">
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var height = $('.top-header').innerHeight();

            if (scroll >= 15) {
                // $("header").addClass("fixed-top");
                $('.top-header').addClass('hide');
                $('.navigation').removeClass('nav-bg');
                $('.navigation').css('margin-top', '-' + height + 'px');

            } else {
                // $("header").removeClass("fixed-top");
                $('.top-header').removeClass('hide');
                $('.navigation').addClass('nav-bg');
                $('.navigation').css('margin-top', '-' + 0 + 'px');
            }
         // Show button after 100px
         var showAfter = 100;
            if ($(this).scrollTop() > showAfter ) {
            $('.back-to-top').fadeIn();
            } else {
            $('.back-to-top').fadeOut();
            }
        });
         //Click event to scroll to top
         $('.back-to-top').click(function(){
          $('html, body').animate({scrollTop : 0},800);
          return false;
         });

    </script>
    @section('java_script')
    <script>
      $(function(){
          $('.demo').easyTicker({
            direction: 'up',
            easing: 'swing',
            speed: 'slow',
            interval: 3000,
            height: 'auto',
            visible: 0,
            mousePause: true,
            autoplay: true,
            controls: {
                up: '.btnUp',
                down: '.btnDown',
                toggle: '',
                playText: 'Play',
                stopText: 'Stop'
            },
            callbacks: {
                before: false,
                after: false,
                finish: false
            }
        });
    
        });
    </script>
    @endsection

     @yield('java_script')


  </body>
</html>
