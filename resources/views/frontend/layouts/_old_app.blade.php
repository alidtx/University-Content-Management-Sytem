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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name='subject' content='' subject=''>
    <meta name="copyright" content="" />
    <meta name="language" content="EN" />
    <meta name="robots" content="index,no-follow" />
    <meta name="abstract" content="" />
    <meta name="topic" content="" />
    <meta name="summary" content="" />
    <meta name="Classification" content="" />
    <meta name="author" content="" />
    <meta name="og:title" content="" />
    <meta name="og:type" content="" />
    <meta name="og:url" content="" />
    <meta name="og:image" content="" />
    <meta name="og:site_name" content="" />
    <meta name="og:description" content="" />

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/frontend/plugins/bootstrap/bootstrap.min.css') }}" />
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('public/frontend/plugins/slick/slick.css') }}" />
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ asset('public/frontend/plugins/themify-icons/themify-icons.css') }}" />
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('public/frontend/plugins/animate/animate.css') }}" />
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('public/frontend/plugins/aos/aos.css') }}" />
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{ asset('public/frontend/plugins/venobox/venobox.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/vc.css') }}" />

    <!-- Main Stylesheet -->
    <link href="{{ asset('public/frontend/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/frontend/css/aos.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!--Favicon-->
    <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->
    <link rel="icon" href="{{ asset('public/frontend/images/footer/footer.png') }}" type="image/x-icon">

    <style type="text/css">
      
    </style>

    @yield('my_style')

  </head>

  <body>

    <a id="btopbutton"></a>

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')


    <!-- jQuery -->
    <script src="{{ asset('public/frontend/plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('public/frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('public/frontend/plugins/slick/slick.min.js') }}"></script>
    <!-- aos -->
    <script src="{{ asset('public/frontend/plugins/aos/aos.js') }}"></script>
    <!-- venobox popup -->
    <script src="{{ asset('public/frontend/plugins/venobox/venobox.min.js') }}"></script>
    <!-- filter -->
    <script src="{{ asset('public/frontend/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/plugins/scroll/jquery.autoscroll.js') }}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="{{ asset('public/frontend/plugins/google-map/gmap.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('public/frontend/js/script.js') }}"></script>
    <script src="{{ asset('public/frontend/js/aos.js') }}"></script>
    <script>
      AOS.init();
    </script>
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
        var btn = $('#btopbutton');

        $(window).scroll(function() {
          if ($(window).scrollTop() > 300) {
            btn.addClass('show');
          } else {
            btn.removeClass('show');
          }
        });

        btn.on('click', function(e) {
          e.preventDefault();
          $('html, body').animate({scrollTop:0}, '300');
        });
      </script>


     @yield('java_script')


  </body>
</html>
