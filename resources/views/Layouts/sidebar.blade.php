<div class="sidebar-menu dark-sidebar">
    <div class="sidebar-header">
        <!--=========================*
                      Logo
        *===========================-->
        <div class="logo">
            <a href="/admindashboard"><img src="/images/logo.png" alt="logo"></a>
        </div>
        <!--=========================*
                    End Logo
        *===========================-->
    </div>
    <!--=========================*
               Main Menu
    *===========================-->
    @if (auth::user()->role_id===1)
        
  
    <div class="main-menu">
        <div class="menu-inner" id="sidebar_menu">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="{{ route('admindashboard') }}">
                            <i class="feather ft-home"></i>
                            <span>Remedials </span>
                        </a>
                    </li>


                    <li class="active">
                        <a href="{{ route('certificate') }}">
                            <i class="feather ft-home"></i>
                            <span>Certificate Courses</span>
                        </a>
                    </li>


                    <li class="active">
                        <a href="{{ route('engineering') }}">
                            <i class="feather ft-home"></i>
                            <span>Engineering</span>
                        </a>
                    </li>


                    <li class="active">
                        <a href="index.html">
                            <i class="feather ft-home"></i>
                            <span>Applied Sciences</span>
                        </a>
                    </li>


                    <li class="active">
                        <a href="index.html">
                            <i class="feather ft-home"></i>
                            <span>Management Studies</span>
                        </a>
                    </li>

                    
                    <!--=========================*
                              UI Features
                    *===========================-->
                    <li >
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-home"></i>
                            <span>Expenses</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="/expenses"><i class="ti-alert"></i><span>Expenses List</span></a></li>
                            <li><a href="/new-expenses"><i class="ti-layout-accordion-separated"></i><span>New Expenses</span></a></li>
                            <li><a href="/expenses-type"><i class="ti-layout-accordion-separated"></i><span>Expense Type</span></a></li>
                        
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-calendar"></i>
                            <span>Academic Calender</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="/remcalender"><i class="ti-alert"></i><span>Remedial Calender</span></a></li>
                            <li><a href="accordion.html"><i class="ti-layout-accordion-separated"></i><span>Direct Entry Calender</span></a></li>
                            <li><a href="buttons.html"><i class="icon-focus"></i><span>Certificate Calender</span></a></li>
                           
                        </ul>
                    </li>
                    <!--=========================*
                              Advance Kit
                    *===========================-->
                 
                  
                       
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-users"></i>
                            <span>Session</span>
                        </a>
                        <ul class="collapse">
                            <li>
                                <a href="login.html">
                                    <i class="feather ft-log-in"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                            <li><a href="register.html"><i class="ion-person-add"></i><span>Register</span></a></li>
                            <li><a href="lock.html"><i class="ti-lock"></i><span>Lock Screen</span></a></li>
                            <li>
                                <a href="reset-password.html">
                                    <i class="feather ft-lock"></i>
                                    <span>Reset Password</span>
                                </a>
                            </li>
                            <li><a href="forgot-password.html"><i class="ti-bookmark-alt"></i><span>Forgot Password</span></a></li>
                        </ul>
                    </li>
                
                </ul>
            </nav>
        </div>
    </div>
      @endif

       @if (auth::user()->role_id===2)
        
  
    <div class="main-menu">
        <div class="menu-inner" id="sidebar_menu">
            <nav>
                <ul class="metismenu" id="menu">
                    
                    
                    <!--=========================*
                              UI Features
                    *===========================-->
                    <li >
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-home"></i>
                            <span>E</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="/expenses"><i class="ti-alert"></i><span>Expenses List</span></a></li>
                            <li><a href="/new-expenses"><i class="ti-layout-accordion-separated"></i><span>New Expenses</span></a></li>
                            <li><a href="/expenses-type"><i class="ti-layout-accordion-separated"></i><span>Expense Type</span></a></li>
                        
                        </ul>
                    </li>
                   
                    <!--=========================*
                              Advance Kit
                    *===========================-->
                 
                  
                       
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-users"></i>
                            <span>Session</span>
                        </a>
                        <ul class="collapse">
                            <li>
                                <a href="login.html">
                                    <i class="feather ft-log-in"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                            <li><a href="register.html"><i class="ion-person-add"></i><span>Register</span></a></li>
                            <li><a href="lock.html"><i class="ti-lock"></i><span>Lock Screen</span></a></li>
                            <li>
                                <a href="reset-password.html">
                                    <i class="feather ft-lock"></i>
                                    <span>Reset Password</span>
                                </a>
                            </li>
                            <li><a href="forgot-password.html"><i class="ti-bookmark-alt"></i><span>Forgot Password</span></a></li>
                        </ul>
                    </li>
                
                </ul>
            </nav>
        </div>
    </div>
      @endif
    <!--=========================*
              End Main Menu
    *===========================-->
</div>