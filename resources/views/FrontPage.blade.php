<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Smart Price</title>
    <link href="{{asset('css/frntcss.css')}}" type="text/css" rel="stylesheet">
</head>

<body>
<div class="hdr hdr--scrl">
    <div class="main-hdr-wrpr">
        <div class="main-hdr">
            <a class="hdr-logo" href="#">
                <img class="hdr-logo__img" src="{{asset('flextop/images/headerlogo.png')}}" alt="MySmartPrice" />
            </a>
            <div class="srch-wdgt ui-front">
                <form class="js-srch-wdgt__frm" method="POST" action="{{url('/search')}}">
                    <input type="hidden" name="search_type" value="full" class="search_type">
                    <input type="hidden" name="typed_term" value="" class="typed_term">
                    <input required="" name="search" placeholder="Search millions of products" class="srch-wdgt__fld js-atcmplt js-hdr-srch js-srch-lght" autocomplete="off" type="search">
                    <button type="submit" class="srch-wdgt__sbmt js-lazy-bg" value=""></button>
                </form>
            </div>
            <div class="hdr__rght">
                <a class="hdr__prmtn" href="#">
                    <div class="hdr__prmtn-ttl">Oppo F7</div>
                    <div class="hdr__prmtn-tag">on sale</div>
                </a>
                <div class="hdr__acnt js-open-acnt">
                    <img class="hdr__acnt-img" src="https://assets.mspcdn.net/fl_lossy/msp-ui/icons/account-user@2x.png">
                    <div class="hdr__acnt-lbl">Your Account</div>
                    <div class="hdr__acnt-eml">Login / Sign up</div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-hdr">
        <ul class="nvgtn-bar">
            <li class="nvgtn-bar__item menu-ctgry js-ctgry-btn">
                <span class="menu-ctgry__hmbrgr-icon js-lazy-bg"></span>All
                <span class="menu-ctgry__down-icon js-lazy-bg"></span>
                <div class="drpdwn-menu-wrpr js-drpdwn-menu-wrpr" data-ver="0.60">
                    <div class="drpdwn-menu-wrpr__ldng">
                        <div class="ldr js-drpdwn-menu-ldng">
                            <div class="ldr__crcl"></div>
                        </div>
                    </div>
                    <ul class="drpdwn-menu"></ul>
                </div>
            </li>
            <li class="nvgtn-bar__item nvgtn-bar__item--actv">
                <a class="nvgtn-bar__item-link " href="#">Mobiles</a>
            </li>
            <li class="nvgtn-bar__item">
                <a class="nvgtn-bar__item-link" href="#">Computers</a>
            </li>
            <li class="nvgtn-bar__item">
                <a class="nvgtn-bar__item-link" href="#">TV</a>
            </li>
            <li class="nvgtn-bar__item ">
                <a class="nvgtn-bar__item-link " href="#">Appliances</a>
            </li>
            <li class="nvgtn-bar__item ">
                <a class="nvgtn-bar__item-link " href="#">Care</a>
            </li>
            <li class="nvgtn-bar__item ">
                <a class="nvgtn-bar__item-link " href="#">Best Products</a>
            </li>
            <li class="nvgtn-bar__item ">
                <a class="nvgtn-bar__item-link " href="#">Upcoming Mobiles</a>
            </li>
            <li class="nvgtn-bar__item">
                <a class="nvgtn-bar__item-link " href="#">News</a>
            </li>
            <li class="nvgtn-bar__item ">
                <a class="nvgtn-bar__item-link" href="#">Deals</a>
            </li>
            <li class="nvgtn-bar__item hghlghtr js-hghlghtr-link">
                <a class="nvgtn-bar__item-link hghlghtr-link hghlghtr-link--lght" href="#">Cashback</a>
            </li>
        </ul>
    </div>
</div>

