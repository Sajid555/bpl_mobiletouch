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
                           <a href="#" target="_blank" class="">Search</a>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-sm-3">
                  <div class="hello1">Hello Customer - <a href="#" target="_blank">Login</a> or <a href="#" target="_blank">Register</a>
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
      <div class="row">
         <div class="col-lg-12">
            <h4 class="page-header" style="color:#2d719d">About Our Business :</h4>
            <b>Why Mobile Shop?</b><br><br>
            <i>Shopping that helps you make the right choice.</i><br><br>
            <p>Mobile Shop offers you a shopping experience that is unparalleled in Pakistan. We bring sellers from different locations from across diverse product ranges and buyers from all over Pakistan, together, in a unique digital marketplace. Our wide assortment in consumer electronics (Cell Phones) ranges makes us an exclusive one stop shop shop for easy buying. Customers can view product details and images in order to choose the right product, at the convenience of only a few clicks.</p>
            <br><br>
            <i>Mobile Shop – the 24x7 Online Marketplace for everything</i><br><br>
            <p>We bring together leading sellers for various product types together at one place so that all your retail needs can be conveniently and competitively fulfilled. As a customer you have the liberty to compare a product sold by a number of different vendors and choose one which is best suited to your needs and budget. Browse to access our products, at any time of the day, from the comfort of your home, office, or on the go.</p>
         </div>
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
</div>