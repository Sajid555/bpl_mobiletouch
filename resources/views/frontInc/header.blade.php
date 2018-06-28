<div class="top">
   <div class="top2_wrapper">
      <div class="container">
         <div class="top2 clearfix">
            <div class="col-sm-3">
               <header>
                  <div class="log">
                     <a href="{{url('/')}}" class="logo">
                     <img src="{{asset('flextop/images/MTLogo.png')}}" alt="" class="img-responsive" title="Logo">
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
               
              @if (isset(Auth::user()->id))
               <div class="hello1"><a href="{{url('SignOut')}}" >Sign Out</a>
                   @if(Auth::check())  
                        {{Auth::user()->name}}
                        @endif
               </div>
               @else
               <div class="hello1">Hello Customer - <a href="{{url('/adminlogin')}}">Login</a> or <a href="{{url('/adminSignup')}}">Register</a>
               </div>
               @endif
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
                     <li class="sub-menu sub-menu-1"><a href="{{url('/')}}">Mobiles</a></li>
                     <li class="sub-menu sub-menu-1"><a href="#">Samsunng</a></li>                     
                     <li class="sub-menu sub-menu-1"><a href="#">I Phone</a></li>
                     <li class="sub-menu sub-menu-1"><a href="#">Huawei</a></li>
                     <li class="sub-menu sub-menu-1"><a href="#">Nokia</a></li>
                     <li class="sub-menu sub-menu-1"><a href="#">Oppo</a></li>
                     <li class="sub-menu sub-menu-1"><a href="#">Vivo</a></li>
                     <li class="sub-menu sub-menu-1"><a href="#">HTC</a></li>
                     <li>
                     <a href="{{url('/cart')}}">View Cart</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>