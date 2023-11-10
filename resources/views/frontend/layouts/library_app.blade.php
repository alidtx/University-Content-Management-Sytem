<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comilla University | @yield('title')</title>
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
    <meta name="author" content="Md Khalid Hossain" />
    <meta name="og:title" content="" />
    <meta name="og:type" content="" />
    <meta name="og:url" content="" />
    <meta name="og:image" content="" />
    <meta name="og:site_name" content="" />
    <meta name="og:description" content="" />
    <link rel="icon" href="{{ asset('public/frontend/dist/images/personals/footer.png') }}" type="image/gif" sizes="16x16" />


    <!-- ====Css Link==== -->
    <link rel="stylesheet" href="{{ asset('public/frontend/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/node_modules/@fortawesome/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/dist/fonts/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/node_modules/aos/dist/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/plugins/datatables/dataTables.bootstrap4.css') }}">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    {{-- <link href='http://sonnetdp.github.io/nikosh/css/nikosh.css' rel='stylesheet' type='text/css'> --}}

    <link rel="stylesheet" href="{{ asset('public/frontend/dist/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/dist/css/custom.css') }}">
    <script src="{{ asset('public/frontend/node_modules/jquery/dist/jquery.min.js') }}"></script>



    <style type="text/css">
        .bangla-nikosh {
            font-family: 'Nikosh', sans-serif;
        }
       
        .navigation {
            background: hsla(198, 100%, 50%, 0.70);
            padding: 10px 0;
        }
        .title-text{
            padding: 15px;
            color: #fff;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff !important;
            text-shadow: 2px 2px 5px rgb(0 0 0 / 50%); 
            border: none;
        }
        .navbar-dark .navbar-nav .nav-link:focus, 
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #ffffff !important;
            border-bottom: 3px solid #ffffff;
            /*padding: 26px 5px;*/
        }
        .navbar-dark .navbar-brand {
            color: #fff;
            font-weight: 700;
            font-size: 22px;
            padding: 15px 0px;
        }

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

        .back-to-top:hover {
            opacity: 0.7;
        }
    </style>

    @yield('my_style')


</head>

<body>

    <a id="btopbutton"></a>

    @include('frontend.layouts.library_header')

    @yield('content')

    @include('frontend.layouts.footer')

    <a href="#" class="back-to-top"></a>

    <!-- ==== Jquery Link ==== -->

    <script src="{{ asset('public/frontend/node_modules/popper.js/dist/popper.js') }}"></script>
    <script src="{{ asset('public/frontend/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    {{-- <script src="{{ asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <script src="{{ asset('public/backend/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/datatables/dataTables.bootstrap4.js') }}"></script>

    <script src="{{ asset('public/frontend/node_modules/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('public/frontend/dist/js/myjs.js') }}"></script>





    @yield('add_script_ref')

    <script>
        AOS.init();
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
            if ($(this).scrollTop() > showAfter) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });



        //Click event to scroll to top
        $('.back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    </script>
    <script>
        $('#dataTable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": true,
        });
    </script>

    @yield('java_script')

</body>

</html>
