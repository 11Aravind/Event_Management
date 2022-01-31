@extends('Layout/Admin_layout')
@section('Admin_content')
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							<!-- [ breadcrumb ] start -->
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="page-header-title">
												<h5>Home</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#!">Analytics Dashboard</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- [ breadcrumb ] end -->
							<!-- [ Main Content ] start -->
							<div class="row">

								<!-- product profit start -->
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-red">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Total Profit</h6>
													<h3 class="m-b-0 text-white">$1,783</h3>
												</div>
					x							<div class="col-auto">
													<i class="fas fa-money-bill-alt text-c-red f-18"></i>
												</div>
											</div>
											<p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From Previous Month</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-blue">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Total Orders</h6>
													<h3 class="m-b-0 text-white">15,830</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-database text-c-blue f-18"></i>
												</div>
											</div>
											<p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From Previous Month</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-green">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Average Price</h6>
													<h3 class="m-b-0 text-white">$6,780</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-dollar-sign text-c-green f-18"></i>
												</div>
											</div>
											<p class="m-b-0 text-white"><span class="label label-success m-r-10">+52%</span>From Previous Month</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-yellow">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h3 class="m-b-5 text-white">Calender</h3>
													<h6 class="m-b-0 text-white">Booked Work</h6>
												</div>
												<div class="col-auto">
													<i class="fas fa-tags text-c-yellow f-18"></i>
												</div>
											</div>
											<p class="m-b-0 text-white"><span class="label label-warning m-r-10">+52%</span>From Previous Month</p>
										</div>
									</div>
								</div>
								<!-- product profit end -->
								<!-- <div class="col-md-12 col-xl-4">
									<div class="card card-social">
										<div class="card-block border-bottom">
											<div class="row align-items-center justify-content-center">
												<div class="col-auto">
													<i class="fab fa-facebook-f text-primary f-36"></i>
												</div>
												<div class="col text-right">
													<h3>12,281</h3>
													<h5 class="text-c-blue mb-0">+7.2% <span class="text-muted">Total Likes</span></h5>
												</div>
											</div>
										</div>
										<div class="card-block">
											<div class="row align-items-center justify-content-center card-active">
												<div class="col-6">
													<h6 class="text-center m-b-10"><span class="text-muted m-r-5">Target:</span>35,098</h6>
													<div class="progress">
														<div class="progress-bar progress-c-blue" role="progressbar" style="width:60%;height:6px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-6">
													<h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Duration:</span>350</h6>
													<div class="progress">
														<div class="progress-bar progress-c-green" role="progressbar" style="width:45%;height:6px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="card card-social">
										<div class="card-block border-bottom">
											<div class="row align-items-center justify-content-center">
												<div class="col-auto">
													<i class="fab fa-twitter text-c-info f-36"></i>
												</div>
												<div class="col text-right">
													<h3>11,200</h3>
													<h5 class="text-c-info mb-0">+6.2% <span class="text-muted">Total Likes</span></h5>
												</div>
											</div>
										</div>
										<div class="card-block">
											<div class="row align-items-center justify-content-center card-active">
												<div class="col-6">
													<h6 class="text-center m-b-10"><span class="text-muted m-r-5">Target:</span>34,185</h6>
													<div class="progress">
														<div class="progress-bar progress-c-blue" role="progressbar" style="width:40%;height:6px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-6">
													<h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Duration:</span>800</h6>
													<div class="progress">
														<div class="progress-bar progress-c-green" role="progressbar" style="width:70%;height:6px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="card card-social">
										<div class="card-block border-bottom">
											<div class="row align-items-center justify-content-center">
												<div class="col-auto">
													<i class="fab fa-google-plus-g text-c-red f-36"></i>
												</div>
												<div class="col text-right">
													<h3>10,500</h3>
													<h5 class="text-c-red mb-0">+5.9% <span class="text-muted">Total Likes</span></h5>
												</div>
											</div>
										</div>
										<div class="card-block">
											<div class="row align-items-center justify-content-center card-active">
												<div class="col-6">
													<h6 class="text-center m-b-10"><span class="text-muted m-r-5">Target:</span>25,998</h6>
													<div class="progress">
														<div class="progress-bar progress-c-blue" role="progressbar" style="width:80%;height:6px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-6">
													<h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Duration:</span>900</h6>
													<div class="progress">
														<div class="progress-bar progress-c-green" role="progressbar" style="width:50%;height:6px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
										</div>
									</div> -->
								<!-- </div> -->
								<!-- sessions-section start -->
								
								<!-- sessions-section end -->
							
							<!-- [ Main Content ] end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ Main Content ] end -->
@endsection