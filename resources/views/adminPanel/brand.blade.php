@extends('layouts.brandApp')

@section('content')

<div class="container-fluid">
	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		  <h5 class="txt-dark">Brands</h5>
		</div>
	</div>
	<!-- /Title -->
	<?php
              $categry=\App\Category::all();
                ?>
	<!-- Product Row One -->
	<div class="row">
		  @foreach($categry as $cats)
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<article class="col-item">
							<div class="photo">
								 <a href="{{route('products',['id'=>$cats->id])}}">  <img src="{{asset('images') . '/'.$cats->image}}"  class="img-responsive" alt="Product Image" /> </a>
							</div>
							<div class="info">
								 <a href="{{route('products',['id'=>$cats->id])}}"><h6>{{$cats->cat_name}}</h6>
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