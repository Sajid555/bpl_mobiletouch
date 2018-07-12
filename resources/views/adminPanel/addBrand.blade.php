@extends('layouts.addProductApp')
@section('content')

<div class="container-fluid">
	<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			  <h5 class="txt-dark">New Brand</h5>
			</div>
		</div>
	<!-- /Title -->
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default card-view">
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="form-wrap">
							<form action="{{url('/addbrand')}}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									<input type="file" name="image" id="image" >
									<label class="control-label mb-10">Add new Brand</label>
									<input type="text" class="form-control" name="cat_name" placeholder="Enter new brand name" required autofocus>
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