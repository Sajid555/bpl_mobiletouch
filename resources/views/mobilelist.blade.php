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
                        <img src="{{asset('flextop/images/logo.png')}}" alt="" class="img-responsive" title="Logo">
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
                        <li class="sub-menu sub-menu-1">
                           <a href="listing.html">Computer & Laptop</a>
                           <div class="sf-mega">
                              <ul class="sf-mega-ul">
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">iMac Computers</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="listing.html">Fashion Scarves</a></li>
                                       <li><a href="listing.html">Wallets</a></li>
                                       <li><a href="listing.html">Evening Handbags</a></li>
                                       <li><a href="listing.html">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">Makbooks</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="#" target="_blank">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">Windows Computers</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="#" target="_blank">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">Laptops</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="#" target="_blank">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-image">
                                    <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu-computer.jpg')}}" alt="" class="img-responsive" title=""></div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="sub-menu sub-menu-1">
                           <a href="listing.html">TV & Audios</a>
                           <div class="sf-mega">
                              <ul class="sf-mega-ul">
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">TV Samsung</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">TV Philips</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">Lorem Audio</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">Lorem Sound Audio</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-image">
                                    <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu-audio.jpg')}}" alt="" class="img-responsive" title=""></div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li><a href="#" target="_blank">Smartphone & Tablets</a></li>
                        <li><a href="#" target="_blank">Games & Consoles</a></li>
                        <li class="sub-menu sub-menu-1">
                           <a href="listing.html">Accessories</a>
                           <div class="sf-mega">
                              <ul class="sf-mega-ul">
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">TV Samsung</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">TV Philips</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">Lorem Audio</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">Lorem Sound Audio</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                       <li><a href="#" target="_blank">Wallets</a></li>
                                       <li><a href="#" target="_blank">Evening Handbags</a></li>
                                       <li><a href="#" target="_blank">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-image">
                                    <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu01.jpg')}}" alt="" class="img-responsive" title=""></div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="sub-menu sub-menu-2">
                           <a href="#" target="_blank">Pages <span class="caret"></span></a>
                           <div class="sf-mega">
                              <ul>
                                 <li>
                                    <a href="index-2.html">Home Page <i class="fa fa-caret-right gridgumright" aria-hidden="true"></i></a>
                                    <div class="sf-mega">
                                       <ul>
                                          <li><a href="index-2.html">Home version 1</a></li>
                                          <li><a href="index-3.html">Home version 2</a></li>
                                          <li><a href="index-4.html">Home version 3</a></li>
                                          <li><a href="index-5.html">Home version 4</a></li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li><a href="listing.html">Product Listing Page</a></li>
                                 <li><a href="product-details.html">Product Description Page</a></li>
                                 <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                 <li><a href="checkout.html">Checkout Page</a></li>
                                 <li>
                                    <a href="blog.html">Blog <i class="fa fa-caret-right gridgumright" aria-hidden="true"></i></a>
                                    <div class="sf-mega">
                                       <ul>
                                          <li><a href="blog.html">Blog Left Sidebar</a></li>
                                          <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                          <li><a href="post.html">Post Left Sidebar</a></li>
                                          <li><a href="post-right.html">Post Right Sidebar</a></li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li><a href="contact-us.html">Contact Us</a></li>
                                 <li><a href="404.html">404 Page</a></li>
                              </ul>
                           </div>
                        </li>
                        <li><a href="contact-us.html">Contact us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br>
   <!--Slider-->
   <!-- <div class="gslider-wrapper">
      <div id="gslider2" class="flexslider flexslider-gslider">
         <ul class="slides"> -->
   <div class="container">
      <div class="row">
         <div class="col-sm-1"></div>
         <div class="col-sm-10">
            <div id="slider_wrapper">
               <div id="slider">
                  <div id="flexslider">
                     <ul class="slides clearfix">
                        <li>
                           <img src="{{asset('flextop/images/galaxy S7 edge.jpg')}}" alt="">
                        </li>
                        <li>
                           <img src="{{asset('flextop/images/huawei mate 9.jpg')}}" alt="">
                        </li>
                        <li>
                           <img src="{{asset('flextop/images/iphone x.jpg')}}" alt="">
                        </li>
                     </ul>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!--Slider End-->
