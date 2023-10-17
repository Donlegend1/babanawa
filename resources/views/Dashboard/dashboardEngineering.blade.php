
@extends('Layouts.app')


@section('content')

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--=========================*
         Page Container
*===========================-->
<div class="page-container">

    <!--=========================*
             Side Bar Menu
    *===========================-->
 
    @include('Layouts.sidebar')

    <!--=========================*
           End Side Bar Menu
    *===========================-->

    <!--==================================*
               Main Content Section
    *====================================-->
    <div class="main-content page-content">

        <!--==================================*
                   Header Section
        *====================================-->
        <div class="header-area">
            <div class="row align-items-center">
                <div class="mobile-logo d_none_lg">
                    <a href="index.html"><img src="images/mobile-logo.png" alt="logo"></a>
                </div>

                <!--==================================*
                         Navigation and Search
                *====================================-->
                <div class="col-md-6 d_none_sm d-flex align-items-center">
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="search-box pull-left">
                        <form action="#">
                            <i class="ti-search"></i>
                            <input type="text" name="search" placeholder="Search..." required>
                        </form>
                    </div>
                </div>
                <!--==================================*
                         End Navigation and Search
                *====================================-->

                <!--==================================*
                         Notification Section
                *====================================-->
                <div class="col-md-6 col-sm-12">
                    <ul class="notification-area pull-right">
                        <li>
                            <span class="nav-btn pull-left d_none_lg">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </li>
                        <li id="full-view" class="d_none_sm"><i class="feather ft-maximize"></i></li>
                        <li id="full-view-exit" class="d_none_sm"><i class="feather ft-minimize"></i></li>
                        <li class="dropdown">
                            <i class="ti-bell dropdown-toggle" data-toggle="dropdown"><span></span></i>
                            <div class="dropdown-menu bell-notify-box notify-box">
                                <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                <div class="nofity-list">
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb"><i class="ti-map-alt bg_blue"></i></div>
                                        <div class="notify-text">
                                            <h3>You added your Location</h3>
                                            <span>Just Now</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb"><i class="ti-bolt-alt bg_warning"></i></div>
                                        <div class="notify-text">
                                            <h3>Your Subscription Expired</h3>
                                            <span>30 Seconds ago</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb"><i class="ti-heart bg_danger"></i></div>
                                        <div class="notify-text">
                                            <h3>Some special like you</h3>
                                            <span>Just Now</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb"><i class="ti-comments bg_info"></i></div>
                                        <div class="notify-text">
                                            <h3>New Commetns On Post</h3>
                                            <span>30 Seconds ago</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb"><i class="ti-settings bg_secondary"></i></div>
                                        <div class="notify-text">
                                            <h3>You changed your Settings</h3>
                                            <span>Just Now</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb"><i class="ti-image bg_success"></i></div>
                                        <div class="notify-text">
                                            <h3>Image Uploaded Successfully</h3>
                                            <span>Just Now</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span></span></i>
                            <div class="dropdown-menu notify-box nt-enveloper-box">
                                <span class="notify-title">You have 3 new Messages<a href="#">view all</a></span>
                                <div class="nofity-list">
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb">
                                            <img src="images/author/author-img1.jpg" alt="image">
                                        </div>
                                        <div class="notify-text">
                                            <h3>Jhon Doe</h3>
                                            <span class="msg">Hello are you there?</span>
                                            <span>3:15 PM</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb">
                                            <img src="images/author/author-img2.jpg" alt="image">
                                        </div>
                                        <div class="notify-text">
                                            <h3>David Boos</h3>
                                            <span class="msg">Waiting for your Response...</span>
                                            <span>3:15 PM</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb">
                                            <img src="images/user.jpg" alt="image">
                                        </div>
                                        <div class="notify-text">
                                            <h3>Jason Roy</h3>
                                            <span class="msg">Hi there, Hope you are well</span>
                                            <span>3:15 PM</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb">
                                            <img src="images/author/author-img4.jpg" alt="image">
                                        </div>
                                        <div class="notify-text">
                                            <h3>Malika Roy</h3>
                                            <span class="msg">Your Product Dispatched form Warehouse...</span>
                                            <span>3:15 PM</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb">
                                            <img src="images/author/author-img2.jpg" alt="image">
                                        </div>
                                        <div class="notify-text">
                                            <h3>Raven Jhon</h3>
                                            <span class="msg">Please recieve your parcel from our store</span>
                                            <span>3:15 PM</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb">
                                            <img src="images/author/author-img1.jpg" alt="image">
                                        </div>
                                        <div class="notify-text">
                                            <h3>Angela Yo</h3>
                                            <span class="msg">You recieved a new message...</span>
                                            <span>3:15 PM</span>
                                        </div>
                                    </a>
                                    <a href="#" class="notify-item">
                                        <div class="notify-thumb">
                                            <img src="images/user.jpg" alt="image">
                                        </div>
                                        <div class="notify-text">
                                            <h3>Rebecca Jhon</h3>
                                            <span class="msg">Hey I am waiting for you...</span>
                                            <span>3:15 PM</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="settings-btn d_none_sm">
                            <i class="ti-more"></i>
                        </li>
                        <li class="user-dropdown">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d_none_sm">Jessica <i class="ti-angle-down"></i></span>
                                    <img src="images/user.jpg" alt="" class="img-fluid">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                                    <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Settings</a>
                                    <span role="separator" class="divider"></span>
                                    <a class="dropdown-item" href="#"><i class="ti-power-off"></i>Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--==================================*
                         End Notification Section
                *====================================-->

            </div>
        </div>
        <!--==================================*
                   End Header Section
        *====================================-->

        <!--==================================*
                   Main Section
        *====================================-->
        <div class="main-content-inner">
            <div class="col-md-12 rt_subheader">
                <div class="rt_subheader_main">
                    <h3 class="card_title">School of Engineering</h3>
                    
                </div>
                <div class="subheader_btns">
                    <a href="#" class="btn btn-sm btn-primary btn-inverse-primary"><i class="feather ft-edit mr-0"></i></a>
                    <a href="#" class="btn btn-sm btn-primary btn-inverse-primary"><i class="feather ft-watch mr-0"></i></a>
                    <a href="#" class="btn btn-sm btn-primary btn-inverse-primary">
                        <span>Today:</span>&nbsp;
                        <span>Jan 21</span>
                        <i class="feather ft-calendar ml-2"></i>
                    </a>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-lg-4 col-md-6 stretched_card pl-mob-3 mb-mob-3">
                    <div class="card bg-primary analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-trending-up text-primary"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Remedial Application</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">600</h3>
                                        <small class="stats_icon">3% <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 stretched_card mb-mob-3">
                    <div class="card bg-success analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-shopping-bag text-success"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Remedial School Fees</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">2300</h3>
                                        <small class="stats_icon">5% <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 stretched_card mb-xs-mob-3">
                    <div class="card bg-danger analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-users text-danger"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Remedial Contributions</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">2765</h3>
                                        <small class="stats_icon">2% <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>



            







            <div class="row">
                <div class="col-lg-8 stretched_card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">School of Remedials</h4>
                            <div class="d-flex mt-2 total_sales_sec mt-3">
                                <div class="col-md-5">
                                    <p class="h1 lh-10 m-0 fw-300"><span>43,759</span>
                                    </p><small class="small text-success fs-11">Total Sales</small>
                                </div>
                                <div class="col-md-7 row no-gutters mt-2">
                                    <div class="col-sm-6">
                                        <div class="sales-info"><span class="sales-info-box bg-success mr-2"></span>
                                            <div class="sales-info-body">
                                                <h6>Remedial School Fees</h6><small><span class="text-success"><i class="feather ft-chevron-up"></i> 17%</span> this month</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="sales-info"><span class="sales-info-box bg-primary mr-2"></span>
                                            <div class="sales-info-body">
                                                <h6>Total Products</h6><small><span class="text-danger"><i class="feather ft-chevron-down"></i> 23%</span> this month</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="morris_line"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 stretched_card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Vist by Country</h4>
                            <div id="country_map"></div>
                            <div class="country_vists">
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            San Francisco
                                        </div>
                                        <div class="country_vists_value">
                                            65%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            Germany
                                        </div>
                                        <div class="country_vists_value">
                                            40%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            France
                                        </div>
                                        <div class="country_vists_value">
                                            60%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            Turkey
                                        </div>
                                        <div class="country_vists_value">
                                            75%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            Nepal
                                        </div>
                                        <div class="country_vists_value">
                                            50%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-4 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="ion-ios-more-outline"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                            <h4 class="card_title mb-3">Recent Activities</h4>
                            <div class="table-responsive">
                                <table class="table table-centered table-hover mb-0">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="media recent_activity mt-2">
                                                <img class="mr-3 rounded-circle" src="images/team/member1.jpg"
                                                     width="50" alt="Activity Image">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Jhon Doe
                                                        <small class="font-weight-normal d-block mt-1">18 Jan 2019 11:28
                                                            pm
                                                        </small>
                                                    </h6>
                                                    <span class="mt-2 d-block">Many desktop publishing</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action text-center">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                   data-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion-ios-more-outline"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media recent_activity mt-2">
                                                <img class="mr-3 rounded-circle" src="images/team/member2.jpg"
                                                     width="50" alt="Activity Image">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">David Ron
                                                        <small class="font-weight-normal d-block mt-1">18 Jan 2019 11:28
                                                            pm
                                                        </small>
                                                    </h6>
                                                    <span class="mt-2 d-block">Many desktop publishing</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action text-center">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                   data-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion-ios-more-outline"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media recent_activity mt-2">
                                                <img class="mr-3 rounded-circle" src="images/team/member3.jpg"
                                                     width="50" alt="Activity Image">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Mike Hussey
                                                        <small class="font-weight-normal d-block mt-1">18 Jan 2019 11:28
                                                            pm
                                                        </small>
                                                    </h6>
                                                    <span class="mt-2 d-block">Many desktop publishing</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action text-center">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                   data-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion-ios-more-outline"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->

                        </div> <!-- end card body-->
                    </div>
                </div>
                <div class="col-lg-4 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <div class="card_title">AVERAGE SALE SIZE</div>
                            <div class="avg_sale_card">
                                <span class="badge badge-pill mb-2 badge-danger"><span class="feather ft-chevron-down mr-2"></span>23.36%</span>
                                <h1 class="mt-2">$956.78</h1>
                                <h4 class="mb-2">PER SALE</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque debitis dolor.</p>
                            </div>
                            <canvas id="avg-sale" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Traffic By Browsers</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid assumenda aut.</p>
                            <div class="traffic_progress">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="mb-1 title">Google Chrome</span>
                                    </div>
                                    <div class="d-flex flex-column text-right">
                                        <span class="d-flex mr-1">
                                            <span class="badge badge-pill mb-2 badge-success">80% <i class="feather ft-arrow-up text-white"></i></span>

                                        </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="traffic_progress mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="mb-1 title">Firefox</span>
                                    </div>
                                    <div class="d-flex flex-column text-right">
                                        <span class="d-flex mr-1">
                                            <span class="badge badge-pill mb-2 badge-danger">60% <i class="feather ft-arrow-down text-white"></i></span>

                                        </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="traffic_progress mt-4 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="mb-1 title">Microsoft Edge</span>
                                    </div>
                                    <div class="d-flex flex-column text-right">
                                        <span class="d-flex mr-1">
                                            <span class="badge badge-pill mb-2 badge-success">70% <i class="feather ft-arrow-up text-white"></i></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="traffic_progress mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="mb-1 title">Safari</span>
                                    </div>
                                    <div class="d-flex flex-column text-right">
                                        <span class="d-flex mr-1">
                                            <span class="badge badge-pill mb-2 badge-danger">30% <i class="feather ft-arrow-down text-white"></i></span>

                                        </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Progress Table start -->
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Orders Overview</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center">
                                        <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">status</th>
                                            <th scope="col">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">6583</th>
                                            <td>Mark Spence</td>
                                            <td>Macbook Pro</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>672.56$</td>
                                            <td><span class="badge badge-primary">Progress</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4652</th>
                                            <td>David Rebon</td>
                                            <td>iPhone X</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>672.56$</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7292</th>
                                            <td>Jhon Doe</td>
                                            <td>Samsung</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>672.56$</td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7826</th>
                                            <td>Jessica Roy</td>
                                            <td>Exercise Machine</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>672.56$</td>
                                            <td><span class="badge badge-danger">Stopped</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2638</th>
                                            <td>Malika Jhon</td>
                                            <td>Machine</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>483.56$</td>
                                            <td><span class="badge badge-primary">Progress</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9374</th>
                                            <td>David Jess</td>
                                            <td>Laptop</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>473.56$</td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Progress Table end -->
            </div>
        </div>
        <!--==================================*
                   End Main Section
        *====================================-->
    </div>
    <!--=================================*
           End Main Content Section
    *===================================-->

    <!--=================================*
                  Footer Section
    *===================================-->
    <footer>
        <div class="footer-area">
            <p>&copy; Copyright 2019. All right reserved. Template by Raventhemez.</p>
        </div>
    </footer>
    <!--=================================*
                End Footer Section
    *===================================-->

