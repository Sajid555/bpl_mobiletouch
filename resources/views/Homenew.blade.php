
@extends('master')

@section('content')
<html>
<body>
    <center>
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
<div>
    <div class="form-group" style="padding-left: 500px">
    <label><h1> Dashboard </h1></label>
    
  </div>
</div>





<ul>
  <li><a href="{{url('/show')}}">Home</a></li>
  <li><a href="{{url('/addproduct')}}">Add Product</a></li>
  <li><a href="{{url('/AddBrand')}}">Add Brand</a></li>
  <li><a href="{{url('/AddCategory')}}">Add Category</a></li>
  <li><a href="{{url('/viewtable')}}">Show total inserted products</a></li>
<li><a href="#about">About</a></li>

</ul>
<style>
    ul {
    list-style-type: none;
    margin: 0;
    padding-left: 500px;
}
li a {
    display: block;
    color: #000;
    padding: 8px 8px;
    text-decoration: none;
}
li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>







            </div>
       </div>
    </div>
</div>
</center>
</body>
</html>
@endsection