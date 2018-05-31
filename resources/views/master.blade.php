<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Mobile Touch</title>
      <meta charset="utf-8">
      <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{{asset('flextop/css/jquery-ui.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/bootstrap.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/font-awesome.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/flexslider.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/gflexslider.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/owl.carousel.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/animate.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/style.css')}}" rel="stylesheet">

      <script src="{{asset('flextop/js/jquery.js')}}"></script>
      <script src="{{asset('flextop/js/jquery-ui.js')}}"></script>
      <script src="{{asset('flextop/js/jquery-migrate-1.2.1.min.js')}}"></script>
      <script src="{{asset('flextop/js/jquery.easing.1.3.js')}}"></script>
      <script src="{{asset('flextop/js/superfish.js')}}"></script>

      <script src="{{asset('flextop/js/jquery.flexslider.js')}}"></script>

      <script src="{{asset('flextop/js/owl.carousel.js')}}"></script>

      <script src="{{asset('flextop/js/jquery.appear.js')}}"></script>

      <script src="{{asset('flextop/js/jquery.caroufredsel.js')}}"></script>
      <script src="{{asset('flextop/js/jquery.touchSwipe.min.js')}}"></script>
      
      <script src="{{asset('flextop/js/scripts.js')}}"></script>
      <!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
      <![endif]-->
   </head>
   <body class="not-front page-listing">
      <div id="main">
   <div class="top">
      <div class="top2_wrapper">
         <div class="container">
            <div class="top2 clearfix">
               <div class="col-sm-3">
                  <header>
                     <div class="logo_wrapper">
                        <a href="index-2.html" class="logo">
                        <img src="{{asset('flextop/images/logo.png')}}" alt="" class="img-responsive">
                        </a>
                     </div>
                  </header>
               </div>
               <!-- <div class="hotline1">
                  <div class="txt1">Hotline:</div>
                  <div class="txt2">(800) 123 456 789</div>
                  </div> -->
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
                  <div class="hello1">  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                        @endguest
                    </ul>
                </div>

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
                        <li class="sub-menu sub-menu-1">
                           <a href="{{url('/')}}">Home</a>
                          
                        </li>
                          </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Slider-->
  
      @yield('content')
     
      <!--Footer-->
<div class="bot1_wrapper">
   <div class="container">
      <div class="bot1 clearfix">
         <div class="row">
            <div class="col-sm-5">
               <div class="newsletter">
                  <div class="txt1">Sign up to <span>Newsletter</span></div>
                  <div class="txt2">Get <span>30% Off</span> First Purchase!</div>
               </div>
            </div>
            <div class="col-sm-7">
               <div class="newsletter-form-wrapper clearfix">
                  <form class="clearfix">
                     <input type="text" class="form-control" placeholder="" value="Your email address" onBlur="if(this.value=='') this.value='Your email address'" onFocus="if(this.value =='Your email address' ) this.value=''">
                     <a href="#" class="">Subscribe!</a>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Footer Starts-->
<div class="bot2_wrapper">
   <div class="container">
      <div class="bot2 clearfix">
         <div class="row">
            <div class="col-sm-4">
               <div class="logo2">
                  <a href="#">
                  <img src="{{asset('flextop/images/logo2.png')}}" alt="" class="img-responsive">
                  </a>
               </div>
               <div class="contact-details">
                  <p><i class="fa fa-address-card"></i>
                     <span>Address:</span>
                     1234 Heaven Stress, Beverly Hill, Melbourne, USA.
                  </p>
                  <p><i class="fa fa-envelope"></i>
                     <span>Email:</span>
                     someone@example.com
                  </p>
                  <p><i class="fa fa-phone-square"></i>
                     <span>Phone Number:</span>
                     (0333) 1234567
                  </p>
               </div>
               <div class="download-app-text">Download Mobile Touch App:</div>
               <div class="download-app-wrapper">
                  <div class="download-app"><a href="#"><img src="{{asset('flextop/images/download01.png')}}" alt="" class="img-responsive"></a></div>
                  <div class="download-app"><a href="#"><img src="{{asset('flextop/images/download02.png')}}" alt="" class="img-responsive"></a></div>
               </div>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Information</div>
               <ul class="ul0">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">All Collection</a></li>
                  <li><a href="#">Privacy policy</a></li>
                  <li><a href="#">Terms & condition</a></li>
               </ul>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Custom Links</div>
               <ul class="ul0">
                  <li><a href="#">Phones & Tablets</a></li>
                  <li><a href="#">Home Entertainment</a></li>
                  <li><a href="#">Video Games & Toys</a></li>
                  <li><a href="#">Cameras & Drones</a></li>
                  <li><a href="#">Home, Kitchen & Tools</a></li>
               </ul>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">My Account</div>
               <ul class="ul0">
                  <li><a href="#">My orders</a></li>
                  <li><a href="#">My credit slips</a></li>
                  <li><a href="#">My addresses</a></li>
                  <li><a href="#">My personal info</a></li>
                  <li><a href="#">My vouchers</a></li>
               </ul>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Why Choose Us</div>
               <ul class="ul0">
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Investor Relations</a></li>
                  <li><a href="#">Typography</a></li>
               </ul>
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
               <div class="copyrights">Copyright &copy; <a href="#">DevDigs</a> all rights reserved. Powered by <a href="#">DEVDIGS</a></div>
            </div>
            <div class="col-sm-6">
               <div class="cards">
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment01.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment02.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment03.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment04.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment05.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment06.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment07.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Footer End-->
</div><!--Main Content Ends Here-->
</div>
     
   </body>
</html>