<!-- Top Menu Items -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="mobile-only-brand pull-left">
    <div class="nav-header pull-left">
      <div class="logo-wrap">
        <a href="{{url('/admindashboard')}}">
          <img class="brand-img" src="{{asset('adminpanel/dist/img/AdminLogo.png')}}" alt="brand"/>
          <span class="brand-text">Mobile Touch</span>
        </a>
      </div>
    </div>  
    <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
    <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
    <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
    <form id="search_form" role="search" class="top-nav-search collapse pull-left">
      <div class="input-group">
        <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
        <span class="input-group-btn">
        <button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
        </span>
      </div>
    </form>
  </div>
  <div id="mobile_only_nav" class="mobile-only-nav pull-right">
    <ul class="nav navbar-right top-nav pull-right">

      <li class="dropdown full-width-drp">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more-vert top-nav-icon"></i></a>
        <ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
          <li class="product-nicescroll-bar row">
            <ul class="pa-20">
              <li class="col-md-6 col-xs-12 col-menu-list">
                <a class="active" href="{{url('/admindashboard')}}"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                <hr class="light-grey-hr ma-0"/>
                
                <a href="javascript:void(0);"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Product Management</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                <ul>
                  <li>
                    <a href="{{url('/brands')}}">Brands</a>
                  </li>
                  <li>
                    <a href="{{url('/addproducts')}}">Add Product</a>
                  </li>
                  <li>
                    <a href="{{url('/addbrand')}}">Add Brand</a>
                  </li>
                  <li>
                    <a href="{{url('/addmodel')}}">Add Model</a>
                  </li>
                  <li>
                    <a href="{{url('/orders')}}">Orders</a>
                  </li>
                </ul>

                <hr class="light-grey-hr ma-0"/>
              </li>

              <li class="col-md-6 col-xs-12 preview-carousel">
                <a href="javascript:void(0);"><div class="pull-left"><span class="right-nav-text">Latest Products</span></div><div class="clearfix"></div></a>
                <hr class="light-grey-hr ma-0"/>
                <div class="product-carousel owl-carousel owl-theme text-center">
                  <a href="#">
                    <img src="{{asset('adminpanel/dist/img/chair.jpg')}}" alt="chair">
                    <span>Brand/Model name</span>
                  </a>
                  <a href="#">
                    <img src="{{asset('adminpanel/dist/img/chair2.jpg')}}" alt="chair">
                    <span>Brand/Model name</span>
                  </a>
                  <a href="#">
                    <img src="{{asset('adminpanel/dist/img/chair3.jpg')}}" alt="chair">
                    <span>Brand/Model name</span>
                  </a>
                  <a href="#">
                    <img src="{{asset('adminpanel/dist/img/chair4.jpg')}}" alt="chair">
                    <span>Brand/Model name</span>
                  </a>                
                </div>
              </li>
            </ul>
          </li> 
        </ul>
      </li>

      <li class="dropdown auth-drp">
        <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{asset('adminpanel/dist/img/user1.png')}}" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
        <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
          <li>
            <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
          </li>
          <li>
            <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
          </li>
          <li class="divider"></li>
          <li class="sub-menu show-on-hover">
            <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
            <ul class="dropdown-menu open-left-side">
              <li>
                <a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
              </li>
              <li>
                <a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
              </li>
              <li>
                <a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
              </li>
            </ul> 
          </li>
          <li class="divider"></li>
          <li>
            @if (isset(Auth::user()->id))
               <div class="hello1"><a href="{{url('SignOut')}}" >Sign Out</a>
                   @if(Auth::check())  
                        {{Auth::user()->name}}
                        @endif
               </div>
             
               @endif
          </li>
        </ul>
      </li>
    </ul>
  </div>  
</nav>
<!-- /Top Menu Items -->