<!-- Admin_layout -->
<!DOCTYPE html>
<html lang="en">

<head>

	<title> {{ $title }} </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords"
		content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
	<meta name="author" content="Codedthemes" />

	<!-- Favicon icon -->
	<!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
	<!-- animation css -->
	<link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- pasting  -->
	<link rel="stylesheet" href="../assets/fonts/fontawesome/css/fontawesome-all.min.css">
	<!-- animation css -->
	<link rel="stylesheet" href="../assets/plugins/animation/css/animate.min.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- past end -->
	<!-- image popup start -->

	<link rel="stylesheet" href="../assets/css/imagepopup.css">
	<link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<!-- <h3>jQuery DataTables</h3> -->

</head>

<body class="">
	

	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
		<div class="navbar-wrapper ">
			<div class="navbar-brand header-logo">
				<a href="index.html" class="b-brand">
					<!-- <img src="assets/images/logo.svg" alt="" class="logo images"> -->
					<!-- <img src="assets/images/logo-icon.svg" alt="" class="logo-thumb images"> -->
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#"><span></span></a>
			</div>
			<div class="navbar-content scroll-div">
				<ul class="nav pcoded-inner-navbar">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
						<a href="../Admin" class="nav-link"><span class="pcoded-micon">
                            <i class="feather icon-home"></i></span>
							<span class="pcoded-mtext">Dashboard</span></a>
					</li>
					
					<li class="nav-item">
						<a href="../DisplayCategory" class="nav-link">
							<span class="pcoded-micon">
                            <i class="feather icon-file-text"></i></span>
							<span class="pcoded-mtext">Category Details</span></a>
					</li>
					<li class="nav-item">
						<a href="../Display_Product" class="nav-link">
							<span class="pcoded-micon">
                            <i class="feather icon-align-justify"></i></span>
							<span class="pcoded-mtext">Product Details</span></a>
					</li>
				
					<li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span>
							<span class="pcoded-mtext">Packages</span></a>
						<ul class="pcoded-submenu">
						<li class="nav-item">
						<!-- <a href="../Add_Package" class="nav-link">
						
							<span class="pcoded-mtext">Add Package</span></a> -->
					</li>
					<li class="nav-item">
						<a href="../ViewAdminPackage" class="nav-link">
							<!-- <span class="pcoded-micon">
                            <i class="feather icon-align-justify"></i></span> -->
							<span class="pcoded-mtext">View Package</span></a>
					</li>
							<!-- <li class=""><a href="ViewPackage" class="">View Package</a></li> -->
							<!-- <li class=""><a href="/Tour_details" class="">Tour Package</a></li>
							<li class=""><a href="#" class="">Custom Package</a></li> -->

						
						</ul>
					</li>

					<li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span>
							<span class="pcoded-mtext">Event</span></a>
						<ul class="pcoded-submenu">

							<li class=""><a href="DisplayEventCategory" class="">Event Categorys</a></li>
							<!-- <li class=""><a href="/Add_Event" class="">Add Events </a></li> -->
							 <li class=""><a href="/ViewEvent" class="">View Event</a></li>
							<!-- <li class=""><a href="#" class="">Custom Package</a></li> -->

						
						</ul>
					</li>
					<!-- <li class=""><a href="/Tour_details" class="">Tour Package</a></li> -->
					<li class="nav-item">
						<a href="../Tour_details" class="nav-link">
							<span class="pcoded-micon">
                            <i class="feather icon-file-text"></i></span>
							<span class="pcoded-mtext">Tour Package</span></a>
					</li>
					<!-- <li class=""><a href="/Event_details" class="">Event Details </a></li> -->
					
					<li class="nav-item">
						<a href="../Catering_details" class="nav-link">
							<span class="pcoded-micon">
                            <i class="feather icon-file-text"></i></span>
							<span class="pcoded-mtext">Catering Services</span></a>
					</li>

					
					<!-- <li class="nav-item">
						<a href="../DisplayCategory" class="nav-link">
							<span class="pcoded-micon">
                            <i class="feather icon-file-text"></i></span>
							<span class="pcoded-mtext">Category Details</span></a>
					</li> -->
					
					<li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span>
							<span class="pcoded-mtext">Employs</span></a>
						<ul class="pcoded-submenu">
						<li class=""><a href="../Employdetails" class="">Employs Detail </a></li>

							<li class=""><a href="/ApprovedEmploys" class="">Approved Employs</a></li>
							<!-- <li class=""><a href="#" class="">Tour Package</a></li>
							<li class=""><a href="#" class="">Custom Package</a></li> -->

						
						</ul>
					</li>

<!-- 
					<li class="nav-item">
						<a href="../Employdetails" class="nav-link">
							<span class="pcoded-micon">
                            <i class="feather icon-file-text"></i></span>
							<span class="pcoded-mtext">Employs Details</span></a>
					</li> -->
				</ul>
			
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
			<a href="#" class="b-brand">
				<img src="assets/images/logo.svg" alt="" class="logo images">
				<img src="assets/images/logo-icon.svg" alt="" class="logo-thumb images">
			</a>
		</div>
		<a class="mobile-menu" id="mobile-header" href="#!">
			<i class="feather icon-more-horizontal"></i>
		</a>
		<div class="collapse navbar-collapse">
			<a href="#!" class="mob-toggler"></a>
			<!-- <ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<div class="main-search open">
						<div class="input-group">
							<input type="text" id="m-search" class="form-control" placeholder="Search . . .">
							<a href="#!" class="input-group-append search-close">
							
							</a>
							<span class="input-group-append search-btn btn btn-primary">
								<i class="feather icon-search input-group-text"></i>
							</span>
						</div>
					</div>
				</li>
			</ul> -->
			<ul class="navbar-nav ml-auto">
				<li>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
						<div class="dropdown-menu dropdown-menu-right notification">
							<div class="noti-head">
								<h6 class="d-inline-block m-b-0">Notifications</h6>
								<!-- <div class="float-right">
									<a href="#!" class="m-r-10">mark as read</a>
									<a href="#!">clear all</a>
								</div> -->
							</div>
                            <ul class="noti-body">
							<!-- <ul class="noti-body">
								<li class="n-title">
									<p class="m-b-0">NEW</p>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
											<p>New ticket Added</p>
										</div>
									</div>
								</li> -->
								<!-- <li class="n-title">
									<p class="m-b-0">EARLIER</p>
								</li>
							
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
											<p>currently login</p>
										</div>
									</div>
								</li> -->
								
								<!-- <li class="notification">
									<div class="media">
										<img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>1 hour</span></p>
											<p>currently login</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>2 hour</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li> -->
							</ul>
							<!-- <div class="noti-footer">
								<a href="#!">show all</a>
							</div> -->
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon feather icon-settings"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
								<span>John Doe</span>
								<!-- <a href="auth-signin.html" class="dud-logout" title="Logout">
									<i class="feather icon-log-out"></i>
								</a> -->
							</div>
							<ul class="pro-body">
										<li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>



@yield('Admin_content')
    <!-- footer -->
  	<!-- Required Js -->
	<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/imagepopup.js"></script>
	<script src="assets/js/datatable.js"></script>
	<script src="assets/js/jquery-3.5.1.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>	
	<script src="assets/js/dataTables.bootstrap4.min.js"></script>	
<script src="assets\plugins\jquery\js\jquery.min.js"></script>	
	<!-- imagepopup.js -->

</body>
</html>