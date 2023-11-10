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
    <meta name="author" content="Themefisher" />
    <meta name="generator" content="Themefisher Educenter HTML Template v1.0" />

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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--Favicon-->
    <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->
    <link rel="icon" href="{{ asset('public/old_frontend/images/footer/footer.png') }}" type="image/x-icon">

    <style type="text/css">

      .navbar-dark .navbar-nav .nav-link {
          padding: 30px 5px;
      }

      .navbar-dark .navbar-nav .nav-link:focus,
      .navbar-dark .navbar-nav .nav-link:hover{
        color: #fff;
        border-bottom: 3px solid #11f2ff;
        padding: 26px 5px;
      }

      .menu-area{
          position: static;
      }
      .mega-area{
          position: absolute;
          width: 100%;
          left: 0;
          right: 0;
          padding: 15px;
      }
      .dropdown-item{
          padding: 5px 0;
      }
      ./*dropdown:hover>.dropdown-menu{
        display: block;
      }*/
      .menu_list{
        color: green;
        background: white;
        font-size: 16px;

      }

      .menu_list>li{
            list-style: none;
            margin-top: 5px;
            margin-left: -40px;
            transition: 1s;
        }
      .menu_list>li:hover{
        margin-left: -20px;
        transition: 1s;
      }
      .menu_list>li::before{
            content: "\00BB";
        }
      .menu_list>li>a{
        color: #000066;
        margin-left: 5px;
        transition: .5s;
      }
      .menu_list>li>a:hover{
        color: #ff9900;
        transition: 0.5s;
      }
      .carousel-caption {
          position: absolute;
          right: 15%;
          bottom: 138px;
          left: 15%;
          z-index: 10;
          padding-top: 20px;
          padding-bottom: 20px;
          color: #fff;
           text-align: left;
      }
      .data-list {
        height: 350px;
        width: 100%;
        overflow-y: hidden;
      }
      .latest-photo{
        display: block;
        transition: transform .4s;
        z-index: 0;
      }
      .latest-photo:hover{
        transform: scale(1.2);
        transform-origin: 50% 50%;
        z-index: 99;
      }
      .la-news{
        padding: 15px;
        background-color: white;
        border-radius: 5px;
      }

    </style>

     @yield('my_style')

  </head>

  <body id="faculty_of_science">


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
        });

    </script>

     @yield('java_script')


  </body>
</html>
