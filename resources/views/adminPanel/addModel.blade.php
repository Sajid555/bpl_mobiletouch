@extends('layouts.addProductApp')
@section('content')

<div class="container-fluid">
	<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			  <h5 class="txt-dark">New Model</h5>
			</div>
		</div>
	<!-- /Title -->
	<?php  
			$p=\App\Category::all();
			?> 
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default card-view">
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="form-wrap">
							<form action="" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									<label class="control-label mb-10">Select Brand</label>
											<select class="form-control" data-placeholder="" name="cat_id" tabindex="1">
												@foreach($p as $prdct)
					              <option  value="{{$prdct->id}}">{{$prdct->cat_name}}</option>
					                     @endforeach
											</select>
								</div>
								<div class="form-group">
									<label class="control-label mb-10">Add new Model</label>
									<input type="text" class="form-control" name="brand_name" placeholder="Enter new model name">
								</div>
								<button type="submit" class="btn  btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection