@extends('layouts.mobileapp')
@section('content')
<div id="main">
<div class="top">
   <div class="top2_wrapper">
      <div class="container">
         <div class="top2 clearfix">
            <div class="col-sm-3">
               <header>
                  <div class="logo_wrapper">
                     <a href="index-2.html" class="logo">
                     <img src="{{asset('flextop/images/logo.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
               </header>
            </div>
            <div class="col-sm-6">
               <div class="search_section_wrapper">
                  <div class="search-form-wrapper clearfix">
                     <form class="clearfix">
                        <input type="text" class="form-control" placeholder="" value="Search Here" onBlur="if(this.value=='') this.value='Search Here'" onFocus="if(this.value =='Search Here' ) this.value=''">
                        <a href="#" class="">Search</a>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="hello1">Hello Customer - <a href="#">Login</a> or <a href="#">Register</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="top3_wrapper">
      <div class="container">
         <div class="top3 clearfix">
            <div class="navbar navbar_ navbar-default">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <div class="navbar-collapse navbar-collapse_ collapse">
                  <ul class="nav navbar-nav sf-menu clearfix">
                        <li class="sub-menu sub-menu-1"><a href="{{url('/mobilelist')}}">Home</a></li>

                        <li class="sub-menu sub-menu-1"><a href="#">Samsung Phones</a></li>
                        
                        <li><a href="#">Huawei Phones</a></li>

                        <li><a href="#">Oppo Phones</a></li>

                        <li class="sub-menu sub-menu-1"><a href="#">Nokia Phones</a></li>

                        <li class=""><a href="{{url('/aboutus')}}">About Us</a></li>
                        <li><a href="{{url('/contactus')}}">Contact us</a></li>
                     </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<br>
<div class="container">
   <div class="col-md-6">
      <h2 class="page-header" style="color:#2d719d">Contact Us :</h2>
      <form class="form-horizontal">
         <div class="form-group">
            <label class="control-label col-xs-2" for="name">Name:</label>
            <div class="col-xs-10">
               <input type="text" class="form-control" id="name" placeholder="Enter your Name">
            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-xs-2" for="email">Email:</label>
            <div class="col-xs-10">
               <input type="email" class="form-control" id="email" placeholder="someone@example.com">
            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-xs-2" for="phone">Phone:</label>
            <div class="col-xs-10">
               <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
            </div>
         </div>
         <!-- <div class="form-group">
            <label class="control-label col-xs-2" for="phone">Role:</label>
            <div class="col-xs-10">
               <div class="radio">
                  <label class=" radio-inline"><input type="radio" name="optradio">Student</label>
                  <label class=" radio-inline"><input type="radio" name="optradio">Teacher</label>
                  <label class=" radio-inline"><input type="radio" name="optradio">Other</label>
               </div>
            </div>
         </div> -->
         <div class="form-group">
            <label class="control-label col-xs-2" for="city">City:</label>
            <div class="col-xs-10">
               <select class="form-control" id="city">
                  <option selected disabled>Select the City</option>
                  <option>Lahore</option>
                  <option>Multan</option>
                  <option>Islamabad</option>
                  <option>Karachi</option>
               </select>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-xs-2" for="msg">Message:</label>
            <div class="col-xs-10">
               <textarea class="form-control" rows="5" id="msg"></textarea>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-xs-2" for="msg"></label>
            <div class="col-xs-10">
               <button type="submit" class="btn btn-default center-block">Submit</button>
            </div>
         </div>
      </form>
   </div>
   <div class="col-md-6">
      <h2 class="page-header" style="color:#2d719d">Address of Our Business:</h2>
      <p>Mobile Touch, Lahore, Pakistan<br></p>
      <p><i class="fa fa-phone-square"></i> 
         Phone : 042 - 31234567
      </p>
      <p><i class="fa fa-envelope"></i> 
         E-Mail : <a href="kashanfareed@gmail.com">name@example.com</a>
      </p>
      <p><i class="fa fa-map-marker fa-lg"></i> 
         Map :
      </p>
      <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&height=300&hl=en&coord=31.5157564,74.3423759&q=Block%20E1%20Block%20E%201%20Gulberg%20III%2C%20Lahore%2C%20Punjab%2C%20Pakistan+(Hafeez%20Centre)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/custom-google-maps/">Create Google Map</a> by <a href="https://www.mapsdirections.info/en/">Measure area on map</a></iframe></div><br />
   </div>