<div class="body-wrpr clearfix">
    <div class="algn-wrpr clearfix">
        <div class="sctn cntxt-link cntxt-link--only-text js-sldr clearfix">
            <div class="cntxt-link__prvs-icon js-lazy-bg js-sldr__prvs"></div>
            <div class="cntxt-link__next-icon js-lazy-bg js-sldr__next"></div>
            <div class="cntxt-link-item-wrpr cshbck__top-sldr">
                <div class="cntxt-link-item js-inpg-link" data-href="Mobile%20Phones">
                    <div class="cntxt-link-item__ttl-wrpr">
                        <span class="cntxt-link-item__ttl">
                        Mobile Phones </span>
                    </div>
                </div>
                <div class="cntxt-link-item js-inpg-link" data-href="Tablets%20%26%20Landline%20Phones">
                    <div class="cntxt-link-item__ttl-wrpr">
                            <span class="cntxt-link-item__ttl">
                            Tablets & Landline Phones 
                            </span>
                    </div>
                </div>
                <div class="cntxt-link-item js-inpg-link" data-href="Mobile%20Accessories">
                    <div class="cntxt-link-item__ttl-wrpr">
                            <span class="cntxt-link-item__ttl">
                            Mobile Accessories 
                            </span>
                    </div>
                </div>
                <div class="cntxt-link-item js-inpg-link" data-href="Headphones%20%26%20Headsets">
                    <div class="cntxt-link-item__ttl-wrpr">
                            <span class="cntxt-link-item__ttl">
                            Headphones & Headsets 
                            </span>
                    </div>
                </div>
                <div class="cntxt-link-item js-inpg-link">
                    <div class="cntxt-link-item__ttl-wrpr">
                            <span class="cntxt-link-item__ttl">
                            Car Mobile Accessories
                            </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="sctn item-grid " data-id="Mobile Phones">
            <div class="sctn__hdr clearfix">
                <div class="sctn__ttl">Mobile Phones</div>
                <div class="sctn__nvgtn">

                </div>
            </div>
            <div class="sctn__inr clearfix">
                 <?php
                 $Category=\App\Category::all();
                 ?>
                
                  @foreach($Category as $c)
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="{{route('select',['id'=>$c->id])}}">
                        <img class="item-grid-item__img" src="{{asset('images') . '/'.$c->image}}" alt="Mobile Phones Price">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">{{$c->cat_name}}</a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="sctn item-grid " data-id="Tablets & Landline Phones">
            <div class="sctn__hdr clearfix">
                <div class="sctn__ttl">Tablets & Landline Phones</div>
                <div class="sctn__nvgtn">

                </div>
            </div>
            <div class="sctn__inr clearfix">
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://res.cloudinary.com/mspassets/image/upload/v1482757483/tablets_rj1baq.png" alt="All Tablets Price List in India Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">All Tablets</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://c288724.r24.cf1.rackcdn.com/brnd-samsung-100.png" alt="Samsung Tablets Price List in India Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Samsung Tablets</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/lenovo_100.png" alt="Lenovo Tablets Price List in India Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Lenovo Tablets</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/micromax_100.png" alt="Micromax Tablets Price List in India Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Micromax Tablets</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/apple_100.png" alt="Apple iPad Price List in India Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Apple iPad</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://eca7be04b147deacfa4c-82cf6157a8169c9e50dc1c35c1fca86b.r11.cf1.rackcdn.com/landline_phones.png" alt="Landline Phones Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Landline Phones</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sctn item-grid " data-id="Mobile Accessories">
            <div class="sctn__hdr clearfix">
                <div class="sctn__ttl">Mobile Accessories</div>
            </div>
            <div class="sctn__inr clearfix">
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/cases-and-covers.jpg" alt="Mobile Cases and Covers Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Cases & Covers</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://a672c82f2734421c7062-2a7b68bd1399ab982df715c9d055b004.r0.cf1.rackcdn.com/smartwatches.png" alt="Smart Watches Price In India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Smart Watches</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/microsd_100.jpeg" alt="Memory Cards Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">MicroSD Memory Cards</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/screen-guards.jpg" alt="Mobile Screen Guards Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Screen Guards</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/mobilebattery_100.jpeg" alt="Mobile Battery Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Mobile Battery</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/mobilecharger_100.jpeg" alt="Mobile Chargers Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Mobile Chargers</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/mobilecable_100.jpeg" alt="Cables Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Cables</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://eca7be04b147deacfa4c-82cf6157a8169c9e50dc1c35c1fca86b.r11.cf1.rackcdn.com/power_banks.png" alt="Power Banks Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Power Banks</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://a672c82f2734421c7062-2a7b68bd1399ab982df715c9d055b004.r0.cf1.rackcdn.com/fitness_trackers.png" alt="Fitness Tracker Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Fitness Bands</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://eca7be04b147deacfa4c-82cf6157a8169c9e50dc1c35c1fca86b.r11.cf1.rackcdn.com/wireless-speakers.png" alt="Portable & Wireless Speakers Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Portable & Wireless Speakers</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sctn item-grid " data-id="Headphones & Headsets">
            <div class="sctn__hdr clearfix">
                <div class="sctn__ttl">Headphones & Headsets</div>
            </div>
            <div class="sctn__inr clearfix">
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/earphones_100.jpeg" alt="Headphones price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Headphones</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/bluetooth_100.jpeg" alt="Bluetooth Headsets Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Bluetooth Headsets</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/wiredheadsets_100.jpeg" alt="Wired Headsets Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Wired Headsets</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sctn item-grid " data-id="Car Mobile Accessories">
            <div class="sctn__hdr clearfix">
                <div class="sctn__ttl">Car Mobile Accessories</div>
            </div>
            <div class="sctn__inr clearfix">
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/carcharger_100.jpeg" alt="Car Chargers Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Car Chargers</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/carkit_100.jpeg" alt="Car Kits Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Car Kits</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://homeimg1.mspcdn.net/carcradle_100.jpeg" alt="Car Cradles Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">Car Cradles & Mounts</a>
                    </div>
                </div>
                <div class="item-grid-item">
                    <a class="item-grid-item__img-wrpr" href="#">
                        <img class="item-grid-item__img" src="http://eca7be04b147deacfa4c-82cf6157a8169c9e50dc1c35c1fca86b.r11.cf1.rackcdn.com/gps-navigation-devices.png" alt="GPS Navigation Devices Price in India">
                    </a>
                    <div class="item-grid-item__ttl-wrpr">
                        <a href="#" class="item-grid-item__ttl">GPS Navigation Devices</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sctn link-grid clearfix">
            <div class="sctn__hdr clearfix">
                <h3 class="sctn__ttl ">Popular Price Lists </h3>
            </div>
            <div class="sctn__inr clearfix">
                <div class="link-grid__item">
                    <a href="#">
                        Memory Card </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        8GB Memory Card </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        16GB Memory Card </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Sandisk Memory Card </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Transcend Memory Card </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Latest Mobiles </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Coolpad Mobile Price </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        6 Inch Mobile Price List </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Upcoming mobiles Price </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Samsung Charger Price </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        HTC Mobiles under 15000 </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Samsung Mobiles under 20000 </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Compare Mobiles </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Best Mobiles </a>
                </div>
            </div>
        </div>
        <div class="sctn link-grid clearfix">
            <div class="sctn__hdr clearfix">
                <h3 class="sctn__ttl ">Popular Tablets </h3>
            </div>
            <div class="sctn__inr clearfix">
                <div class="link-grid__item">
                    <a href="#">
                        Windows Tablet </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Best Tablet </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Dell Tablet </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        IBall Tablet </a>
                </div>
            </div>
        </div>
        <div class="sctn link-grid clearfix">
            <div class="sctn__hdr clearfix">
                <h3 class="sctn__ttl ">Popular Smart Watches </h3>
            </div>
            <div class="sctn__inr clearfix">
                <div class="link-grid__item">
                    <a href="#">
                        Apple Smart Watch </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Samsung Smart Watch </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        LG Smart Watch </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Pebble Smart Watch </a>
                </div>
            </div>
        </div>
        <div class="sctn link-grid clearfix">
            <div class="sctn__hdr clearfix">
                <h3 class="sctn__ttl ">Popular Mobile Batteries </h3>
            </div>
            <div class="sctn__inr clearfix">
                <div class="link-grid__item">
                    <a href="#">
                        Samsung Batteries </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Apple Batteries </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Lenovo Batteries </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Sony Batteries </a>
                </div>
            </div>
        </div>
        <div class="sctn link-grid clearfix">
            <div class="sctn__hdr clearfix">
                <h3 class="sctn__ttl ">Popular Power Banks </h3>
            </div>
            <div class="sctn__inr clearfix">
                <div class="link-grid__item">
                    <a href="#">
                        Samsung power banks above 10000 mAh </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Sony power bank under 6000 mAh </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Samsung Power Banks </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Ambrane Power Banks </a>
                </div>
            </div>
        </div>
        <div class="sctn link-grid clearfix">
            <div class="sctn__hdr clearfix">
                <h3 class="sctn__ttl ">Popular Wireless Speakers </h3>
            </div>
            <div class="sctn__inr clearfix">
                <div class="link-grid__item">
                    <a href="#">
                        Portronics Wireless Speaker </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        JBL Wireless Speaker </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Philips Wireless Speaker </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Sony Wireless Speaker </a>
                </div>
            </div>
        </div>
        <div class="sctn link-grid clearfix">
            <div class="sctn__hdr clearfix">
                <h3 class="sctn__ttl ">Popular Fitness Trackers </h3>
            </div>
            <div class="sctn__inr clearfix">
                <div class="link-grid__item">
                    <a href="#">
                        Fitbit Fitness Tracker </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        GetActive Fitness Tracker </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Jawbone Fitness Tracker </a>
                </div>
                <div class="link-grid__item">
                    <a href="#">
                        Xiaomi Fitness Tracker </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ftr">
    <div class="ftr__lylty">
        <div class="ftr__lylty__cntnt-wrpr clearfix">
            <div class="ftr__lylty__info-wrpr">
                <div class="ftr__lylty__info-hdr js-lylty-info-hdr">Earn extra cashback on every purchase</div>
                <div class="ftr__lylty__info-stps js-lylty-info-stps">Visit BonusApp → Shop → Get cashback</div>
            </div>
            <div class="ftr__lylty__eml-wrpr js-ftr-eml-wrpr">
                <div class="bttn bttn--scndry js-open-link">Visit BonusApp</div>
            </div>
            <div class="ftr__lylty__stats-wrpr js-ftr-stats-wrpr">
                <div class="ftr__lylty__stats-cnt js-lylty-cnt">1,126,396</div>
                <div class="ftr__lylty__stats-info">Users signed up so far</div>
            </div>
        </div>
    </div>
    <div class="ftr__cntnt-wrpr">
        <div class="ftr__lnks clearfix">
            <div class="ftr__lnks__clmn ftr__lnks__clmn--2 clearfix">
                    <div class="ftr__lnks__clmn__hdr">Popular Mobiles</div>
                <div class="ftr__lnks__clmn__vrtcl clearfix">
                    <a class='ftr__lnks__clmn__lnks' href='#'>Moto C2</a>
                    <a class='ftr__lnks__clmn__lnks' href='#'>Meizu M6T</a>
                    <a class='ftr__lnks__clmn__lnks' href='#'>LG Q7 Plus</a>
                    <a class='ftr__lnks__clmn__lnks' href='#'>Oppo A5</a>
                </div>
                <div class="ftr__lnks__clmn__vrtcl clearfix">
                    <a class='ftr__lnks__clmn__lnks' href="#">LG X2</a>
                    <a class='ftr__lnks__clmn__lnks' href='#'>Meizu X8</a>
                    <a class='ftr__lnks__clmn__lnks' href='#'>Mi Max 3 Pro</a>
                    <a class='ftr__lnks__clmn__lnks' href='#'>Oppo R20</a>
                </div>
            </div>
            <div class="ftr__lnks__clmn ftr__lnks__clmn--2 clearfix">
                <div class="ftr__lnks__clmn__hdr">Quick Links</div>
            <div class="ftr__lnks__clmn__vrtcl clearfix">
                <a href="#" class="ftr__lnks__clmn__lnks">
                    Upcoming Mobiles
                </a>
                <a href="#" class="ftr__lnks__clmn__lnks">
                    Gadget News &amp; Reviews
                </a>
                <a href="#" class="ftr__lnks__clmn__lnks">
                    Compare Mobiles
                </a>
                <a href="#" class="ftr__lnks__clmn__lnks">
                    Big Billion Day 2017
                </a>
            </div>
            <div class="ftr__lnks__clmn__vrtcl clearfix">
                <a href="#" class="ftr__lnks__clmn__lnks">
                    Contact Us
                </a>
                <a href="#" class="ftr__lnks__clmn__lnks">
                    Privacy
                </a>
                <a href="#" class="ftr__lnks__clmn__lnks">
                    Terms of Use
                </a>
                <a href="#" class="ftr__lnks__clmn__lnks">
                    Blog
                </a>
            </div>
        </div>
            <div class="ftr__lnks__clmn ftr__lnks__mblapps clearfix">
                <div class="ftr__lnks__clmn__hdr">Mobile Apps</div>
                <div class="ftr__lnks__clmn__vrtcl clearfix">
                    <a rel="nofollow" target="_blank" href="#" class="ftr__lnks__clmn__lnks">
                        <img src="https://assets.mspcdn.net/msp-ui/icons/large/google-play-badge.png" alt="google playstore link" class="ftr__lnks__clmn__img">
                    </a>
                    <a rel="nofollow" target="_blank" href="#" class="ftr__lnks__clmn__lnks">
                        <img src="https://assets.mspcdn.net/msp-ui/icons/large/app-store-badge.png" alt="" class="ftr__lnks__clmn__img">
                    </a>
                </div>
            </div>
        </div>
        <div class="ftr__cmpny-info clearfix">
            <div class="ftr__cmpny-info__left">
                <img src="https://assets.mspcdn.net/fl_lossy/logos/mysmartprice/owl/blue.png" alt="MySmartPrice" class="ftr__cmpny-info__logo">
                <div class="ftr__cmpny-info__cpyrght">© 2018 MySmartPrice Web Technology Private Limited</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