</div>
<!--=========================*
        End Page Container
*===========================-->

<!--=========================*
      Offset Sidebar Menu
*===========================-->
<div class="offset-area">
    <div class="offset-close"><i class="ti-close"></i></div>
    <ul class="nav offset-menu-tab">
        <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
        <li><a data-toggle="tab" href="#settings">Settings</a></li>
    </ul>
    <div class="offset-content tab-content">
        <div id="activity" class="tab-pane fade in show active">
            <div class="recent-activity">
                <div class="timeline-task">
                    <div class="icon bg_secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="781">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <div class="timeline_title">
                        <h4>You got 1 New Message</h4>
                        <span class="time"><i class="ti-time"></i>09:35</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                    </p>
                </div>
                <div class="timeline-task">
                    <div class="icon bg_success">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <div class="timeline_title">
                        <h4>Your Verification Successful</h4>
                        <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur.
                    </p>
                </div>
                <div class="timeline-task">
                    <div class="icon bg_danger">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12" y2="17"></line>
                        </svg>
                    </div>
                    <div class="timeline_title">
                        <h4>Something Went Wrong</h4>
                        <span class="time"><i class="ti-time"></i>09:20 Am</span>
                    </div>
                </div>
                <div class="timeline-task">
                    <div class="icon bg_warning">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="timeline_title">
                        <h4>Member waiting for your Response</h4>
                        <span class="time"><i class="ti-time"></i>09:35</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                    </p>
                </div>
                <div class="timeline-task">
                    <div class="icon bg_info">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                    </div>
                    <div class="timeline_title">
                        <h4>You Deleted Jhon Doe</h4>
                        <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                    </p>
                </div>
            </div>
        </div>
        <div id="settings" class="tab-pane fade">
            <div class="offset-settings">
                <h4>General Settings</h4>
                <div class="settings-list">
                    <div class="settings_sec">
                        <div class="setting_list_title">
                            <h5>Notifications</h5>
                            <div class="ui_switch">
                                <input type="checkbox" id="switch1" />
                                <label for="switch1">Toggle</label>
                            </div>
                        </div>
                        <p>Keep it 'On' When you want to get all the notification.</p>
                    </div>
                    <div class="settings_sec">
                        <div class="setting_list_title">
                            <h5>Show recent activity</h5>
                            <div class="ui_switch">
                                <input type="checkbox" id="switch2" />
                                <label for="switch2">Toggle</label>
                            </div>
                        </div>
                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </div>
                    <div class="settings_sec">
                        <div class="setting_list_title">
                            <h5>Show your emails</h5>
                            <div class="ui_switch">
                                <input type="checkbox" id="switch3" />
                                <label for="switch3">Toggle</label>
                            </div>
                        </div>
                        <p>Show email so that easily find you.</p>
                    </div>
                    <div class="settings_sec">
                        <div class="setting_list_title">
                            <h5>Show Task statistics</h5>
                            <div class="ui_switch">
                                <input type="checkbox" id="switch4" />
                                <label for="switch4">Toggle</label>
                            </div>
                        </div>
                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================================*
         End Offset Sidebar Menu
*==================================-->

@endsection