<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from template-preview.com/bootstrap-templates/flextop/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 07:21:32 GMT -->
    <head>
        <title>Shopping Cart I Mobile Touch</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="not-front page-shopping-cart">

        <div id="main">
            <!--Header/Nav-->
            @include('frontInc.header')
            <!--Header/Nav-->
            <div class="main-content">
                <div class="main-content-overlay"></div>

                
                <div class="main-content-inner">

                    <div id="content">

                        <div class="container">

                            <div class="table-responsive table-responsive1">
                               @if(!empty($data))
                                <table class="table table1">
                                    <thead>
                                        <tr>
                                            <th class="col1">Product Name</th>
                                            <th class="col2">Price</th>
                                            <!-- <th class="col3">Quantity</th> -->
                                            <th class="col4">Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['Products'] as $p )
                                        <tr>
                                            <td>
                                                <div class="product-shopping-cart clearfix">
                                                    <figure>
                                                        @if(isset($p->image))
                                                        <img src= "{{asset('images') . '/'.$p->image}}" class="img-responsive">
                                                        @else
                                                        <img class="img-responsive" src="https://image.ibb.co/kk9GY8/shopping_cart.png">
                                                        @endif
                                                    </figure>
                                                   
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-shopping-cart-price">Rs: {{$p->price}}</div>
                                            </td>
                                           
                                            <td>
                                                <div class="product-shopping-cart-total-price">
                                                    Rs: {{$p->price}}
                                                    <button type="button" class="close" aria-label="Close">
                                                       
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach        
                                    </tbody>
                                </table>
                            </div>
                            <div class="pane3 clearfix">
                                <div class="apply-coupon">
                                    <form class="clearfix">
                                        <a href="{{route('clearCart')}}" class="">Clear Cart</a>
                                 </div>
                                <div class="update-shopping-cart">
                                    <a href="{{route('checkout')}}">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                                 <div> Your cart is empty </div>
                                 @endif
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
                @include('frontInc.footer')
                <!--Footer End-->
                
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>