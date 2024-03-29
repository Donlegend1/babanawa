<!doctype html>
<html lang="zxx">
<head>
    <!--=========================*
                Met Data
    *===========================-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Quinte Bootstrap 4 Admin Template">

    <!--=========================*
              Page Title
    *===========================-->
    <title>Lock Screen | Quinte Bootstrap 4 Admin Template</title>

    <!--=========================*
                Favicon
    *===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!--=========================*
            Bootstrap Css
    *===========================-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!--=========================*
              Custom CSS
    *===========================-->
    <link rel="stylesheet" href="/css/style.css">

    <!--=========================*
               Owl CSS
    *===========================-->
    <link href="/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">

    <!--=========================*
            Font Awesome
    *===========================-->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!--=========================*
             Themify Icons
    *===========================-->
    <link rel="stylesheet" href="/css/themify-icons.css">

    <!--=========================*
               Ionicons
    *===========================-->
    <link href="/css/ionicons.min.css" rel="stylesheet"/>

    <!--=========================*
              EtLine Icons
    *===========================-->
    <link href="/css/et-line.css" rel="stylesheet"/>

    <!--=========================*
              Feather Icons
    *===========================-->
    <link href="/css/feather.css" rel="stylesheet"/>

    <!--=========================*
              Modernizer
    *===========================-->
    <script src="/js/modernizr-2.8.3.min.js"></script>

    <!--=========================*
               Metis Menu
    *===========================-->
    <link rel="stylesheet" href="/css/metisMenu.css">

    <!--=========================*
               Slick Menu
    *===========================-->
    <link rel="stylesheet" href="/css/slicknav.min.css">

    <!--=========================*
            Google Fonts
    *===========================-->

    <!-- Montserrat USE: font-family: 'Montserrat', sans-serif;-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- login area start -->
<div class="lock-screen" style="background: url('/images/lock-bg.jpg');">
    <div class="login-form credentials-form">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="lock-form-head">
                <h4>{{ __('Reset Password') }}</h4>
                
            </div>
            <div class="login-form-body">
                <div class="form-gp">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocusid="exampleInputPassword1">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="submit-btn-area">
                    <button id="form_submit" type="submit" class="btn btn-primary">        
                              {{ __('Send Password Reset Link') }}
                        <i class="ti-arrow-right"></i>
                </button>
                </div>
            </div>
        </form>
    </div><!--login-form-->
</div>
<!-- login area end -->


<!--=========================*
            Scripts
*===========================-->

<!-- Jquery Js -->
<script src="/js/jquery.min.js"></script>
<!-- bootstrap 4 js -->
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- Owl Carousel Js -->
<script src="/js/owl.carousel.min.js"></script>
<!-- Metis Menu Js -->
<script src="/js/metisMenu.min.js"></script>
<!-- SlimScroll Js -->
<script src="/js/jquery.slimscroll.min.js"></script>
<!-- Slick Nav -->
<script src="/js/jquery.slicknav.min.js"></script>
<!-- Fancy Box Js -->
<script src="/js/jquery.fancybox.pack.js"></script>
<!-- Main Js -->
<script src="/js/main.js"></script>
</body>
</html>