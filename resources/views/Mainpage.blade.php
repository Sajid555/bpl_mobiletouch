





@extends('layouts.mainPage')
@section('content')
<div id="main">

    <!--Header/Nav-->
    @include('frontInc.header')
    <br>
    <!--Slider-->
    <div class="container" style="height: 260px;">
        <div class="row">
            <div class="slide_row">
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
                    @include('filters.sidebar_filters')
                    <div class="col-sm-8 column-content">
                        @if(Session::has('error_message'))
                       
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
                                    <?php $count = 1; ?>
                                    @foreach($Product as $book)
                                    @if($count==7)
                                    <?php
                                    $htmlCode = '</div> <div class="row col-md-12">';
                                    echo $htmlCode;
                                    echo '<div class="col-md-2">
                                       <div class="product">
                                          <div class="product-inner">
                                             <figure class="product-media">
                                                <a href="';
                                    ?>{{route('details',['id'=>$book->id])}} <?php echo '">'; ?>
                                    @if(isset($book->image))
                                    <?php echo '<img  src="'; ?>
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
                              <div class="product-price">';
                                    echo "Rs.";
                                    ?>
                                    {{$book->price}}
                                    <?php echo '
                              </div>
                              <div class="product-prices clearfix">
                                 <div class="product-price-old">
                                    <a href="';
                                    ?>
                                    {{route('addToCart' , ['id' => $book->id])}}
                                    <?php
                                    echo'" class="btn btn-primary " value="submit">Add to Cart</a>
                              </div>
                              </div>
                              </div>
                              </div>
                              </div>';
                                    $count = 2;
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
                                        <?php $count = $count + 1; ?>
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