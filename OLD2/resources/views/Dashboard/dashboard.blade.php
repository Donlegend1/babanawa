
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
                    <a href="/admindashboard"><img src="images/mobile-logo.png" alt="logo"></a>
                </div>

                <!--==================================*
                         Navigation and Search
                *====================================-->
               @livewire('search')
                <!--==================================*
                         End Navigation and Search
                *====================================-->

                <!--==================================*
                         Notification Section
                *====================================-->
              @include('Layouts/notification')
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
                    <h2 class="card_title">School of Remedial Studies</h2><br>
                  

                    
                </div>
                <div class="subheader_btns">
                    <a href="#" class="btn btn-sm btn-primary btn-inverse-primary"><i class="feather ft-edit mr-0"></i></a>
                    <a href="#" class="btn btn-sm btn-primary btn-inverse-primary"><i class="feather ft-watch mr-0"></i></a>
                    <a href="#" class="btn btn-sm btn-primary btn-inverse-primary">
                        
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
                                    <p class="mt-xl-0 text-xl-left mb-2">Application Fees</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">₦{{ number_format($totalRem, 0) }}</h3>
                                        <small class="stats_icon">3% <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 stretched_card mb-mob-3">
                    <div class="card bg-primary analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-shopping-bag text-primary"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">School Fees</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">0</h3>
                                        <small class="stats_icon">5% <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 stretched_card mb-xs-mob-3">
                    <div class="card bg-primary analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-users text-primary"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Contributions</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">0</h3>
                                        <small class="stats_icon">2% <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>



            <div class="row mt-3">
                
                    
                  


                <div class="col-lg-4 col-md-6 stretched_card pl-mob-3 mb-mob-3">
                    <div class="card bg-warning analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-trending-up text-primary"></i>
                                </div>
                                <div class="text-dark">
                                    <p class="mt-xl-0 text-xl-left mb-2">Application Expenses</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-dark">0</h3>
                                        <small class="stats_icon">3% <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 stretched_card mb-mob-3">
                    <div class="card bg-warning analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-shopping-bag text-dark"></i>
                                </div>
                                <div class="text-dark">
                                    <p class="mt-xl-0 text-xl-left mb-2">School Fees Expenses</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-dark">0</h3>
                                        <small class="stats_icon">5% <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 stretched_card mb-xs-mob-3">
                    <div class="card bg-warning analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-users text-dark"></i>
                                </div>
                                <div class="text-dark">
                                    <p class="mt-xl-0 text-xl-left mb-2">Contribution Expense</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-dark">0</h3>
                                        <small class="stats_icon">2% <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>



            







            <div class="row">
                <div class="col-lg-12 stretched_card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Income & Expense Chart</h4>
                            <div class="d-flex mt-2 total_sales_sec mt-3">
                                <div class="col-md-5">
                                    <p class="h1 lh-10 m-0 fw-300"><span>₦{{ number_format($totalRem, 0) }}</span>
                                    </p><small class="small text-dark fs-11">General Income</small>
                                </div>
                                <div class="col-md-7 row no-gutters mt-2">
                                    <div class="col-sm-6">
                                        <div class="sales-info"><span class="sales-info-box bg-primary mr-2"></span>
                                            <div class="sales-info-body">
                                                <h6>Income</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="sales-info"><span class="sales-info-box bg-success mr-2"></span>
                                            <div class="sales-info-body">
                                                <h6>Expenses</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="morris_line"></div>
                        </div>
                    </div>
                </div>
              
            </div>

            
          
            <div class="row">
                <!-- Progress Table start -->
                <div class="col-6 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Income Table</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center">
                                        <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Date</th>
                                             <th scope="col">Code</th>
                                            <th scope="col">Description</th>
                                       
                                           
                                            <th scope="col">Amount</th>
                                            <th scope="col">status</th>
                                            <th scope="col">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allrem as $item)
                                                <tr>
                                                    <th scope="row">{{ $item->date }}</th>
                                                    <th scope="row">XGS56</th>
                                                    <td>{{ $item->firstname }} {{ $item->lastname }}</td>
                                                    
                                                  
                                                    <td>₦{{ number_format($item->amountPaid, 0) }}</td>

                                                    @if($item->emailstatus == 'Admitted')
                                                        
                                                    
                                                    <td><span class="badge badge-success">Admitted</span></td>

                                                    @elseif($item->emailstatus == 'notAdmitted')

                                                    <td><span class="badge badge-danger">Not Admitted</span></td>
                                                    @else 

                                                    <td><span class="badge badge-info">In Process</span></td>

                                                    @endif

                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            

                                                                {{-- <li class="mr-3">
                                                                    <button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button>
                                                                </li> --}}
                                                          
                                                            <a href="{{ route('student.profile', ['id' => $item->user_id]) }}">
                                                            <li><button type="button" class="btn btn-inverse-danger"><i class="ti-eye"></i></button></li>
                                                        </a>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Progress Table end -->



                 <!-- Progress Table start -->
                 <div class="col-6 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Expense Table</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center">
                                        <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Code</th>
                                            {{-- <th scope="col">User ID</th> --}}
                                           
                                             <th scope="col">Description</th>
                                            <th scope="col">Amount</th>
                                          
                                            <th scope="col">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allrem as $item)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                 
                                                  
                                                    <td>XHS77S</td>
                                                    <td>Goods</td>
                                                    <td>₦{{ number_format($item->amountPaid, 0) }}</td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            

                                                               
                                                          
                                                            <a href="{{ route('student.profile', ['id' => $item->user->id]) }}">
                                                            <li><button type="button" class="btn btn-inverse-danger"><i class="ti-eye"></i></button></li>
                                                        </a>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
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