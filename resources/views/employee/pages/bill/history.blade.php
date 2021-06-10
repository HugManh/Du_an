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
	<link href="{{ asset('employee/css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
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

	<!-- Theme JS files -->

	@yield('js1')
	@yield('js2')
	<script type="text/javascript" src="{{ asset('employee/js/core/app.js') }}"></script>
	@yield('js3')
	<script type="text/javascript" src="{{ asset('employee//js/plugins/ui/ripple.min.js') }}"></script>
	@yield('js4')

	<!-- /theme JS files -->
</head>
<body>
	<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('getEmployeeHome') }}"><img src="{{ asset('uploads/logo_light.png') }}" alt=""></a>
		</div>		
	</div>
    
	<!-- Page container -->
	<div class="panel panel-flat" style="width:98%;margin-left: 1%;margin-top: 20px;">
        <div class="panel-heading">
            <h5 class="panel-title">Lịch sử mua hàng</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            
        </div>
        <hr style="size: 2px">

        <table class="table datatable-multi-sorting">
            <thead>
                <tr>
                   
                    <th width="15%">Tên Khách Hàng</th>
                    <th width="40%">Địa Chỉ</th>
                    <th width="10%">Số Điện Thoại</th>
                    <th width="10%">Thời Gian Đặt</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @if (count($bills)>0)
                
                @foreach ($bills as $bill)
                <tr>
                    <td>{{ $bill->customername }}</td>
                    <td>{{ $bill->customeraddress }}</td>
                    <td>{{ $bill->customernumber }}</td>
                    <td>{{ date('d/m/y H:i:s',strtotime($bill->datetime)) }}</td>
                    <td class="text-center" width="10%">
                        <a href="{{ route('getBillLs',$bill->id) }}" style="color: black"><i class="icon-database-refresh" style="padding-right: 10px"></i>Xem Chi Tiết</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        <hr style="size: 20px">
        <div>
            <div class="container" style="padding-bottom: 20px">
                <ul class="pagination" style="    margin-top: -10px;
                margin-bottom: -6px;
                float: right;
                margin-right: -10%;">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li ><a href="#" style="background-color: #455A64;color: white">1</a></li>
            
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </div>
        </div>
    </div>
    
	<!-- /page container -->
    <!-- /multi column ordering -->
    
</body>
</html>