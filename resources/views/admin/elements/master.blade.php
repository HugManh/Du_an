<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> @yield('title')</title>
	<link rel="icon" type="image/png" href="{{ asset('uploads/logo_icon_dark.png') }}" />

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('employee/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('employee/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('employee/css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('employee/css/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('employee/css/colors.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('employee/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->
	@yield('js1')
	<!-- Theme JS files -->
	@yield('js2')
	<script type="text/javascript" src="{{ asset('employee/js/core/app.js') }}"></script>
	@yield('js3')
	
	<script type="text/javascript" src="{{ asset('employee//js/plugins/ui/ripple.min.js') }}"></script>

	<!-- /theme JS files -->
</head>
<body>
	@include('admin.elements.header')
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					@yield('content')

					<!-- Footer -->
					
					<!-- /footer -->
					
				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
</body>
</html>