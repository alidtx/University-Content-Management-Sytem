<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Basic Page Needs	================================================== -->
    <meta charset="utf-8" />
    <title>Comilla University |  @yield('title')</title>

    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
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
    {{-- <link rel="stylesheet" href="{{ asset('public/old_frontend/css/vc.css') }}" /> --}}
    
    <!-- Main Stylesheet -->
    <link href="{{ asset('public/old_frontend/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('public/old_frontend/css/faculty_of_science.css') }}" />

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--Favicon-->
    <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->
    <link rel="icon" href="{{ asset('public/frontend/images/footer/footer.png') }}" type="image/x-icon">

      <style>
      @media (min-width: 1200px) {
        .for_padding_like_container {
              padding-left:10px;
        }
      }

      @media (min-width: 992px) {
        .for_padding_like_container {
          padding-left:10px;
        }
      }
      @media (min-width: 768px) {
        .for_padding_like_container {
          padding-left: 10px;
        }
      }
      @media (min-width: 576px) {
        .for_padding_like_container {
          padding-left:75px;
        }
      }
  </style>

    <style type="text/css">
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
      .dropdown:hover>.dropdown-menu{
        display: block;
      }
      .menu_list{
        color: green;
        background: white;
        font-size: 16px;

      }
      .title-text {
          padding: 15px;
          color: #fff;
      }
      .mb-3, .my-3 {
        margin-bottom: 0.3rem!important;
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

  <body id="office_of_science">


    @include('frontend.layouts.vc_office_header')

    @yield('content')

    @include('frontend.layouts.office_footer') 

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

     @yield('java_script')


  </body>
</html>
