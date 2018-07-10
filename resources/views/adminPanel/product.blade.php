@extends('layouts.brandApp')

@section('content')

<div class="container-fluid">
	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		  <h5 class="txt-dark">Products</h5>
		</div>
	</div>
	<!-- /Title -->
	
	<!-- Product Row One -->
	<div class="row">
		@foreach($Product as $product)
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
			   <div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<article class="col-item">
							<div class="photo">
								<div class="options">
								
     <td align="center"><button  type="button"><a href="{{route('update', ['id' => $product->id] )}}"><i class="zmdi zmdi-edit"></i></a>
									
     <td align="center"><button  type="button"><a href="{{route('delete', ['id' => $product->id] )}}"><i class="zmdi zmdi-delete"></i></a>
								</div>
								
								<a href="javascript:void(0);"> <img src= "{{asset('images') . '/'.$product->image}}"> </a>
							</div>
							<div class="info">
								<h6> <?php 

                              $productName=DB::table('brands')->where('id', '=', $product->brand_id)->get();
                              echo $productName[0]->brand_name; 

                        ?></a>
								</h6>
								<span class="head-font block text-warning font-16">{{$product->price}}</span>
							</div>
						</article>
					</div>
				</div>	
			</div>	
		</div>
		@endforeach									
	</div>	
	<!-- /Product Row One -->
</div>
@endsection