





@extends('layouts.mainPage')
@section('content')
<div id="main">
   
   <!--Header/Nav-->
   @include('frontInc.header')
   <br>
   <!--Slider-->
   <div class="container" style="height: 260px;">
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
                        Brands
                     </div>
                     <form method="POST" action="{{url('/filter')}}">
                        {{ csrf_field() }}
                        <div class="sidebar-content">
                           <div class="brandscroll">
                              <?php
                                 $categry = \App\Category::all();
                                 ?>
                              @foreach($categry as $cats)
                              <input type="checkbox" name="category[]" value="{{$cats->id}}"> {{$cats->cat_name}}<br>
                              @endforeach
                           </div>
                        </div>
                  </div>
                    <div class="sidebar-block">
                     <div class="sidebar-title">
                        SIM
                     </div>
                        <div class="sidebar-content">
                           <div class="brandscroll">
                              <?php
                                 $product = \App\Product::all();
                                 ?>
                           
                              <input type="checkbox" name="SIM" value="Dual Sim, Dual Standby (Nano-SIM)"> Dual Sim<br>
                             <input type="checkbox" name="SIM" value="Single SIM (Nano-SIM)"> Single Sim  <br>
                           </div>
                        </div>
                  </div>
                  <div class="sidebar-block">
                     <div class="sidebar-title">
                        Primary Camera
                     </div>
                        <div class="sidebar-content">
                           <div class="brandscroll">
                              <?php
                                 $product = \App\Product::all();
                                 ?>
                              
                              <input type="checkbox" name="Primary" value="">3MP-5MP <br>
                              <input type="checkbox" name="Primary" value="12 MP (f/1.75) + 12 MP (f/2.6), dual-LED dual-tone flash, autofocus">8MP-13MP<br>
                              <input type="checkbox" name="Primary" value="Dual: 16 MP + 5 MP, f/2.0, phase detection autofocus, dual-LED flash">14MP-16MP<br>
                              <input type="checkbox" name="Primary" value="23 MP (f/2.0) + 23 MP (f/2.6), dual-LED dual-tone flash, autofocus">17MP-21MP<br>
                              
                           </div>
                        </div>
                  </div>
                  <div class="sidebar-block">
                     <div class="sidebar-title">
                        Front Camera
                     </div>
                        <div class="sidebar-content">
                           <div class="brandscroll">
                              
                              <input type="checkbox" name="Front" value="1.2 MP (f/2.2, 31mm), 720p@30fps, face detection, HDR, FaceTime over Wi-Fi or Cellular - 5 MP, f/2.2">1MP-5MP
                               <br>
                              <input type="checkbox" name="Front" value="5.1 MP, f/2.4, 1080p, HDR - 8 MP (f/2.0, 26mm, 1/3.2, 1.4µm), autofocus, 1080p">6MP-12MP
                              <br>
                              <input type="checkbox" name="Front" value="Dual: 16 MP + 5 MP, f/2.0, phase detection autofocus, dual-LED flash">13MP-16MP
                              <br>
                              <input type="checkbox" name="Front" value="24 MP, f/2.0, 1080p - 25 MP, f/2.0, 1080p ">17MP-25MP<br>
                           </div>
                        </div>
                  </div>
                    <div class="sidebar-block">
                     <div class="sidebar-title">
                        Internal
                     </div>
                        <div class="sidebar-content">
                           <div class="brandscroll">
                              <input type="checkbox" name="Internal" value="16/32/64/128 GB -16/32 GB"> 8GB - 16GB<br>
                              <input type="checkbox" name="Internal" value="16/32 GB-32GB built in-16/32/64/128 GB"> 32GB - 64GB<br>
                              
                              <input type="checkbox" name="Internal" value="32GB built in-64 GB + 64/128 GB"> 128GB - 256GB<br>
                             
                           </div>
                        </div>
                  </div>
                  <div class="sidebar-block">
                     <div class="sidebar-title">
                        Oprating System
                     </div>
                        <div class="sidebar-content">
                           <div class="brandscroll">
                             <input type="checkbox" name="OS" value="Android 8.0 (Oreo)-Android V8.1 Oreo  "> Android V8.1 Oreo  <br>
                              <input type="checkbox" name="OS" value="Android 7.1.1 (Nougat)-Android 7.1.1 (Nougat)"> Android 7.1.1 (Nougat)<br>
                              
                              <input type="checkbox" name="OS" value="Android 5.1.1 (Lollipop), upgradable to 7.1.1 (Nougat)-Android 6.0.1 (Marshmallow), upgradable to 7.0 (Nougat)"> Android 5.1.1 (Lollipop) - Android 6.0.1 (Marshmallow)<br>
                              <input type="checkbox" name="OS" value="iOS 11.1.1, upgradable to iOS 11.3-iOS 11.1.1, upgradable to iOS 11.3"> iOS 11.1.1, upgradable to iOS 11.3<br>
                           </div>
                        </div>
                  </div>
                    <div class="sidebar-block">
                     <div class="sidebar-title">
                        Display_type
                     </div>
                        <div class="sidebar-content">
                           <div class="brandscroll">
                              <?php
                                 $product = \App\Product::all();
                                 ?>   
                              @foreach($product as $p)
                              <input type="checkbox" name="display_type" value="{{$cats->display_type}}"> {{$p->display_type}}<br>
                              @endforeach
                           </div>
                        </div>
                  </div>
                   <div class="sidebar-block">
                     <div class="sidebar-title">
                        Resolution
                     </div>
                        <div class="sidebar-content">
                           <div class="brandscroll">
                              <?php
                                 $product = \App\Product::all();
                                 ?>   
                              @foreach($product as $p)
                              <input type="checkbox" name="Resolution" value="{{$p->Resolution}}"> {{$p->Resolution}}<br>
                              @endforeach
                           </div>
                        </div>
                  </div>
                   <div class="sidebar-block">
                     <div class="sidebar-title">
                        Ram
                     </div>
                        <div class="sidebar-content">
                           <div class="brandscroll">
                              <?php
                                 $product = \App\Product::all();
                                 ?>   
                              @foreach($product as $p)
                              <input type="checkbox" name="RAM" value="{{$p->RAM}}"> {{$p->RAM}}<br>
                              @endforeach
                           </div>
                        </div>
                  </div>
                   <div class="sidebar-block">
                     <div class="sidebar-title">
                        Protection
                     </div>
                        <div class="sidebar-content">
                           <div class="brandscroll">
                              <?php
                                 $product = \App\Product::all();
                                 ?>   
                              @foreach($product as $p)
                              <input type="checkbox" name="Protection" value="{{$p->Protection}}"> {{$p->Protection}}<br>
                              @endforeach
                           </div>
                        </div>
                  </div>
                   

                  <div class="sidebar-block">
                  <div class="sidebar-title">
                
                  </div>
                  <div class="sidebar-content">
                  <div class="sidebar-filters">
                  <div class="sidebar-filters-title">Batery</div><br>
                  <select name="Capacity">
                  <option value="0">Batery</option>
                  <option value="1000-1500">1000mAh-1500mAh</option>
                  <option value="1501-2499">1501mAh-2499mAh</option>
                  <option value="2500-2999">2500mAh-2999mAh</option>
                  <option value="3000-3499">3000mAh-3499mAh</option>
                  <option value="3500-40000">3500mAh-40000mAh</option>
                  </select>
                 
                  <div class="form-group">
                  <br>
                  <button type="Submit" class="btn-default btn1" value="Submit">Submit</button>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="sidebar-block">
                  <div class="sidebar-title">
                  Filter By
                  </div>
                  <div class="sidebar-content">
                  <div class="sidebar-filters">
                  <div class="sidebar-filters-title">Price</div><br>
                  <select name="price">
                  <option value="0">Price Range</option>
                  <option value="0-2000">Rs.0-Rs.2000</option>
                  <option value="2001-5000">Rs.2001-Rs.5000</option>
                  <option value="5001-10000">Rs.5001-Rs.10000</option>
                  <option value="10001-20000">Rs.10001-Rs.20000</option>
                  <option value="20001-40000">Rs.20001-Rs.40000</option>
                  </select>
                 
                  <div class="form-group">
                  <br>
                  <button type="Submit" class="btn-default btn1" value="Submit">Submit</button>
                  </div>
                  </div>
                  </div>
                  </div></form>
               </div>
               <div class="col-sm-8 column-content">
                  @if(Session::has('error_message'))
                  <?php dd('here');?>
                  <div class="alert alert-danger">
                     <strong>Error!</strong> {{Session::get('error_message')}}
                  </div>
                  @endif
                  @if(Session::has('success_message'))
                  <div class="alert alert-success">
                     <strong>Success!</strong> {{Session::get('success_message')}}
                  </div>
                  @endif
                  <div id="second-tab-group" class="tabgroup">
                     <div id="tabs2-1">
                        <div class="row col-md-12">
                           <?php $count=1;?>
                           @foreach($prodct as $book)
                           @if($count==7)
                           <?php $htmlCode='</div> <div class="row col-md-12">';
                              echo $htmlCode;
                              echo '<div class="col-md-2">
                                       <div class="product">
                                          <div class="product-inner">
                                             <figure class="product-media">
                                                <a href="'; ?>{{route('details',['id'=>$book->id])}} <?php  echo '">'; ?>
                           @if(isset($book->image))
                           <?php echo '<img  src="';?>
                           {{asset('images') . '/'.$book->image}}
                           <?php echo '" alt="" class="img-responsive">'; ?>
                           @else
                           <?php echo '<img style="min-width: 63px; min-height: 84px"  src="https://image.ibb.co/kk9GY8/shopping_cart.png" alt="shopping_cart" border="0">'; ?>
                           @endif
                           <?php
                              echo ' </a>
                              </figure>
                              <div class="product-divider"></div>
                              <div class="product-caption">
                              <a href="';                   
                               ?>
                           {{route('details',['id'=>$book->id])}} 
                           <?php echo '">
                              <div class="product-name">
                                    <label value="'; ?>
                           {{$book->brand_id}}
                           <?php echo'"'; ?> 
                           <?php
                              $productName = DB::table('brands')->where('id', '=', $book->brand_id)->get();
                              echo $productName[0]->brand_name;
                              echo '
                              </label>
                              </a>
                              </div>
                              <div class="product-price">'; echo "Rs."; ?>
                           {{$book->price}}
                           <?php echo '
                              </div>
                              <div class="product-prices clearfix">
                                 <div class="product-price-old">
                                    <a href="';
                                    ?>
                           {{route('addToCart' , ['id' => $book->id])}}
                           <?php echo'" class="btn btn-primary " value="submit">Add to Cart</a>
                              </div>
                              </div>
                              </div>
                              </div>
                              </div>';    
                              $count=2;
                              ?>
                           @else
                           <div class="col-md-2">
                              <div class="product">
                                 <div class="product-inner">
                                    <figure class="product-media">
                                       <a href="{{route('details',['id'=>$book->id])}}">
                                       @if(isset($book->image))
                                       <img src="{{asset('images') . '/'.$book->image}}" alt="" class="img-responsive">
                                       @else
                                       <img style="min-width: 63px; min-height: 84px" src="https://image.ibb.co/kk9GY8/shopping_cart.png" alt="shopping_cart" border="0">
                                       @endif
                                       </a>
                                       
                                    </figure>
                                    <div class="product-divider"></div>
                                    <div class="product-caption">
                                       <a href="{{route('details',['id'=>$book->id])}}">
                                          <div class="product-name">
                                             <label value="{{$book->brand_id}}"> 
                                             <?php
                                                $productName = DB::table('brands')->where('id', '=', $book->brand_id)->get();
                                                echo $productName[0]->brand_name;
                                                ?>
                                             </label>
                                       </a>
                                       </div>
                                       <div class="product-price"><?php echo "Rs."; ?>{{$book->price}}</div>
                                       <div class="product-prices clearfix">
                                          <div class="product-price-old">{{$book->Size}}<br>{{$book->Internal}}<br>-{{$book->Capacity}}</div>
                                       </div>
                                       <div class="product-prices clearfix">
                                          <div class="">
                                             <a href="{{route('addToCart' , ['id' => $book->id])}}" class="btn btn-primary " value="submit">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <?php $count=$count+1; ?>
                              @endif
                           </div>
                           @endforeach
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <div class="col-sm-1"></div>
            <div class=" col-sm-10 pane2 clearfix">
               <ul class="pager clearfix">
               </ul>
               <div  > {{ $prodct->links() }}</div>
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
@include('frontInc.footer')
<!--Footer End-->
</div><!--main-content Ends Here-->
</div><!--main end here-->
@endsection