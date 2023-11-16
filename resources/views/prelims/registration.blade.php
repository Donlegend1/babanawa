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
	<script src="https://js.paystack.co/v1/inline.js"></script>

    <!--=========================*
              Page Title
    *===========================-->
    <title>Student Registeration</title>

    <!--=========================*
                Favicon
    *===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">

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
    <link href="/css/ionicons.min.css" rel="stylesheet" />

    <!--=========================*
              EtLine Icons
    *===========================-->
    <link href="/css/et-line.css" rel="stylesheet" />

    <!--=========================*
              Feather Icons
    *===========================-->
    <link href="/css/feather.css" rel="stylesheet" />

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

    <style>
        .circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 2px solid #007bff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .circle.active {
            background-color: #0a0b0b;
            color: #ffffff;
        }

        .color-primary {
            color: #007bff;
        }

        .step-number {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #6c757d;
        }
    </style>
</head>

<body>
    @livewireStyles
    <div class="container-fluid p-0">
        <div class="row no-gutters">
{{--             <button type="submit" class="btn btn-primary" onclick="payWithPaystack()"> Pay </button>
 --}}
            <!-- Image Section -->
            <div class="col-lg-12 bg-black" style="height: 230px">

                <div class="login-left ">
                    <h3 class="text-dark  ">
                        <img alt="Logo" src="../../images/logo3.png" class="h-5px" style="height: 90px" />

                    </h3>

                    <h1 class="text-dark fonta">Admission Portal</h1>
                    <h3 class="text-dark fonta">{{ $type }}//{{ $stream }}</h3>

                    <h6 class=" text-dark ">Please complete the form below to apply</h6>
                </div>
            </div>

            <!-- Login Form Section -->
            <div class="col-lg-12">

                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                   @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <livewire:basic-informations :stream="$stream" :type="$type"/>

            </div>
        </div>
    </div>
    </div>

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

    @livewireScripts
    @if (session('reload'))
        <script>
            setTimeout(function() {
                location.reload();
            }, 10000); // 10 seconds
        </script>
    @endif




</body>




</html>
