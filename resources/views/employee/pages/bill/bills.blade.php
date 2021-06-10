@extends('employee.elements.master')
@section('title')
	Danh Sách Đơn Hàng
@endsection
@section('content')
	<!-- Multi column ordering -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Danh Sách</h5>
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

						<table class="table datatable-multi-sorting">
							<thead>
								<tr>
									<th width="5%">STT</th>
									<th width="15%">Tên Khách Hàng</th>
									<th width="40%">Địa Chỉ</th>
									<th width="10%">Số Điện Thoại</th>
									<th width="10%">Thời Gian Đặt</th>
									<th width="10%">Thời Gian giao hàng</th>
									<th class="text-center">Hành Động</th>
								</tr>
							</thead>
							<tbody>
								@if (count($bills)>0)
								<?php
									$a=0;
									?>
								@foreach ($bills as $bill)
								<tr>
									<td>{{ $a }}</td>
									<td>{{ $bill->customername }}</td>
									<td>{{ $bill->customeraddress }}</td>
									<td>{{ $bill->customernumber }}</td>
									<td>{{ date('d/m/y H:i:s',strtotime($bill->datetime)) }}</td>
									<?php
									if($bill->status==="0000-00-00 00:00:00") $d="CHƯA GIAO HÀNG";
									else {
										$d=$bill->status;
									}
									?>
									<td style="text-align: center;color:red">{{ $d}}</td>
									<td class="text-center" width="10%">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="{{ route('getBill',$bill->id) }}"><i class="icon-database-refresh"></i> Chi Tiết</a></li>
													<li><a class="deleteBill" sw_title="Thông báo" sw_contnet="Bạn muốn xóa đơn này?" sw_notice="Xóa thành công." sw_url=" {{ route('getDeleteBill',$bill->id) }} "><i class="icon-database-remove"></i> Xóa</a></li>
													<li><a class="deleteBill" sw_title="Thông báo" sw_contnet="Bạn muốn gửi đơn hàng" sw_notice="gửi đơn thành công." sw_url=" {{ route('getSen',$bill->id) }} "><i class="icon-database-remove"></i>Gửi đơn</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<?php
								$a=$a+1;
								?>
								@endforeach
								@endif
							</tbody>
						</table>
					</div>
					<!-- /multi column ordering -->
					<script type="text/javascript" src="{{ asset('employee/js/plugins/tables/datatables/datatables.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/datatables_sorting.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/select2.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/notifications/sweet_alert.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/components_modals.js') }}"></script>
@endsection