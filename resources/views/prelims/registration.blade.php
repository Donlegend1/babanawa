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
				<title>Register | Quinte Bootstrap 4 Admin Template</title>

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
</head>

<body>
				@livewireStyles
				<div class="container-fluid p-0">
								<div class="row no-gutters">
												<!-- Image Section -->
												<div class="col-lg-12 bg-primary" style="height: 200px">

																<div class="login-left">
																				<h3 class="text-white">
																								<img alt="Logo" src="images/logo.png" class="h-5px" style="height: 70px" />

																				</h3>

																				<h5 class="text-white">Admission Portal</h5>

																				<h6 class="mt-5 text-white">Pls complete the form below to apply</h6>
																</div>
												</div>

												<!-- Login Form Section -->
												<div class="col-lg-12">

																@if (session('message'))
																				<div class="alert alert-success">
																								{{ session('message') }}
																				</div>
																@endif
															
																<livewire:basic-informations />

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
