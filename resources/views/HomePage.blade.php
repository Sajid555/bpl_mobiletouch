

@extends('layouts.mainPage')
@section('content')
<div id="main">

    <!--Header/Nav-->
    @include('frontInc.header')

 <div class="body-wrpr clearfix">
        <div class="algn-wrpr clearfix">
            <div class="sctn cntxt-link cntxt-link--only-text js-sldr clearfix">
                
            </div>

            <div class="sctn item-grid">
                <div class="sctn__hdr clearfix">
                    <div class="sctn__ttl">Mobile Phones</div>
                </div>

                <div class="sctn__inr clearfix">


                    @foreach($category as $Category)

                    <div class="item-grid-item">
                        <a class="item-grid-item__img-wrpr" href="{{url('dailyhome/'.$Category->id)}}">
                            <img class="item-grid-item__img" src="http://res.cloudinary.com/mspassets/image/upload/v1482913600/Redmi-Note3-16GB-SDL549264489-1-eefa5_qddv79.jpg" alt="Mobile Phones Price">
                        </a>
                        <div class="item-grid-item__ttl-wrpr">
                            <a href="#" class="item-grid-item__ttl">{{$Category->cat_name}}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
           
          
            
          
          
            </div>
        </div>
    </div>

             
             


	 	<div class="ads ads-on-left" data-spy="affix" data-offset-top="197" data-offset-bottom="600">
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
    </div>
    <div class="ads ads-on-right" data-spy="affix" data-offset-top="197" data-offset-bottom="600">
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
        <marquee direction="down"><h2>Ads Goes Here</h2></marquee>
    </div>
@include('frontInc.footer')
</div>
	 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  
@endsection