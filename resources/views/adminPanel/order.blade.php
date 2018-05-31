@extends('layouts.orderApp')

@section('content')
<div class="container-fluid">
	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		  <h5 class="txt-dark">Product Orders</h5>
		</div>
	</div>
	<!-- /Title -->
	
	<!-- Row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default card-view">
				<div class="panel-wrapper collapse in">
					<div class="panel-body row">
						<div class="table-wrap">
							<div class="table-responsive">
								<table class="table display responsive product-overview mb-30" id="myTable">
									<thead>

		
										<tr>
											<th>Name</th>
											<th>order ID</th>
											<th>Photo</th>
											<th>Product</th>
											<th>Date</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
										
									</thead>
									<tbody>
										@foreach($Order_Address as $order)
										<tr>
											<td class="txt-dark">{{$order->name}}</td>
											<td class="txt-dark">{{$order->order_id}}</td>
											<td>
												<img src="{{asset('adminpanel/dist/img/chair.jpg')}}" alt="iMac" width="80">
											</td>
											<td>Samsung S8</td>
											
											<td>{{$order->created_at}}</td>
											<td>
												<span class="label label-default font-weight-100">Failed</span>
											</td>
											<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a>
											<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</div>
	<!-- /Row -->
</div>
@endsection