</div>
<hr>
<div class="container">
   <div class="row">
      <div class="col-sm-12" style="text-align:center">
         <blockquote>
            <font style="font-size:12px">
               <p class="text-warning"><mark>Disclaimer :</mark> Mobile Phone Prices / price list is updated daily from local Mobile shops & Mobile dealers in Pakistan but we can't guarantee that mobile prices / price list on this page is 100% correct (Human error is possible). Always visit your local shop for exact mobile prices.</p>
            </font>
         </blockquote>
      </div>
   </div>
</div>
<br><br>
<!--Footer Starts-->
<div class="bot2_wrapper">
   <div class="container">
      <div class="bot2 clearfix">
         <div class="row">
            <div class="col-sm-6">
               <div class="logo2">
                  <a href="#">
                  <img src="{{asset('flextop/images/logo2.png')}}" alt="" class="img-responsive" title="">
                  </a>
               </div>
               <div class="contact-details">
                  <p>
                     <i class="fa fa-address-card"></i>
                     <span>Address:</span>
                     1234 Heaven Stress, Beverly Hill, Melbourne, USA.
                  </p>
                  <p>
                     <i class="fa fa-envelope"></i>
                     <span>Email:</span>
                     someone@example.com
                  </p>
                  <p>
                     <i class="fa fa-phone-square"></i>
                     <span>Phone Number:</span>
                     (0333) 1234567
                  </p>
               </div>
               <div class="download-app-text">Download Mobile Touch App:</div>
               <div class="download-app-wrapper">
                  <div class="download-app"><a href="#"><img src="{{asset('flextop/images/download01.png')}}" alt="" class="img-responsive" title=""></a></div>
                  <div class="download-app"><a href="#"><img src="{{asset('flextop/images/download02.png')}}" alt="" class="img-responsive" title=""></a></div>
               </div>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Information</div>
               <ul class="ul0">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
               </ul>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Quick Links</div>
               <ul class="ul0">
                  <li><a href="#">Smartphones</a></li>
                  <li><a href="#">Mobile & Tablet Accessories</a></li>
                  <li><a href="#">Tablets</a></li>
                  <li><a href="#">Feature Phones</a></li>
               </ul>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Join us on</div>
               <div>
                  <a href="#"><img src="{{asset('flextop/images/icons8-facebook-48.png')}}" alt=""></a>
                  <a href="#"><img src="{{asset('flextop/images/icons8-whatsapp-48.png')}}" alt=""></a>
                  <a href="#"><img src="{{asset('flextop/images/if_Instagram_1298747.png')}}" alt=""></a>
                  <a href="#"><img src="{{asset('flextop/images/icons8-google-plus-48.png')}}" alt=""></a>
                  <a href="#"><img src="{{asset('flextop/images/icons8-skype-48.png')}}" alt=""></a>
                  <a href="#"><img src="{{asset('flextop/images/icons8-twitter-48.png')}}" alt=""></a>                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="bot3_wrapper">
   <div class="container">
      <div class="bot3 clearfix">
         <div class="row">
            <div class="col-sm-6">
               <div class="copyrights">Copyright &copy; <a href="#">Mobile Touch</a> All rights reserved. Powered by <a href="#">DEVDIGS @BrainPlow</a></div>
            </div>
            <div class="col-sm-6">
               <div class="cards">
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment01.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment02.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment03.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment04.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment05.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment06.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment07.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Footer End-->
@endsection