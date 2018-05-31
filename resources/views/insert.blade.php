<!DOCTYPE html>
<html lang="en">
<head>
<title>Flex Bootstrap responsive ecommerce template - 404 Page </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link href="css/jquery-ui.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet">
<link href="css/gflexslider.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.caroufredsel.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/scripts.js"></script>
</head>
<body class="not-front page-404">
<div id="main">
<div class="top">
  <div class="top1_wrapper">
    <div class="container">
      <div class="top1 clearfix">
        <div class="hello1">Hello Custumer - <a href="#">Login</a> or <a href="#">Register!</a></div>
        <div class="top1_block_right">
          <div class="store_location1"><a href="#">Store Location</a></div>
          <div class="track_order1"><a href="#">Track Your Order</a></div>
          <div class="settings1">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Settings<span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Profile</a></li>
              </ul>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
  
</div>
<div class="main-content">
<div class="main-content-overlay"></div>
</div>
<div class="bot2_wrapper">
  <div class="container">
    <div class="bot2 clearfix">
      <div class="row">
        <div class="col-sm-4">
          
          <div class="contact-details">
  <br>
      </div>
    </div>
  </div>
</div>

<form action="{{url('/imageStore')}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
<h2>Insert</h2>
 
 <input type="file" name="image" id="image" >
 <input type="file" name="image1" id="image1" >
 <input type="file" name="image2" id="image2" >
 <input type="file" name="image3" id="image3" >
 <input type="file" name="image4" id="image4" >
 <br>
 <br>
 <input type="text" name="img_name" id="img_name">
 
    <input type="submit" value="submit" name="submit">


</form>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
<div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
     
    </div>
  </div>
</div><!-- /.Modal Quick View -->

<!-- Modal Newsletter -->

</body>

<!-- Mirrored from template-preview.com/bootstrap-templates/flextop/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 07:22:23 GMT -->
</html>

