<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Obocas | Admin</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/admin/assets/img/favicon.png') }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/css/bootstrap.min.css') }}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/admin/assets/plugins/fontawesome/css/all.min.css') }}">

	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/css/feather.css') }}">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/plugins/select2/css/select2.min.css') }}">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/plugins/datatables/datatables.min.css') }}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/css/style.css') }}">

	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">

			<!-- Logo -->
			<div class="header-left">
				<a href="{{ url('/') }}" class="logo">
            		<img src="{{ asset('frontend/assets/images/logo.png')}}" alt="">
				</a>
				<a href="{{ url('/') }}" class="logo logo-small">
					<img src="{{ asset('frontend/assets/images/logo.png')}}" alt="">
				</a>
			</div>
			<!-- /Logo -->

			<a href="{{ url('javascript:void(0);') }}" id="toggle_btn"> <i class="fas fa-bars"></i>
			</a>
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="feather-search"></i>
					</button>
				</form>
			</div>

			<!-- Mobile Menu Toggle -->
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i>
			</a>
			<!-- /Mobile Menu Toggle -->

			<!-- Header Right Menu -->
			<ul class="nav user-menu">

				<!-- Fullscreen -->
				<li class="nav-item dropdown">
					<a href="{{ url('#') }}" id="btnFullscreen" class=" ">
						<i class="feather-maximize"></i>
					</a>
				</li>
				<!-- /Fullscreen -->

				<!-- Messages -->
				<li class="nav-item dropdown noti-dropdown">
					<a href="{{ url('#') }}" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<i class="feather-message-square"></i>
						<span class="badge badge-pill">1</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Messages</span>
							<a href="{{ url('javascript:void(0)') }}" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="{{ url('#') }}">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('/admin/assets/img/user/user.jpg') }}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Jonathan Doe</span>
													Schedule <span class="noti-title">his appointment</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="{{ url('#') }}">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('/admin/assets/img/user/user1.jpg') }}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Julie Pennington</span>
													has booked her appointment to <span class="noti-title">Ruby
														Perrin</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="{{ url('#') }}">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('/admin/assets/img/user/user2.jpg') }}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tyrone Roberts</span>
													sent a amount of $210 for his <span
														class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="{{ url('#') }}">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('/admin/assets/img/user/user4.jpg') }}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Patricia Manzi</span>
													send a message <span class="noti-title"> to his Mentee</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="{{ url('#') }}">View all Messages</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<!-- Notifications -->
				<li class="nav-item dropdown noti-dropdown">
					<a href="{{ url('#') }}" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<i class="feather-bell"></i> <span class="badge badge-pill">3</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="{{ url('javascript:void(0)') }}" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="{{ url('#') }}">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('/admin/assets/img/user/user.jpg') }}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Jonathan Doe</span>
													Schedule <span class="noti-title">his appointment</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="{{ url('#') }}">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('/admin/assets/img/user/user1.jpg') }}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Julie Pennington</span>
													has booked her appointment to <span class="noti-title">Ruby
														Perrin</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="{{ url('#') }}">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('/admin/assets/img/user/user2.jpg') }}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tyrone Roberts</span>
													sent a amount of $210 for his <span
														class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="{{ url('#') }}">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('/admin/assets/img/user/user4.jpg') }}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Patricia Manzi</span>
													send a message <span class="noti-title"> to his Mentee</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="{{ url('#') }}">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<li class="nav-item dropdown has-arrow main-drop ml-3">
					<a href="{{ url('#') }}" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img">
							<img src="{{ asset('/admin/assets/img/profiles/avatar-06.jpg') }}" alt=""> Admin
							<span class="status online"></span></span>
					</a>
					<div class="dropdown-menu">
						{{-- <a class="dropdown-item" href="{{ url('profile.html') }}"><i class="feather-user"></i> My Profile</a> --}}
						<a class="dropdown-item" href="{{ url('/logout') }}"><i class="feather-power"></i> Logout</a>
					</div>
				</li>
			</ul>
			<!-- /Header Right Menu -->

		</div>
		<!-- /Header -->

		@include('admin.sidebar')

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
				@yield('content')
			</div>
		</div>
		<!-- /Page Wrapper -->
		<!-- jQuery -->
		<script src="{{ asset('/admin/assets/js/jquery-3.2.1.min.js') }}"></script>
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('/admin/assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('/admin/assets/js/bootstrap.min.js') }}"></script>
		<!-- Slimscroll JS -->
		<script src="{{ asset('/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        @yield('js')
		<!-- <script src="assets/plugins/apexchart/apexcharts.min.js"></script> -->
		<!-- <script src="assets/plugins/apexchart/dsh-apaxcharts.js"></script> -->
		{{-- <script src="{{ asset('/admin/assets/plugins/apexchart/apexcharts.js') }}"></script> --}}
		<!-- Custom JS -->
		<script src="{{ asset('/admin/assets/js/script.js') }}"></script>
</body>

</html>
