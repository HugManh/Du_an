<!DOCTYPE>  
<html> 
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
    </head> 
    <body> 
        <div class="navbar navbar-inverse bg-indigo">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('getEmployeeHome') }}"><img src="{{ asset('uploads/logo_light.png') }}" alt=""></a>
            </div>		
        </div>
        <div class="panel panel-flat" style="width: 98%;
        margin-left: 1%;
        margin-top: 20px;
        font-size: 12px;">
						
            <div class="panel panel-flat col-md-3">
                <div class="panel-heading">
                    <h5 class="panel-title">Đơn Hàng {{ $bill->id }}</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div>
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-reading position-left"></i> Thông Tin Đơn Hàng</legend>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="display-block">Mã Đơn Hàng: {{ $bill->id }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="display-block">Tên Khách Hàng: {{ $bill->customername }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Số Điện Thoại: {{ $bill->customernumber }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email: {{ $bill->customeremail }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Địa Chỉ: {{ $bill->customeraddress }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Thời Gian Đặt: {{ date('d/m/y H:i:s',strtotime($bill->datetime)) }}</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                </div>
            </div>
            <div class="panel panel-flat col-md-9">
                <table class="table datatable-multi-sorting" style="font-size: 12px">
                <thead>
                    <tr>
                        
                        <th>Logo</th>
                        <th width="55%">Tên Sản Phẩm</th>
                        <th width="10%">Số Lượng</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($billitems)>0)
                    @foreach ($billitems as $billitem)
                        @php
                            $product=$billitem->isProduct;
                        @endphp
                    <tr>
                        
                        <td><img src="{{ asset($product->imagesurl) }}" width="50px"></td>
                        <td>{{ $product->productName }}</td>
                        <td>{{ $billitem->quantity }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            </div>
    </body>  
</html>