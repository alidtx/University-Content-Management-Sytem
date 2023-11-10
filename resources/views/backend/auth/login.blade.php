<html>
<head>
    <title>Login || COU</title>
    <link rel="icon" href="{{asset('backend/images/logo2.png')}}" type="image/x-icon" sizes="16x16"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('public/css/login.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/sweetalert2/sweetalert2.min.css')}}">
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/js/notify.js') }}"></script>
    <script type="text/javascript" src="{{asset('frontend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    @if (session()->has('success'))
    <script type="text/javascript">
        $(function () {
            $.notify("{{session()->get("success")}}", {globalPosition: 'top right',className: 'success'});
        });
    </script>
    @endif

    @if (session()->has('error'))
    <script type="text/javascript">
        $(function () {
            $.notify("{{session()->get("error")}}", {globalPosition: 'top right',className: 'error'});
        });
    </script>
    @endif

    @if (session()->has('warning'))
    <script type="text/javascript">
        $(function () {
            $.notify("{{session()->get("warning")}}", {globalPosition: 'top right',className: 'warn'});
        });
    </script>
    @endif
    @if (session()->has('swal-success'))
    <script type="text/javascript">
        $(function () {
            Swal.fire({
                position: 'center',
                type: 'success',
                title: '{{session()->get("swal-success")}}',
            });
        });
    </script>
    @endif

    <style>
        body {
            /* background-color: #dddddd; */
            /* background-image: url(http://www.brac.net/program/wp-content/uploads/2019/11/sdp-banner-.jpg); */

                background-image: url(public/login_bg.jpeg)!important;
                background-repeat: no-repeat!important;
                background-size: 100% 100%!important;
                overflow: hidden;

        }
    </style>
</head>

<body>
    <div class="container" style="background-color: rgba(0, 0, 0, 0.438); height: 100%; width: 100%">
        <div class="card card-container">
            <img style="height: 120px; width: 120px" id="profile-img" class="profile-img-card" src="{{url('public/upload/logo.png')}}"/>
            <p id="profile-name" class="profile-name-card" style="text-shadow: 0 1px 48px rgb(255 255 255 / 20%); font-size: 24px;">Comilla University</p>
            <br>
            <form class="form-signin" action="{{route('login')}}" method="post">
                {{csrf_field()}}
                <div class="form-group {{$errors->has('email') ? 'has-error' : '' }}">
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Email Address" required autofocus>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group {{$errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Password" required name="password">
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form>
            <div class="text-center"><a href="{{url('/')}}"  style="color: #080808;"> Back to home page </a></div>
            <div class="form-group row mb-0 text-center">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{route('reset.password')}}" style="cursor: pointer; color:#080808;">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
            <!-- /form -->
        <!-- <a href="#" class="forgot-password">
            Forgot the password?
        </a> -->
    </div><!-- /card-container -->
</div><!-- /container -->
</body>
</html>
