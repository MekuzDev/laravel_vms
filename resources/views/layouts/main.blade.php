
<!doctype html>
<html lang="en" dir="ltr">	
<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Fleet Management System">
		<meta name="Author" content="Fleet Management System">
		<meta name="Keywords" content=""/>
		<title>@yield('name',"VMS")</title>
        		<!-- Favicon -->
		<link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>
		<!-- Icons css -->
		<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
		<!--  bootstrap css-->
		<link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
		<!--- Style css --->
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/style-dark.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/style-transparent.css')}}" rel="stylesheet">
		<!---Skinmodes css-->
		<link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
		<!--- Animations css-->
		<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">

	   <!-- INTERNAL Switcher css -->
		<link href="{{asset('assets/switcher/css/switcher.css')}}{{asset('" rel="stylesheet"/>
		<l')}}ink href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet"/>
	</head>

	<body class="ltr main-body app sidebar-mini">
    		<!-- Loader -->
		<div id="global-loader">
			<img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

        		<!-- Page -->
		<div class="page">
            <div>
            				<!-- main-header -->
				<div class="main-header side-header sticky nav nav-item">
					<div class=" main-container container-fluid">
						<div class="main-header-left ">
							<div class="responsive-logo">
								<a href="index.html" class="header-logo">
									<img src="{{asset('assets/images/logo-01.png')}}" class="mobile-logo logo-1" alt="logo">
									<img src="{{asset('assets/images/logo-02.png')}}" class="mobile-logo dark-logo-1" alt="logo">
								</a>
							</div>
							<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
								<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left" ></i></a>
								<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
							</div>
							<div class="logo-horizontal">
								<a href="{{url('/')}}" class="header-logo">
									<img src="{{asset('assets/images/logo-01.png')}}" class="mobile-logo logo-1" alt="logo">
									<img src="{{asset('assets/images/logo-02.png')}}" class="mobile-logo dark-logo-1" alt="logo">
								</a>
							</div>
							<div class="main-header-center ms-4 d-sm-none d-md-none d-lg-block form-group">
								<input class="form-control" placeholder="Search..." type="search">
								<button class="btn"><i class="fas fa-search"></i></button>
							</div>
						</div>
						<div class="main-header-right">
							<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical "></span>
							</button>
							<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
								<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
									<ul class="nav nav-item header-icons navbar-nav-right ms-auto">
										<li class="dropdown nav-item">
											<a class="new nav-link theme-layout nav-link-bg layout-setting" >
												<span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"/></svg></span>
												<span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"/></svg></span>
											</a>
										</li>
										<li class="nav-item full-screen fullscreen-button">
											<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"/></svg></a>
										</li>
										<li class="nav-link search-icon d-lg-none d-block">
											<form class="navbar-form" role="search">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search">
													<span class="input-group-btn">
														<button type="reset" class="btn btn-default">
															<i class="fas fa-times"></i>
														</button>
														<button type="submit" class="btn btn-default nav-link resp-btn">
															<svg xmlns="http://www.w3.org/2000/svg" height="24px" class="header-icon-svgs" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
														</button>
													</span>
												</div>
											</form>
										</li>
										<li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
											<a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><img alt="" src="{{asset('assets/img/faces/2.jpg')}}" class=""></a>
											<div class="dropdown-menu">
												<div class="menu-header-content p-3 border-bottom">
													<div class="d-flex wd-100p">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/2.jpg')}}" class=""></div>
														<div class="ms-3 my-auto">
															<h6 class="tx-15 font-weight-semibold mb-0">Teri Dactyl</h6><span class="dropdown-title-text subtext op-6  tx-12">Premium Member</span>
														</div>
													</div>
												</div>
												<a class="dropdown-item" href="profile.html"><i class="far fa-user-circle"></i>Profile</a>
												<a class="dropdown-item" href="mail-settings.html"><i class="far fa-sun"></i>  Settings</a>
												<a class="dropdown-item" href="signup.html"><i class="far fa-arrow-alt-circle-left"></i> Sign Out</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /main-header -->
            				
				<!-- main-sidebar -->
				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="index.html">
								<img src="{{asset('assets/images/logo-01.png')}}" class="main-logo  desktop-logo" alt="logo">
								<img src="{{asset('assets/images/logo-01.png')}}" class="main-logo  desktop-dark" alt="logo">
								<img src="{{asset('assets/images/logo-02.png')}}" class="main-logo  mobile-logo" alt="logo">
								<img src="{{asset('assets/images/logo-02.png')}}" class="main-logo  mobile-dark" alt="logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
							<ul class="side-menu">
								<li class="side-item side-item-category">Main</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="{{route('dashboard')}}"><i class="fe fe-user"></i> &nbsp;&nbsp;<span class="side-menu__label">Dashboards</span></a>
								</li>
								<li class="side-item side-item-category">ADMIN OPERATIONS</li>
								<li class="slide">
									<a class="side-menu__item side-menu__item" data-bs-toggle="slide" href="{{route('location-home')}}"><i class="fe fe-map-pin">&NonBreakingSpace;</i><span class="side-menu__label">Locations </span></a>
								</li>

								<li class="slide">
									<a class="side-menu__item side-menu__item" data-bs-toggle="slide" href="{{route('vuser-home')}}"><i class="fe fe-user"></i>&nbsp;<span class="side-menu__label">Vehicle Users</span></a>
								</li>
								
								
								<li class="slide">
									<a class="side-menu__item side-menu__item" data-bs-toggle="slide" href="{{route('vstatus-home')}}"><i class="fe fe-activity">&nbsp;</i><span class="side-menu__label">Vehicle Status </span></a>
								</li>
								
								
								<li class="slide">
									<a class="side-menu__item side-menu__item" data-bs-toggle="slide" href="{{route('vmodel-home')}}"><i class="fe fe-arrow-right"></i>&nbsp;<span class="side-menu__label">Vehicle Models </span></a>
								</li>
								
								
								<li class="slide">
									<a class="side-menu__item side-menu__item" data-bs-toggle="slide" href="{{route('vreg-home')}}"><i class="fe fe-arrow-right"></i>&nbsp;<span class="side-menu__label">Register Vehicles</span></a>
								</li>
								
								
								<li class="slide">
									<a class="side-menu__item side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-arrow-right"></i>&nbsp;<span class="side-menu__label">Documents Type</span></a>
								</li>
								
								
								<li class="side-item side-item-category">Maintenance Operations</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-arrow-right"></i>&nbsp<span class="side-menu__label">Maintainance Entry</span></a>

								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-arrow-right"></i>&nbsp<span class="side-menu__label">Maintainance History</span></a>

								</li>
								
								<li class="side-item side-item-category">Vehicle Documents</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-arrow-right"></i>&nbsp<span class="side-menu__label">Vehicle Documents</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-arrow-right"></i>&nbsp<span class="side-menu__label">Expired Documents</span></a>
								</li>
							
								<li class="side-item side-item-category">Vehicle Allocation</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-arrow-right"></i>&nbsp<span class="side-menu__label">Vehicle Allocations</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-arrow-right"></i>&nbsp<span class="side-menu__label">Alloction History</span></a>
								</li>
								<li class="side-item side-item-category">Actions</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19.937 8.68c-.011-.032-.02-.063-.033-.094a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.99.99 0 0 0-.05-.258zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z"/></svg><span class="side-menu__label">Logout</span></a>
								
								</li>
								
							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
						</div>
					</aside>
				</div>
				<!-- main-sidebar -->
            </div>
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">@yield('title','vms')</span>
						</div>
						{{-- <div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Empty Page</li>
							</ol>
						</div> --}}
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								@yield('content')
							</div>
						</div>
					</div>
					<!-- row closed -->



    
                </div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

			<!-- Footer opened -->
			<div class="main-footer">
				<div class="container-fluid pt-0 ht-100p">
					 Copyright © 2022 <a href="javascript:void(0);" class="text-primary">nowa</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a> All rights reserved
				</div>
			</div>
			<!-- Footer closed -->
		</div>
		<!-- End Page -->
				<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>
		<!-- JQuery min js -->
		<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
		<!-- Bootstrap js -->
		<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
		<!--Internal  pickerjs js -->
		<script src="{{asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
		<!--Internal  Datepicker js -->
		<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
		<!--Bootstrap-datepicker js-->
		<script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
		<!-- Moment js -->
		<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
		<!-- P-scroll js -->
		<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
		<script src="{{asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
		<!-- eva-icons js -->
		<script src="{{asset('assets/js/eva-icons.min.js')}}"></script>
		<!-- Sidebar js -->
		<script src="{{asset('assets/plugins/side-menu/sidemenu.js')}}"></script>
		{{-- sweet Alert --}}
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>
		<!-- Sticky js -->
		<script src="{{asset('assets/js/sticky.js')}}"></script>
		<!-- Theme Color js -->
		<script src="{{asset('assets/js/themecolor.js')}}"></script>
		<!-- custom js -->
		<script src="{{asset('assets/js/custom.js')}}"></script>
		<!-- Switcher js -->
		<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>
	</body>
</html>