<!--Main Content Starts-->
<div class="main-content">
   <div class="main-content-overlay"></div>
   <div class="main-content-inner">
      <div id="content">
         <div class="container">
            <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-2 column-sidebar">
                  <div class="sidebar-block">
                     <div class="sidebar-title">
                        Categories
                     </div>
                     <div class="sidebar-content">
                        <ul class="ul1">
                           @foreach ($category as $get)
                           <li><a href="#" target="_blank"><input type="checkbox" name="category" value="">   {{$get->name}}</a></li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
                  <div class="sidebar-block">
                     <div class="sidebar-title">
                        Filter By
                     </div>
                     <div class="sidebar-content">
                        <div class="sidebar-filters">
                           <div class="sidebar-filters-title">Price</div>
                           <div class="slider-range-txt">Range:  <span>$100.00 - $1.700.00</span></div>
                           <div id="slider-range"></div>
                           <div class="slider-range-text clearfix">
                              <input type="text" id="amount" readonly>
                              <input type="text" id="amount2" readonly>
                           </div>
                           <div><a href="#" target="_blank" class="btn-default btn1">Filter</a></div>
                           <br>
                           <div class="sidebar-filters-title">Brands</div>
                           <ul class="ul2">
                              <li><a href="#" target="_blank">Samsung <span>(09)</span></a></li>
                              <li><a href="#" target="_blank">Huawei <span>(02)</span></a></li>
                              <li><a href="#" target="_blank">Apple <span>(10)</span></a></li>
                              <li><a href="#" target="_blank">Nokia <span>(12)</span></a></li>
                              <li><a href="#" target="_blank">Sony <span>(6)</span></a></li>
                              <li><a href="#" target="_blank">HTC <span>(8)</span></a></li>
                              <li><a href="#" target="_blank">OPPO <span>(15)</span></a></li>
                           </ul>
                           <br>
                           <!-- <div class="sidebar-filters-title">Color</div>
                              <form>
                                 <div class="checkbox1-custom-item color1">
                                    <input id="checkbox-1" class="checkbox1-custom" name="checkbox-1" type="checkbox">
                                    <label for="checkbox-1" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color2">
                                    <input id="checkbox-2" class="checkbox1-custom" name="checkbox-2" type="checkbox">
                                    <label for="checkbox-2" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color3">
                                    <input id="checkbox-3" class="checkbox1-custom" name="checkbox-3" type="checkbox" checked>
                                    <label for="checkbox-3" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color4">
                                    <input id="checkbox-4" class="checkbox1-custom" name="checkbox-4" type="checkbox">
                                    <label for="checkbox-4" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color5">
                                    <input id="checkbox-5" class="checkbox1-custom" name="checkbox-5" type="checkbox">
                                    <label for="checkbox-5" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color6">
                                    <input id="checkbox-6" class="checkbox1-custom" name="checkbox-6" type="checkbox">
                                    <label for="checkbox-6" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color7">
                                    <input id="checkbox-7" class="checkbox1-custom" name="checkbox-7" type="checkbox">
                                    <label for="checkbox-7" class="checkbox1-custom-label"></label>
                                 </div>
                              </form>
                              <div class="sidebar-filters-title">Size</div>
                              <form>
                                 <div class="checkbox2-custom-item">
                                    <input id="checkbox2-1" class="checkbox2-custom" name="checkbox2-1" type="checkbox">
                                    <label for="checkbox2-1" class="checkbox2-custom-label">S</label>
                                 </div>
                                 <div class="checkbox2-custom-item">
                                    <input id="checkbox2-2" class="checkbox2-custom" name="checkbox2-2" type="checkbox">
                                    <label for="checkbox2-2" class="checkbox2-custom-label">M</label>
                                 </div>
                                 <div class="checkbox2-custom-item">
                                    <input id="checkbox2-3" class="checkbox2-custom" name="checkbox2-3" type="checkbox" checked>
                                    <label for="checkbox2-3" class="checkbox2-custom-label">L</label>
                                 </div>
                                 <div class="checkbox2-custom-item">
                                    <input id="checkbox2-4" class="checkbox2-custom" name="checkbox2-4" type="checkbox">
                                    <label for="checkbox2-4" class="checkbox2-custom-label">XL</label>
                                 </div>
                                 <div class="checkbox2-custom-item">
                                    <input id="checkbox2-5" class="checkbox2-custom" name="checkbox2-5" type="checkbox">
                                    <label for="checkbox2-5" class="checkbox2-custom-label">XXL</label>
                                 </div>
                              </form> -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-8 column-content">
                  <div id="second-tab-group" class="tabgroup">
                     <div id="tabs2-1">
                        <div class="row">
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung j7 pro.jpg')}}" alt="" class="img-responsive" title="Samsung J7 Pro"></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung<br>Galaxy J7 Pro</a></div>
                                       <div class="product-price">Rs.34,500</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old">-5.5 Inch<br>-3GB/32GB Memory<br>-13MP/13MP<br>-3600mAh</div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung-galaxy-note-8-sm-n950.jpg')}}" alt="" class="img-responsive" title="Samsung Note 8"></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung<br>Galaxy Note 8</a></div>
                                       <div class="product-price">Rs.99,999</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-new">New!</div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung s9.jpg')}}" alt="" class="img-responsive" title="Samsung S9"></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung<br>Galaxy S9</a></div>
                                       <div class="product-price">Rs.91,000</div>
                                       <div class="product-prices clearfix">
                                          <!-- <div class="product-price-old"></div> -->
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-sale">Sale</div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/nokia 3310.jpg')}}" alt="" class="img-responsive" title="Nokia 3310 (2017)"></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Nokia<br>3310</a></div>
                                       <div class="product-price">Rs.6,490</div>
                                       <div class="product-prices clearfix">
                                          <!-- <div class="product-price-old"></div> -->
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/nokia 8.jpg')}}" alt="" class="img-responsive" title="Nokia 8"></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Nokia<br>8</a></div>
                                       <div class="product-price">Rs.49,990</div>
                                       <div class="product-prices clearfix">
                                          <!-- <div class="product-price-old"></div> -->
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/appleiphoneX.jpg')}}" alt="" class="img-responsive" title="Apple iPhone X"></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="#" target="_blank">Apple<br>iPhone X</a></div>
                                       <div class="product-price">Rs.125,999</div>
                                       <div class="product-prices clearfix">
                                          <!-- <div class="product-price-old"></div> -->
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/huawei-honor-10.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name">
                                          <a href="#" target="_blank">Huawei<br>Honor 10</a>
                                       </div>
                                       <div class="product-price">Coming Soon</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/oppo-f7.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">OPPO<br>F7</a></div>
                                       <div class="product-price">Rs.49,899</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/nokia-n1.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Nokia<br>N1</a></div>
                                       <div class="product-price">Rs.32,500</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-sale"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/huawei-mate-rs-porsche-design.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Huawei<br>Mate Porsche</a></div>
                                       <div class="product-price">Rs.142,499</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/apple-iphone-5se.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Apple<br>iPhone SE</a></div>
                                       <div class="product-price">Rs.31,999</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-sale"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/nokia-7-plus.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Nokia<br>7 Plus</a></div>
                                       <div class="product-price">Expected Price<br>Rs.46,500</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung-galaxy-tab-a-8-0-2017.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung Galaxy Tab A 8.0 (2017)</a></div>
                                       <div class="product-price">Rs.28,000</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-sale"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/apple-ipad-97-2018.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Apple<br>iPad 9.7 (2018)</a></div>
                                       <div class="product-price">Rs.54,999</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-new"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung-galaxy-tab-s3-97-sm-t825.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung Galaxy Tab S3 9.7</a></div>
                                       <div class="product-price">Rs.63,500</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/huawei-mate10-porshe-design-.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Huawei<br>Mate 10 Porsche</a></div>
                                       <div class="product-price">Rs.182,299</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-sale"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/apple-iphone-7-plus.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Apple<br>iPhone 7 Plus</a></div>
                                       <div class="product-price">Rs.82,999</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-new"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung-galaxy-a8-plus-a730f.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung Galaxy A8+ (2018)</a></div>
                                       <div class="product-price">Rs.63,999</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-sale"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/oppo-f5-youth-a73.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">OPPO<br>F5 Youth</a></div>
                                       <div class="product-price">Rs.27,899</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-new"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung-galaxy-s9-plus-blue.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung Galaxy S9 Plus</a></div>
                                       <div class="product-price">Rs.111,000</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung-galaxy-j5-2017-sm-j530.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung Galaxy J5 (2017)</a></div>
                                       <div class="product-price">Rs.30,200</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-sale"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung-galaxy-note5.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung Galaxy Note 5</a></div>
                                       <div class="product-price">Rs.46,999</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-new"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung-galaxy-note-8-sm-n950.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung Galaxy Note 8</a></div>
                                       <div class="product-price">Rs.99,999</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/huawei-p20-pro.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Huawei<br>P20 Pro</a></div>
                                       <div class="product-price">Expected Price<br>Rs.120,000</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-sale"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/apple-iphone-5s.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Apple<br>iPhone 5s</a></div>
                                       <div class="product-price">Rs.25,799</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/huawei-mate10-pro.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Huawei<br>Mate 10 Pro</a></div>
                                       <div class="product-price">Rs.87,999</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/apple-iphone-6.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Apple<br>iPhone 6</a></div>
                                       <div class="product-price">Rs.43,999</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <div class="product-card product-sale"></div>
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/samsung-a3.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Samsung Galaxy A3</a></div>
                                       <div class="product-price">Discontinued</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/nokia2.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Nokia<br>2</a></div>
                                       <div class="product-price">Rs.12,470</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/apple-iphone-6s.jpg')}}" alt="" class="img-responsive" title=""></a>
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <div class="product-name"><a href="product-details.html">Apple<br>iPhone 6s</a></div>
                                       <div class="product-price">Rs.54,500</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old"></div>
                                       </div>
                                       <div class="product-add-to-cart"><a href="#" target="_blank">Add to Cart</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-1"></div>
            <div class=" col-sm-10 pane2 clearfix">
               <ul class="pager clearfix">
                  <li class="active"><a href="#" target="_blank">1</a></li>
                  <li class="li"><a href="#" target="_blank">2</a></li>
                  <li class="li"><a href="#" target="_blank">3</a></li>
                  <li class="next"><a href="#" target="_blank"></a></li>
               </ul>
               <div class="showing-results">Showing 1-36 <span>of 100 results</span></div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="container">
   <!--Top Brands-->
   <div class="title1">Top Brands</div>
   <div class="owl-carousel owl-carousel-wide">
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand1.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand2.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand3.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand4.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand5.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand6.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand7.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand8.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand9.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand10.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand11.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand12.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand13.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand14.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Top Brands End-->
<!--Footer Starts-->
<div class="bot2_wrapper">
   <div class="container">
      <div class="bot2 clearfix">
         <div class="row">
            <div class="col-sm-6">
               <div class="logo2">
                  <a href="#" target="_blank">
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
                  <div class="download-app"><a href="#" target="_blank"><img src="{{asset('flextop/images/download01.png')}}" alt="" class="img-responsive" title=""></a></div>
                  <div class="download-app"><a href="#" target="_blank"><img src="{{asset('flextop/images/download02.png')}}" alt="" class="img-responsive" title=""></a></div>
               </div>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Information</div>
               <ul class="ul0">
                  <li><a href="#" target="_blank">About Us</a></li>
                  <li><a href="#" target="_blank">Contact Us</a></li>
                  <li><a href="#" target="_blank">Privacy Policy</a></li>
                  <li><a href="#" target="_blank">Terms & Conditions</a></li>
               </ul>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Quick Links</div>
               <ul class="ul0">
                  <li><a href="#" target="_blank">Smartphones</a></li>
                  <li><a href="#" target="_blank">Mobile & Tablet Accessories</a></li>
                  <li><a href="#" target="_blank">Tablets</a></li>
                  <li><a href="#" target="_blank">Feature Phones</a></li>
               </ul>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Join us on</div>
               <div>
                  <a href="#" target="_blank"><img src="{{asset('flextop/images/icons8-facebook-48.png')}}" alt="" title="Like Us"></a>
                  <a href="#" target="_blank"><img src="{{asset('flextop/images/icons8-whatsapp-48.png')}}" alt="" title="Whatsapp"></a>
                  <a href="#" target="_blank"><img src="{{asset('flextop/images/if_Instagram_1298747.png')}}" alt="" title="Instagram"></a>
                  <a href="#" target="_blank"><img src="{{asset('flextop/images/icons8-google-plus-48.png')}}" alt="" title="Google+"></a>
                  <a href="#" target="_blank"><img src="{{asset('flextop/images/icons8-skype-48.png')}}" alt="" title="Skype"></a>
                  <a href="#" target="_blank"><img src="{{asset('flextop/images/icons8-twitter-48.png')}}" alt="" title="Twitter"></a>              
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
               <div class="copyrights">Copyright &copy; <a href="#" target="_blank">Mobile Touch</a> All rights reserved. Powered by <a href="#" target="_blank">DEVDIGS @BrainPlow</a></div>
            </div>
            <div class="col-sm-6">
               <div class="cards">
                  <div class="card">
                     <a href="#" target="_blank"><img src="{{asset('flextop/images/payment01.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#" target="_blank"><img src="{{asset('flextop/images/payment02.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#" target="_blank"><img src="{{asset('flextop/images/payment03.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#" target="_blank"><img src="{{asset('flextop/images/payment04.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#" target="_blank"><img src="{{asset('flextop/images/payment05.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#" target="_blank"><img src="{{asset('flextop/images/payment06.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#" target="_blank"><img src="{{asset('flextop/images/payment07.png')}}" alt="" class="img-responsive" title="">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Footer End-->
</div><!--main-content Ends Here-->
</div><!--main end here-->
@endsection