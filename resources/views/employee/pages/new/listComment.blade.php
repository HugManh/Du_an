@extends('employee.elements.master')
@section('title')
	Danh Sách Bình Luận Của '{{ $name }}'
@endsection
@section('content')
	<!-- Multi column ordering -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Danh Sách Bình Luận Của <a href="{{ route('getNew',$newid) }}" style="color: red;">'{{ $name }}'</a></h5>
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
									<th width="10%">Tên</th>
									<th width="20%">Email</th>
									<th width="15%">Số Điện Thoại</th>
									<th width="10%">Thời Gian</th>
									<th width="30%" >Nội Dung</th>
									<th class="text-center">Hành Động</th>
								</tr>
							</thead>
							<tbody>
								@if (count($listComment)>0)
								<?php
								$a=1;
								?>
								@foreach ($listComment as $element)
								<tr>
									<td>{{ $a }}</td>
									<td>{{ $element->name }}</td>
									<td>{{ $element->email }}</td>
									<td>{{ $element->phone }}</td>
									<td>{{ $element->time }}</td>
									
									<td >{{ $element->content }}</td>
									<td class="text-center" width="10%">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a class="deleteNewComment" sw_title="Thông báo" sw_contnet="Bạn muốn xóa bình luận này?" sw_notice="Xóa thành công." sw_url=" {{ route('getDeleteNewComment',$element->id) }} "><i class="icon-database-remove"></i> Xóa</a></li>
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