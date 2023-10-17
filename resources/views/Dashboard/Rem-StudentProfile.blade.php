@extends('Layouts.app')


@section('content')
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
                                    <span class="notify-title">You have 3 new notifications <a href="#">view
                                            all</a></span>
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
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="d_none_sm">Jessica <i class="ti-angle-down"></i></span>
                                        <img src="images/user.jpg" alt="" class="img-fluid">
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account
                                            Settings</a>
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
                <div class="profile_page">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cover-profile">
                                <div class="profile-bg-img">
                                    <div class="card-block user-info">
                                        <div class="col-md-12">
                                            <div class="media-left">
                                                <a href="#" class="profile-image">


                                                    {{--                                                 <img class="user-img img-radius" src="asset('storage/images/'.$article->image)'" >
 --}} <img
                                                        src="{{ url('storage/uploads/' . $rem->adminStep1->photo) }}"
                                                        alt="" title="" />


                                                </a>
                                            </div>
                                            <div class="media-body row">
                                                <div class="col-lg-12">
                                                    <div class="user-title">
                                                        <h2>Full Name: {{ $rem->adminStep1->firstName }}
                                                            {{ $rem->adminStep1->lastName }}</h2>
                                                        <span class="text-white">Stream: {{ $rem->remedial->stream }}
                                                        </span>

                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="pull-right cover-btn">
                                                        <button type="button" class="btn btn-light m-r-10 m-b-5"><i
                                                                class="icofont icofont-plus"></i> Deactivate
                                                            Account</button>
                                                        <button type="button" class="btn btn-light"><i
                                                                class="icofont icofont-ui-messaging"></i> Message
                                                            Student</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-header card mb-4">
                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab"
                                            aria-expanded="true">Student Data</a>
                                        <div class="slide"></div>
                                    </li>
                                    {{-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#user_info" role="tab" aria-expanded="false">User's Gallery</a>
                                    <div class="slide"></div>
                                </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Payment
                                            History</a>
                                        <div class="slide"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="true">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="card_title mb-0">Biodata</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="view-info">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xl-6">
                                                            <div class="table-responsive">
                                                                <table class="table m-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Full Name</th>
                                                                            <td>{{ $rem->adminStep1->firstName }}
                                                                                {{ $rem->adminStep1->lastName }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Gender</th>
                                                                            <td>{{ $rem->adminStep1->sex }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Birth Date</th>
                                                                            <td>{{ $rem->adminStep1->dob }}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th scope="row">Admission Number</th>
                                                                            <td>{{ $rem->remedial->admissionNumber }}</td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-xl-6">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Email</th>
                                                                            <td><a href="#!">{{ $rem->email }}</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Mobile Number</th>
                                                                            <td>+234{{ $rem->adminstep1->phone }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Application Date/Time</th>
                                                                            {{-- <td>{{$rem->course ?? "No Course added yet"}}</td> --}}
                                                                            <td>{{ $rem->adminstep1->date_created }}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th scope="row">Admission Status</th>
                                                                            @if ($rem->remedial->emailstatus == 'Admitted')
                                                                                <td><span
                                                                                        class="badge badge-success">Admitted</span>
                                                                                </td>
                                                                            @elseif($rem->remedial->emailstatus == 'notAdmitted')
                                                                                <td><span class="badge badge-danger">Not
                                                                                        Admitted</span></td>
                                                                            @else
                                                                                <td><span class="badge badge-info">In
                                                                                        Process</span></td>
                                                                            @endif
                                                                        </tr>
                                                                        {{-- <tr>
                                                                    <th scope="row">Skype</th>
                                                                    <td>test.skype</td>
                                                                </tr> --}}
                                                                        {{-- <tr>
                                                                    <th scope="row">Website</th>
                                                                    <td><a href="#!">www.example.com</a></td>
                                                                </tr> --}}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-header-text mb-0">Result Submmited</h5>
                                                </div>
                                                <div class="card-block user-desc">
                                                    <div class="view-desc">
                                                        <p>...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="user_info" role="tabpanel" aria-expanded="false">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text mb-0">User Gallery</h5>
                                        </div>
                                        <div class="card-block">
                                            <div id="mt_portfolio" class="gallery-section gallery-page">
                                                <div class="container">
                                                    <div class="row portfolio_row grid-masonry">
                                                        <div class="isotopeContainer">
                                                            <!-- Portfolio Item -->
                                                            <div
                                                                class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                                                <figure class="effect-chico">
                                                                    <img src="images/portfolio/bw1.jpg" alt="Portfolio" />
                                                                    <figcaption>
                                                                        <h3>
                                                                            <a href="javascript:void(0);"
                                                                                class="view_proj">Portfolio Item</a>
                                                                            <span>
                                                                                <a href="images/portfolio/bw1.jpg"
                                                                                    class="fancybox open_img"><i
                                                                                        class="ion-ios-plus-empty"></i></a>
                                                                            </span>
                                                                        </h3>

                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <!-- Portfolio Item -->
                                                            <div
                                                                class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                                                <figure class="effect-chico">
                                                                    <img src="images/portfolio/bw3.jpg" alt="Portfolio" />
                                                                    <figcaption>
                                                                        <h3>
                                                                            <a href="javascript:void(0);"
                                                                                class="view_proj">Portfolio Item</a>
                                                                            <span>
                                                                                <a href="images/portfolio/bw3.jpg"
                                                                                    class="fancybox open_img"><i
                                                                                        class="ion-ios-plus-empty"></i></a>
                                                                            </span>
                                                                        </h3>

                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <!-- Portfolio Item -->
                                                            <div
                                                                class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                                                <figure class="effect-chico">
                                                                    <img src="images/portfolio/bw4.jpg" alt="Portfolio" />
                                                                    <figcaption>
                                                                        <h3>
                                                                            <a href="javascript:void(0);"
                                                                                class="view_proj">Portfolio Item</a>
                                                                            <span>
                                                                                <a href="images/portfolio/bw4.jpg"
                                                                                    class="fancybox open_img"><i
                                                                                        class="ion-ios-plus-empty"></i></a>
                                                                            </span>
                                                                        </h3>

                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <!-- Portfolio Item -->
                                                            <div
                                                                class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                                                <figure class="effect-chico">
                                                                    <img src="images/portfolio/bw5.jpg" alt="Portfolio" />
                                                                    <figcaption>
                                                                        <h3>
                                                                            <a href="javascript:void(0);"
                                                                                class="view_proj">Portfolio Item</a>
                                                                            <span>
                                                                                <a href="images/portfolio/bw5.jpg"
                                                                                    class="fancybox open_img"><i
                                                                                        class="ion-ios-plus-empty"></i></a>
                                                                            </span>
                                                                        </h3>

                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <!-- Portfolio Item -->
                                                            <div
                                                                class="portfolio_grid grid no-padding isotopeSelector webdevelopment grid-item">
                                                                <figure class="effect-chico">
                                                                    <img src="images/portfolio/bw7.jpg" alt="Portfolio" />
                                                                    <figcaption>
                                                                        <h3>
                                                                            <a href="javascript:void(0);"
                                                                                class="view_proj">Portfolio Item</a>
                                                                            <span>
                                                                                <a href="images/portfolio/bw7.jpg"
                                                                                    class="fancybox open_img"><i
                                                                                        class="ion-ios-plus-empty"></i></a>
                                                                            </span>
                                                                        </h3>

                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <!-- Portfolio Item -->
                                                            <div
                                                                class="portfolio_grid grid no-padding isotopeSelector webdevelopment grid-item">
                                                                <figure class="effect-chico">
                                                                    <img src="images/portfolio/bw8.jpg" alt="Portfolio" />
                                                                    <figcaption>
                                                                        <h3>
                                                                            <a href="javascript:void(0);"
                                                                                class="view_proj">Portfolio Item</a>
                                                                            <span>
                                                                                <a href="images/portfolio/bw8.jpg"
                                                                                    class="fancybox open_img"><i
                                                                                        class="ion-ios-plus-empty"></i></a>
                                                                            </span>
                                                                        </h3>

                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <!-- Portfolio Item -->
                                                            <div
                                                                class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                                                <figure class="effect-chico">
                                                                    <img src="images/portfolio/bw9.jpg" alt="Portfolio" />
                                                                    <figcaption>
                                                                        <h3>
                                                                            <a href="javascript:void(0);"
                                                                                class="view_proj">Portfolio Item</a>
                                                                            <span>
                                                                                <a href="images/portfolio/bw9.jpg"
                                                                                    class="fancybox open_img"><i
                                                                                        class="ion-ios-plus-empty"></i></a>
                                                                            </span>
                                                                        </h3>

                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <!-- Portfolio Item -->
                                                            <div
                                                                class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                                                <figure class="effect-chico">
                                                                    <img src="images/portfolio/bw10.jpg"
                                                                        alt="Portfolio" />
                                                                    <figcaption>
                                                                        <h3>
                                                                            <a href="javascript:void(0);"
                                                                                class="view_proj">Portfolio Item</a>
                                                                            <span>
                                                                                <a href="images/portfolio/bw10.jpg"
                                                                                    class="fancybox open_img"><i
                                                                                        class="ion-ios-plus-empty"></i></a>
                                                                            </span>
                                                                        </h3>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <!-- Portfolio Item -->
                                                            <div
                                                                class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                                                <figure class="effect-chico">
                                                                    <img src="images/portfolio/bw10.jpg"
                                                                        alt="Portfolio" />
                                                                    <figcaption>
                                                                        <h3>
                                                                            <a href="javascript:void(0);"
                                                                                class="view_proj">Portfolio Item</a>
                                                                            <span>
                                                                                <a href="images/portfolio/bw10.jpg"
                                                                                    class="fancybox open_img"><i
                                                                                        class="ion-ios-plus-empty"></i></a>
                                                                            </span>
                                                                        </h3>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="contacts" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="card">
                                                <div class="card-header contact-user">
                                                    <h5 class="mb-0">John Doe</h5>
                                                </div>
                                                <div class="card-block">
                                                    <ul class="list-group list-contacts">
                                                        <li class="list-group-item active"><a href="#">All
                                                                Activities</a></li>
                                                        <li class="list-group-item"><a href="#">Recent
                                                                Activities</a></li>
                                                        <li class="list-group-item"><a href="#">Favourites</a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-block groups-contact">
                                                    <h4 class="card_title">Button Groups</h4>
                                                    <ul class="list-group">
                                                        <li class="list-group-item justify-content-between">
                                                            Project
                                                            <span class="badge badge-primary badge-pill">30</span>
                                                        </li>
                                                        <li class="list-group-item justify-content-between">
                                                            Notes
                                                            <span class="badge badge-success badge-pill">20</span>
                                                        </li>
                                                        <li class="list-group-item justify-content-between">
                                                            Activity
                                                            <span class="badge badge-info badge-pill">100</span>
                                                        </li>
                                                        <li class="list-group-item justify-content-between">
                                                            Schedule
                                                            <span class="badge badge-danger badge-pill">50</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="table-responsive datatable-primary data_table_main table-responsive dt-responsive">
                                                        <table id="dataTable2"
                                                            class="table-striped text-center dataTable no-footer dtr-inline">
                                                            <thead class="text-capitalize">
                                                                <tr>
                                                                    <th>S/N</th>
                                                                    <th>Student Name</th>
                                                                    <th>Paid for</th>
                                                                    <th>Payment Amount</th>
                                                                    <th>Payment Date</th>
                                                                    <th>Admission No.</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Airi Satou</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>33</td>
                                                                    <td>2008/11/28</td>
                                                                    <td>$162,700</td>
                                                                </tr>
                                                               
                                                              
                                                              
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        @include('Layouts.footer')
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true" data-reactid="781">
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                </path>
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                </path>
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
