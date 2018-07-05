@extends('layouts.addProductApp')
@section('content')

<div class="container-fluid">
  <!-- Title -->
    <div class="row heading-bg">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">Add Slider Images</h5>
      </div>
    </div>
  <!-- /Title -->
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default card-view">
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <div class="form-wrap">
              <form action="{{url('/sliderImages')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="file" name="image1" id="image1">
                  <input type="file" name="image2" id="image2">
                  <input type="file" name="image3" id="image3">
                </div>
                
                <button type="Submit" class="btn  btn-primary">Submit New</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection'
