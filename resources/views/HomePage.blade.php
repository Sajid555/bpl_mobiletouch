


@extends('layouts.mainPage')
@section('content')
<div id="main">

    <!--Header/Nav-->
    @include('frontInc.header')


<div class="container">
  
  <div class="row">
   <?php  $Category=\App\Category::all();  ?>

    @foreach($Category as $c)
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/lights.jpg" target="_blank">
          <img src="{{asset('images') . '/'.$c->image}}" alt="Lights" style="width:100%">
          <div class="caption">
            <p>{{$c->cat_name}}</p>
          </div>
        </a>
      </div>
    </div>
    @endforeach
    
  </div>
</div>






@endsection