<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Brands I Products I Mobile Touch</title>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="{{asset('adminpanel/favicon.png')}}" type="image/x-icon">

	<!--alerts CSS -->
	<link href="{{asset('adminpanel/vendors/bower_components/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">
	
	<!-- Custom Fonts -->
    <link href="{{asset('adminpanel/dist/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
	<!-- Calendar CSS -->
	<link href="{{asset('adminpanel/vendors/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="{{asset('adminpanel/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper theme-1-active pimary-color-red">
    	<!-- Top Menu Items -->
    		@include('adminInc.navigation')
    	<!-- /Top Menu Items -->
    	<!-- Left Sidebar Menu -->
        	@include('adminInc.leftSidebar')
    	<!-- /Left Sidebar Menu -->


    	<!-- Main Content -->
		<div class="page-wrapper">
		@yield('content')

	    <!-- Footer -->
		@include('adminInc.footer')
		<!-- /Footer -->

    	</div>
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->
	
    <!-- jQuery -->
	<script src="{{asset('adminpanel/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
	<script src="{{asset('adminpanel/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{asset('adminpanel/dist/js/jquery.slimscroll.js')}}"></script>
	
	<!-- Owl JavaScript -->
	<script src="{{asset('adminpanel/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
	
	<!-- Sweet-Alert  -->
	<script src="{{asset('adminpanel/vendors/bower_components/sweetalert/dist/sweetalert.min.js')}}"></script>
	<script src="{{asset('adminpanel/dist/js/sweetalert-data.js')}}"></script>
		
	<!-- Switchery JavaScript -->
	<script src="{{asset('adminpanel/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="{{asset('adminpanel/dist/js/dropdown-bootstrap-extended.js')}}"></script>
		
	<!-- Init JavaScript -->
	<script src="{{asset('adminpanel/dist/js/init.js')}}"></script>	
</body>

</html>