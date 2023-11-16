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
	@if (Auth::user()->role_id === 1)

		<div class="main-menu">
			<div class="menu-inner" id="sidebar_menu">
				<nav>
					<ul class="metismenu" id="menu">
						@if (Auth::user()->school_id === 1)
							<li class="active">
								<a href="{{ route('admindashboard') }}">
									<i class="feather ft-home"></i>
									<span>Remedials </span>
								</a>
							</li>
						@endif

						@if (Auth::user()->school_id === 2)
							<li class="active">
								<a href="{{ route('certificate') }}">
									<i class="feather ft-home"></i>
									<span>Certificate Courses</span>
								</a>
							</li>
						@endif
						@if (Auth::user()->school_id === 3)
							<li class="active">
								<a href="{{ route('engineering') }}">
									<i class="feather ft-home"></i>
									<span>Engineering</span>
								</a>
							</li>
						@endif
						@if (Auth::user()->school_id === 4)
							<li class="active">
								<a href="index.html">
									<i class="feather ft-home"></i>
									<span>Applied Sciences</span>
								</a>
							</li>
						@endif
						@if (Auth::user()->school_id === 5)
							<li class="active">
								<a href="index.html">
									<i class="feather ft-home"></i>
									<span>Management Studies</span>
								</a>
							</li>
						@endif

						<!--=========================*
																														UI Features
																				*===========================-->
						<li>
							<a href="javascript:void(0)" aria-expanded="true">
								<i class="feather ft-home"></i>
								<span>Expenses</span>
							</a>
							<ul class="collapse">
								<li><a href="/expenses"><i class="ti-layout-accordion-separated"></i><span>Expenses</span></a></li>
								<li><a href="/expenses-type"><i class="ti-layout-accordion-separated"></i><span>Expense Type</span></a></li>

							</ul>
						</li>
						<li>
							<a href="javascript:void(0)" aria-expanded="true">
								<i class="feather ft-home"></i>
								<span>Income</span>
							</a>
							<ul class="collapse">
								<li><a href="/incomes"><i class="ti-layout-accordion-separated"></i><span>Incomes</span></a></li>

							</ul>
						</li>
						<li>
							<a href="javascript:void(0)" aria-expanded="true">
								<i class="feather ft-calendar"></i>
								<span>Academic Calender</span>
							</a>
							<ul class="collapse">
								<li><a href="/remcalender"><i class="ti-alert"></i><span>Remedial Calender</span></a></li>
								<li><a href="accordion.html"><i class="ti-layout-accordion-separated"></i><span>Direct Entry Calender</span></a>
								</li>
								<li><a href="buttons.html"><i class="icon-focus"></i><span>Certificate Calender</span></a></li>

							</ul>
						</li>
						<!--=========================*
																														Advance Kit
																				*===========================-->

						<li>
							<a href="javascript:void(0)" aria-expanded="true">
								<i class="feather ft-home"></i>
								<span>Users</span>
							</a>
							<ul class="collapse">
								<li><a href="/new-user"><i class="ti-layout-accordion-separated"></i><span>New User</span></a></li>
								<li><a href="/users"><i class="ti-layout-accordion-separated"></i><span>Users</span></a></li>

							</ul>
						</li>

						<li class="">
							<a href="javascript:void(0)" aria-expanded="true">
								<i class="feather ft-mail"></i>
								<span>Email</span>
							</a>
							<ul class="collapse">
								<li><a href="/messages"><i class="active ion-ios-folder-outline"></i><span>Inbox</span></a></li>
								<li class="active"><a href="/new-messages"><i class="ti-pencil-alt"></i><span>Compose Email</span></a></li>
								<li><a href="/messages-sent"><i class="active ion-ios-folder-outline"></i><span>Outbox</span></a></li>

								{{-- <li><a href="read-mail.html"><i class="ti-bookmark-alt"></i><span>Read Email</span></a></li> --}}
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	@endif

	@if (Auth::user()->role_id === 2)
		<div class="main-menu">
			<div class="menu-inner" id="sidebar_menu">
				<nav>
					<ul class="metismenu" id="menu">

						<!--=========================*
																														UI Features
																				*===========================-->
						<li class="">
							<a href="javascript:void(0)" aria-expanded="true">
								<i class="feather ft-mail"></i>
								<span>Email</span>
							</a>
							<ul class="collapse">
								<li><a href="/messages"><i class="active ion-ios-folder-outline"></i><span>Inbox</span></a></li>
								<li><a href="/messages-sent"><i class="active ion-ios-folder-outline"></i><span>Outbox</span></a></li>

								<li class="active"><a href="/new-messages"><i class="ti-pencil-alt"></i><span>Compose Email</span></a></li>
								{{-- <li><a href="read-mail.html"><i class="ti-bookmark-alt"></i><span>Read Email</span></a></li> --}}
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
<div class="main-content page-content">

	{{-- header area --}}
	<div class="header-area">
		<div class="row align-items-center">
			<div class="mobile-logo d_none_lg">
				<a href="/"><img src="images/mobile-logo.png" alt="logo"></a>
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
									f <div class="notify-thumb"><i class="ti-comments bg_info"></i></div>
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
							<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<span class="d_none_sm">Jessica <i class="ti-angle-down"></i></span>
								<img src="images/user.jpg" alt="" class="img-fluid">
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account
									Settings</a>
								<span role="separator" class="divider"></span>
								<a class="dropdown-item" href="{{ route('logout') }}"><i class="ti-power-off"></i>Logout</a>
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
