


@extends('layouts.mainPage')
@section('content')
<div id="main">

    <!--Header/Nav-->
    @include('frontInc.header')
    <br>
    <!--Slider-->
    

<!--Slider End-->
<!--Main Content Starts-->
 

<div class="body-wrpr clearfix">
        <div class="page-info clearfix">
            <div class="page-info__brdcrmb"> Mobiles &gt; Lenovo Mobiles with Price </div>
            <div class="page-info__updt-date"> Updated On: 10th July 2018 </div>
        </div>
        <div class="list-info">
            <h1 class="list-info__ttl js-list-ttl">Lenovo Mobile Price List 2018</h1>
            <div class="list-info__dscrptn">
                Lenovo is a mobile phone manufacturing company that makes Android-powered phones. Below is the price list of Lenovo mobiles available in India at the lowest prices. Mobile prices are updated every day from different online sources. Make use of detailed model specifications, user reviews and model images to find the Lenovo best smartphone. You might also be interested in these best Lenovo phones:
                <div class="list-info__link-wrpr clearfix"><a class="list-info__link" href="#" target="_blank">Lenovo Z5 Price</a>
                    <a class="list-info__link" href="#" target="_blank">Lenovo S5 price</a>
                    <a class="list-info__link" href="#" target="_blank">Lenovo K8 Plus price</a>
                    <a class="list-info__link" href="#" target="_blank">Lenovo K8 Note price</a>
                    <a class="list-info__link" href="#" target="_blank">Lenovo K6 Note price</a>
                    <a class="list-info__link" href="#" target="_blank">Lenovo K6 Power price</a>
                    <a class="list-info__link" href="#" target="_blank">Lenovo K5 Note price</a>
                </div>
            </div>
        </div>
        <div class="algn-wrpr clearfix">
            <div class="main-wrpr list-main">
                <h2 class="list-main__ttl">Lenovo mobile price list 2018 (with 91 models and pictures)</h2>
                <div class="list-hdr clearfix" data-id="listHeader">
                    <div class="list-hdr__prdct-cnt"> Showing <b class="js-prdct-cnt__rng"> 1-48</b> of <b class="js-prdct-cnt__totl">91</b> products </div>
                    <div class="sort-wrpr">
                        SORT BY
                        <label>
                            <select class="sort js-list-sort">
                                <option>Price: High to Low</option>
                                <option>Price: Low to High</option>
                                <option selected>Popularity</option>
                            </select>
                        </label>
                    </div>
                    <form class="list-hdr-srch">
                        <input type="text" class="list-hdr-srch__fld" placeholder="Search..">
                        <div class="list-hdr-srch__btn"></div>
                    </form>
                </div>
                <div class="list-mdl">
                    <div class="best-fltr-wdgt">
                        <a class="best-fltr-wdgt__link js-tltp" href="#">Best phones under 25000 in India </a>
                        <a class="best-fltr-wdgt__link js-tltp"href="#">Best Android Phones in India</a>
                        <a class="best-fltr-wdgt__link js-tltp" href="#">Best Micromax Mobile Price List 2018</a>
                        <a class="best-fltr-wdgt__link js-tltp" href="#">Best Best 3GB RAM Mobiles</a>
                    </div>
                    <div class="js-fltrs-apld-wrpr1" style="display: block;">
                        <div class="js-fltrs-apld-wrpr">
                            <div class="js-fltrs-apld">
                                <div class="js-fltrs-apld__lbl">Brand:</div>
                                <div class="js-fltrs-apld__item">
                                    <span class="js-fltrs-apld__item-label">Lenovo</span>
                                    <img class="js-fltrs-apld__item-cler" src="https://assets.mspcdn.net/msp-ui/icons/cross-grey-small.png">
                                </div>
                            </div>
                        </div>
                        <div class="js-fltrs-apld-cler">CLEAR ALL</div>
                    </div>
                    <div class="prdct-grid-wrpr js-prdct-grid-wrpr">
                        <div class="sctn prdct-grid prdct-grid--s prdct-grid--spcftn-4 prdct-grid--spcftn-4-cmpr clearfix prdct-grid--prdct-s">
                           @foreach($prodct as $product)
                            <div class="prdct-item prdct-item--spcftn-">
                                <a class="prdct-item__img-wrpr" href="#">
                                    <img class="prdct-item__img" src="{{asset('images') . '/'.$product->image}}" alt="Lenovo K8 Plus Price in India"></a>
                                <div class="prdct-item__dtls ">
                                    <a class="prdct-item__name" href="https://www.mysmartprice.com/mobile/lenovo-k8-plus-msp13178">   <?php
                                                                            $productName = DB::table('brands')->where('id', '=', $product->brand_id)->get();
                                                                            echo $productName[0]->brand_name;
                                                                            ?></a> </a>
                                    <div class="prdct-item__extr-info clearfix">
                                        <div class="rtng-wrpr">
                                            
                                        </div>
                                    </div>
                                    <div class="prdct-item__prc">
                                        <span class="prdct-item__rpe">Rs: </span>
                                        <span class="prdct-item__prc-val">{{$product->price}}</span>
                                    </div>
                                    <div class="prdct-item__str-optns">
                                        <strong>From 9 stores</strong> at ₹8,139
                                    </div>
                                    <ul class="prdct-item__spcftn-wrpr">
                                        <li class="prdct-item__spcftn">{{$product->Size}}</li>
                                        <li class="prdct-item__spcftn">{{$product->RAM}}</li>
                                        <li class="prdct-item__spcftn">{{$product->Internal}}</li>
                                        <li class="prdct-item__spcftn">{{$product->OS}}</li>
                                    </ul>
                                    <div class="prdct-item__cmpr">
                                        <label>
                                            <input type="checkbox" name="compare" class="prdct-item__cmpr-chkbx js-add-to-cmpr">
                                            <span class="prdct-item__cmpr-img"></span>
                                        </label>
                                        <label style="display: block;">
                                            <input type="checkbox" name="compare" class="prdct-item__cmpr-chkbx js-add-to-cmpr">
                                            <span class="add-to-cart">Add to cart</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                            <div class="pgntn js-prdct-pgntn">
                                <div class="pgntn__rslt-cnt"> Showing page
                                    <span class="pgntn__rslt-page">1</span> out of <span class="pgntn__rslt-page">2</span>
                                </div>
                                <a class="pgntn__item pgntn__item--crnt" data-pgno="1">1</a>
                                <a class="pgntn__item" href="#" data-pgno="2">2</a>
                                <a class="pgntn__item" href="#" data-pgno="2">Next</a>
                                <a class="pgntn__item" href="#" data-pgno="last">Last</a>
                            </div>
                        </div>
                        <div class="sctn item-grid upcmng-prdcts">
                            <div class="sctn__hdr clearfix">
                                <h2 class="sctn__ttl">Lenovo Mobile Price List 2018</h2>
                            </div>
                            <div class="sctn__inr">
                                <p></p>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Best lenovo Mobile Phones</th>
                                        <th>Price </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Lenovo K8 Note 64GB</td>
                                        <td class="blue">₹11,499</td>
                                    </tr>
                                    <tr>
                                        <td>Lenovo K8 Plus</td>
                                        <td class="blue">₹8,139</td>
                                    </tr>
                                    <tr>
                                        <td>Lenovo K6 Power 4GB RAM</td>
                                        <td class="blue">₹8,007</td>
                                    </tr>
                                    <tr>
                                        <td>Lenovo K8 Note</td>
                                        <td class="blue">₹9,299</td>
                                    </tr>
                                    <tr>
                                        <td>Lenovo K6 Note</td>
                                        <td class="blue">₹8,799</td>
                                    </tr>
                                    <tr>
                                        <td>Lenovo Vibe K5 Note (4GB RAM)</td>
                                        <td class="blue">₹8,799</td>
                                    </tr>
                                    <tr>
                                        <td>Lenovo K6 Power</td>
                                        <td class="blue">₹8,390</td>
                                    </tr>
                                    <tr>
                                        <td>Lenovo Vibe B</td>
                                        <td class="blue">₹4,030</td>
                                    </tr>
                                    <tr>
                                        <td>Lenovo K8 </td>
                                        <td class="blue">₹7,918</td>
                                    </tr>
                                    <tr>
                                        <td>Lenovo K8 Plus 4GB RAM</td>
                                        <td class="blue">₹8,359</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <style> .table, tr, th { border:0 none; border-collapse:collapse; } .table { margin:0; padding:0; } th, td { width:340px; } .table th { margin:0; padding:13px 17px; border-bottom:1px solid #cccccc; border-collapse:collapse; font-weight:600; color:#111; text-align:left; -webkit-box-shadow:inset 0 -1px 0 0 #fff; box-shadow:inset 0 -1px 0 0 #fff; } .table tr { margin:0; padding:13px 17px; background:#fff; border-bottom:1px solid #e0e0e0; border-collapse:collapse; color:#111; text-align:left; } .table td { margin:0; padding:13px 17px; color:#111; text-align:left; } .table td.blue { color:#0d426c; text-align:left; } .table tr:nth-child(even) { margin:0; padding:13px 17px; background:#f9f9f9; border-bottom:1px solid #e0e0e0; border-collapse:collapse; color:#111; text-align:left; } </style>
                    </div>
                </div>
                <div class="fltr-wrpr1" data-id="list-filter">
                    <div class="fltr-wrpr">
                        <div class="fltr" data-groupname="bestsellers">
                            <div class="fltr__hdr">
                                <span class="fltr__ttl">Best Sellers</span>
                                <span class="fltr__cler">Clear</span>
                            </div>
                            <div class="fltr-val-wrpr nano has-scrollbar" style="height: 31px;">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl">
                                        <input class="fltr-val__inpt" type="checkbox" name="1463217[]" value="1200387-1463217">
                                        <span class="fltr-val__text js-tltp" title="Show Only Best Sellers">Show Only Best Sellers</span>
                                    </label>
                                </div>
                                <div class="pane" style="display: none; opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 20px;"></div>
                                </div>
                            </div>
                        </div> 
                        <form method="POST" action="{{url('/filter')}}">
                                {{ csrf_field() }}
                        <div class="fltr" data-groupname="price">
                            <div class="fltr__hdr"><span class="fltr__ttl">Price </span><span class="fltr__cler">Clear </span></div>
                            <div class="fltr-prc">
                                <div class="fltr-prc__sldr ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                    <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0;"></a>
                                    <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 99.5%;"></a>
                                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0; width: 99.5%;"></div>
                                </div>
                            </div>
                            <div class="fltr-val-wrpr nano has-scrollbar" style="height: 186px;">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    <label class="fltr-val fltr-val--sngl js-fltr-val--sngl">
                                        <input class="fltr-val__inpt" type="radio" name="price" value="0 - 2000">
                                        <span class="fltr-val__text" data-callout="0-2000">
                                            <span class="fltr-val__lbl">Below Rs. 2000</span>
                                        </span>
                                    </label>
                                    <label class="fltr-val fltr-val--sngl js-fltr-val--sngl">
                                        <input class="fltr-val__inpt" type="radio" name="price" value="2001 - 4999">
                                        <span class="fltr-val__text" data-callout="2000-4999">
                                            <span class="fltr-val__lbl">Rs. 2000 - Rs. 4999</span>
                                            
                                        </span>
                                    </label>
                                    <label class="fltr-val fltr-val--sngl js-fltr-val--sngl">
                                        <input class="fltr-val__inpt" type="radio" name="price" value="5001 - 9999">
                                        <span class="fltr-val__text" data-callout="2000-4999">
                                            <span class="fltr-val__lbl">Rs. 5000 - Rs. 9999</span>
                                            
                                        </span>
                                    </label>
                                    <label class="fltr-val fltr-val--sngl js-fltr-val--sngl">
                                        <input class="fltr-val__inpt" type="radio" name="price" value=" 10001 - 19999 ">
                                        <span class="fltr-val__text" data-callout="2000-4999">
                                            <span class="fltr-val__lbl">Rs. 10000 - Rs. 19999</span>
                                            
                                        </span>
                                    </label>
                                    <label class="fltr-val fltr-val--sngl js-fltr-val--sngl">
                                        <input class="fltr-val__inpt" type="radio" name="price" value="20001 - 39999">
                                        <span class="fltr-val__text" data-callout="2000-4999">
                                            <span class="fltr-val__lbl">Rs. 20000 - Rs. 39999</span>
                                            
                                        </span>
                                    </label>
                                    <label class="fltr-val fltr-val--sngl js-fltr-val--sngl">
                                        <input class="fltr-val__inpt" type="radio" name="price" value="50000 - 59000">
                                        <span class="fltr-val__text" data-callout="2000-4999">
                                            <span class="fltr-val__lbl">Rs. 50000 - Rs. 590000</span>
                                            
                                        </span>
                                    </label>
                                    <label class="fltr-val fltr-val--sngl js-fltr-val--sngl">
                                        <input class="fltr-val__inpt" type="radio" name="price" value="60001 - 200000">
                                        <span class="fltr-val__text" data-callout="2000-4999">
                                            <span class="fltr-val__lbl">Rs. 60000 And Above</span>
                                            
                                        </span>
                                    </label>
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible; display: none;">
                                    <div class="slider" style="height: 170px;"></div>
                                </div>
                                <div class="pane" style="display: none; opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 170px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="fltr" data-groupname="brand">
                           
                            <div class="fltr__hdr">
                                <span class="fltr__ttl">Brand</span>
                                <span class="fltr__cler fltr__cler--show">Clear </span>
                            </div>
                           
                            <div class="fltr-val-wrpr nano has-scrollbar">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    
                            <?php
                            $categry = \App\Category::all();
                            ?>
                            @foreach($categry as $cats)
                  
                   
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl">
                                        <input name="brand[]" value="{{$cats->id}}" class="fltr-val__inpt" type="checkbox">
                                        <span class="fltr-val__text js-tltp" title="Samsung">
                                            <span class="fltr-val__lbl"> {{$cats->cat_name}}</span>
                                        </span>
                                    </label>
                                     @endforeach
                                </div>
                             </div>
                                <div class="pane" style="opacity: 1; visibility: visible; display: none;">
                                    <div class="slider" style="height: 170px; top: 0;"></div>
                                </div>
                                <div class="pane" style="display: none; opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 170px;"></div>
                                </div>    
                        <div class="fltr" data-groupname="osversion">
                            <div class="fltr__hdr"><span class="fltr__ttl">OS Version</span><span class="fltr__cler">Clear </span></div>
                           
                            <div class="fltr-val-wrpr nano has-scrollbar">
                                <div class="content" tabindex="0" style="right: -17px;">
                                     <?php
                                    $product = \App\Product::all();
                                    ?>  @foreach($product->unique('OS') as $p) 
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl">
                                        <input class="fltr-val__inpt" name="OS" value="{{$p->OS}}" type="checkbox">
                                        <span class="fltr-val__text js-tltp" title="Android 1.0">
                                            <span class="fltr-val__lbl" >{{$p->OS}}</span> 
                                        </span>
                                    </label>
                                     @endforeach        
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 28px; top: 0;"></div>
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 28px; top: 0;"></div>
                                </div>
                            </div>
                        </div>
                         
                        <div class="fltr" data-groupname="sim">
                            <div class="fltr__hdr"><span class="fltr__ttl">SIM</span><span class="fltr__cler">Clear </span></div>
                            <div class="fltr-val-wrpr nano has-scrollbar" style="height: 124px;">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    <?php
                                    $product = \App\Product::all();
                                    ?>   
                                    @foreach($product->unique('SIM') as $p)
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" name="SIM" value="{{$p->SIM}}" ><span class="fltr-val__text js-tltp" title="Single SIM"><span class="fltr-val__lbl">{{$p->SIM}}</span></span></label>
                                     @endforeach
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible; display: none;">
                                    <div class="slider" style="height: 109px; top: 0;"></div>
                                </div>
                                <div class="pane" style="display: none; opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 109px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="fltr" data-groupname="ram">
                            <div class="fltr__hdr"><span class="fltr__ttl">RAM</span><span class="fltr__cler">Clear </span></div>
                            <div class="fltr-val-wrpr nano has-scrollbar">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    <?php
                                    $product = \App\Product::all();
                                    ?>   
                                    @foreach($product->unique('RAM') as $p)
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" name="RAM" value="{{$p->RAM}}"><span class="fltr-val__text js-tltp" title="128 MB"><span class="fltr-val__lbl">{{$p->RAM}}</span></span></label>
                                    @endforeach
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 140px; top: 0;"></div>
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 140px; top: 0;"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="fltr" data-groupname="displayresolution">
                            <div class="fltr__hdr"><span class="fltr__ttl">Display Resolution</span><span class="fltr__cler">Clear </span></div>
                            <div class="fltr-val-wrpr nano has-scrollbar">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    <?php
                                    $product = \App\Product::all();
                                    ?> 
                                    @foreach($product->unique('Resolution') as $p)  
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" name="Resolution" value="{{$p->Resolution}}"><span class="fltr-val__text js-tltp" title="2K"><span class="fltr-val__lbl">{{$p->Resolution}}</span></span></label>
                                    @endforeach
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 119px; top: 0;"></div>
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 119px; top: 0;"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="fltr" data-groupname="displaytype">
                            <div class="fltr__hdr"><span class="fltr__ttl">Display Type</span><span class="fltr__cler">Clear </span></div>
                            <div class="fltr-val-wrpr nano has-scrollbar" style="height: 124px;">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    <?php
                                    $product = \App\Product::all();
                                    ?>  
                                    @foreach($product->unique('display_type') as $p)
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt"  name="display_type" value="{{$p->display_type}}" type="checkbox"><span class="fltr-val__text js-tltp" title="LCD"><span class="fltr-val__lbl">{{$p->display_type}}</span></label>
                                     @endforeach
                                    
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible; display: none;">
                                    <div class="slider" style="height: 109px; top: 0;"></div>
                                </div>
                                <div class="pane" style="display: none; opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 109px;"></div>
                                </div>
                            </div>
                        </div>
                         
                        <div class="fltr" data-groupname="internalmemory">
                            <div class="fltr__hdr"><span class="fltr__ttl">Internal Memory</span><span class="fltr__cler">Clear </span></div>
                            <div class="fltr-val-wrpr nano has-scrollbar">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    <?php
                                    $product = \App\Product::all();
                                    ?>   
                                    @foreach($product->unique('Internal') as $p)
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" name="Internal" value="{{$p->Internal}}"><span class="fltr-val__text js-tltp" title="1 GB and Below"><span class="fltr-val__lbl"> {{$p->Internal}} </span></label>
                                    @endforeach
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 140px; top: 0;"></div>
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 140px; top: 0;"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="fltr" data-groupname="primarycamera">
                            <div class="fltr__hdr"><span class="fltr__ttl">Primary Camera</span><span class="fltr__cler">Clear </span></div>
                            <div class="fltr-val-wrpr nano has-scrollbar">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    <?php
                                    $product = \App\Product::all();
                                    ?>   
                                    @foreach($product->unique('Primary') as $p)
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" value="{{$p->Primary}}" name="Primary"><span class="fltr-val__text js-tltp" title="2 MP and Below"><span class="fltr-val__lbl">{{$p->Primary}}</span></span></label>
                                    @endforeach
                                    
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 129px; top: 0;"></div>
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 129px; top: 0;"></div>
                                </div>
                            </div>
                        </div>
                         
                        <div class="fltr" data-groupname="selfiecamera">
                            <div class="fltr__hdr"><span class="fltr__ttl">Selfie Camera</span><span class="fltr__cler">Clear </span></div>
                            <div class="fltr-val-wrpr nano has-scrollbar">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    <?php
                                    $product = \App\Product::all();
                                    ?>   
                                    @foreach($product->unique('Front') as $p)
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" name="Front" value="{{$p->Front}}" ><span class="fltr-val__text js-tltp" title="1 MP and Below"><span class="fltr-val__lbl">{{$p->Front}}</span></label>
                                    @endforeach
                                   
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 104px; top: 0;"></div>
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 104px; top: 0;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="fltr" data-groupname="batterycapacity">
                            <div class="fltr__hdr"><span class="fltr__ttl">Battery Capacity</span><span class="fltr__cler">Clear </span></div>
                            <div class="fltr-val-wrpr nano has-scrollbar" style="height: 186px;">
                                <div class="content" tabindex="0" style="right: -17px;">
                                    
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" value="1000-1500" name="Capacity"><span class="fltr-val__text js-tltp" title="1001 - 1500 mAh"><span class="fltr-val__lbl">1001 - 1500 mAh</span></span></label>
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" value="1501-2499" name="Capacity"><span class="fltr-val__text js-tltp" title="1501 - 2000 mAh"><span class="fltr-val__lbl">1501 - 2499 mAh</span></span></label>
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" value="2500-2999" name="Capacity"><span class="fltr-val__text js-tltp" title="2001 - 2500 mAh"><span class="fltr-val__lbl">2500 - 2999 mAh</span></span></label>
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" value="3000-3499 name="Capacity""><span class="fltr-val__text js-tltp" title="2501 - 3000 mAh"><span class="fltr-val__lbl">3000 - 3499 mAh</span></span></label>
                                    <label class="fltr-val fltr-val--mltpl js-fltr-val--mltpl"><input class="fltr-val__inpt" type="checkbox" value="3500-40000" name="Capacity"><span class="fltr-val__text js-tltp" title="Above 3000 mAh"><span class="fltr-val__lbl">3500 - 40000 mAh</span></span></label>
                                </div>
                                <div class="pane" style="opacity: 1; visibility: visible; display: none;">
                                    <div class="slider" style="height: 170px; top: 0;"></div>
                                </div>
                                <div class="pane" style="display: none; opacity: 1; visibility: visible;">
                                    <div class="slider" style="height: 170px;"></div>
                                </div>
                            </div>
                        </div>
                        <button type="Submit" class="btn-default btn1" value="Submit">Submit</button>
                     </form>
                    
                    </div>
                </div>
                <section class="sctn sctn--btm-text">
                    <div class="sctn__inr">
                        <p>The Chinese smartphone brand, Lenovo is well known in the technology segment for its range of smartphones, tablets, laptops and electronic accessories. Known for budget range smartphones, Lenovo has acquired credibility from the users by offering durable mobiles.</p>
                        <p><b></b></p>
                        <h3><b>RAM: </b></h3>
                        <p></p>
                        <p>While the apps are getting bigger providing great features, the RAM usability is also in the same way increasing. RAM is being seen an important specification as users prefer to install and preserve apps in their smartphone for their ease of use. As the use of apps is booming, there is more load coming on the way on RAM. Hence choosing the RAM storage capacity is important before buying. To define a RAM for a layman, Random Access Memory is the temporary storage area of information that is to be retrieved or used quickly when the process is running. Lenovo mobiles have for you a range of RAM options from 512MB to 4GB that suits your every need. </p>
                        <p><b></b></p>
                        <h3><b>Connectivity Features:</b></h3>
                        <p></p>
                        <p>India didn't take much time to adopt <a href="#">4G LTE</a> technology, thanks to the smartphone brands who timely brought 4G phones to the market. Lenovo is among those brands which has a range of 4G phones in its portfolio. Lenovo offers smartphones that support 4G, VoLTE, 3G and 2G in India. As the VoLTE calling has become more popular these days, Lenovo has brought VoLTE capable smartphones too. For contactless payments, Lenovo also has NFC feature integrated for few of its phones. Besides the above features, Lenovo mobiles with Gyro sensor delivers virtual reality experience through VR headset.</p>
                        <p><b></b></p>
                        <h3><b>Processor:</b></h3>
                        <p></p>
                        <p>For a mobile, a processor is like an engine for a car. Such an important hardware, processor process the data sent by the user and carry out operations. In the modern digital world, the processor has become significantly important to carry out complex functions of a smartphone. The mobile computing ecosystem has seen processors with eight cores and a clock speed of 2.7GHz. As smartphones are more seen as computing devices that carry out many complex processes, the load on the processor is getting harder. Hence it is more important to choose a right processor for your needs. For all those who perform a range of usage activities, Lenovo has a plethora of options to choose from a single core to octa core processors. Lenovo smartphones also come paired with Adreno GPU that helps in good gaming performance.</p>
                        <p><b></b></p>
                        <h3><b>Battery:</b></h3>
                        <p></p>
                        <p>Carrying a power bank along has become more common thing these days, as the mobile usage has grown thanks to wide internet coverage and apps availability. With Lenovo, you will never run out of battery as it offers better battery capacity for the price and configuration. More importantly, you have turbocharging functionality, a feature that charges your phone completely within minutes of time. So, it's your turn now to choose a smartphone with a battery capacity you wanted at a price you are at comfort.</p>
                        <p><b></b></p>
                        <h3><b>Display:</b></h3>
                        <p></p>
                        <p>Lenovo uses the <a href="https://www.mysmartprice.com/best/mobile/best-display-phones">latest display</a> technology on its smartphones that ranges from WVGA to Full HD Super AMOLED display. For viewing vivid and crystal clear images, Super AMOLED screen technology is available in high-end Lenovo phones. Lenovo mobile screens are characterized with great ppi (Pixels per inch) that aids in viewing images sharper. So, choose the best Lenovo smartphone that fits your budget from the varying display range.</p>
                        <p><b></b></p>
                        <h3><b>Camera:</b></h3>
                        <p></p>
                        <p>A <a href="#">good camera</a> should always handily available with you to capture some great moments in your life. As smartphones are now paired up with great camera technology, there is no need now to carry a separate camera. Lenovo has taken care in the camera and imaging department by integrating the latest lens technology that comes with autofocus, HD video recording and a fixed focus selfie camera. Get set to capture precious moments in HD with the latest Lenovo smartphone camera that come in affordable price range.</p>
                        <p><b></b></p>
                        <h2><b>Frequently asked questions (FAQ) about Lenovo Mobile Phones?</b></h2>
                        <p></p>
                        <p><b></b></p>
                        <h3><b>What are the top Lenovo mobiles in 10K to 15K price range?</b></h3>
                        <p></p>
                        <p>Lenovo is known to offer the best budget range smartphones in India. In the price range of Rs 10,000 to Rs 15000, Lenovo has a range of smartphones to choose from. Here is the list of best Lenovo mobiles that come in that price range.</p>
                        <p>1. Lenovo K4 Note</p>
                        <p>2. Lenovo K5 Note</p>
                        <p>3. Lenovo K6 Note</p>
                        <p>4. Lenovo K6 Power</p>
                        <p>5. Lenovo Phab 2</p>
                        <p>6. Lenovo Zuk Z1</p>
                        <p>7. Lenovo Phab 2 Plus</p>
                        <p>8. Lenovo Vibe P1</p>
                        <p><b></b></p>
                        <h3><b>How is the sound quality of Lenovo smartphones?</b></h3>
                        <p></p>
                        <p>All Lenovo mobiles feature Dolby Atmos that is a surround sound technology that is comprehensive, in-depth and leaves an impression that sound is coming from all directions. So, if you want a smartphone with top-class sound quality, buy a Lenovo mobile phone.</p>
                        <p><b></b></p>
                        <h3><b>Do Lenovo mobile support VR (Virtual Reality) headset?</b></h3>
                        <p></p>
                        <p>All Lenovo mobiles come integrated with Gyroscope Sensor that is the most important feature to be compatible with a Virtual Reality viewing on a headset. To check if your Lenovo phones are compatible with VR headset, follow these simple steps.</p>
                        <p>1. Open youtube app on your Lenovo mobile and search for '360-degree video'</p>
                        <p>2. Now, open the video and move your fingers on the video and check if the video is moving along with your fingers.</p>
                        <p>3. Now move your smartphone and check if the video on youtube is also moving against the smartphone movements.</p>
                        <p>If the above all works, you can make sure that your Lenovo smartphone is VR headset compatible and you can buy a latest VR Headset.</p>
                        <p><b></b></p>
                        <h3><b>How can Lenovo be compared with Xiaomi or Oppo?</b></h3>
                        <p></p>
                        <p>Lenovo, Xiaomi and Oppo are the Chinese mobile brands catering smartphone technology globally. Each of the above brands has their own user credibility and reputation. Each brand has their devices that target a particular segment. For example, Oppo is more known as Selfie phone brand and is targeted for selfie lovers. Xiaomi is known to offer both budget range and premium phones with decent specifications for the price. Lenovo is a versatile technology company known for a range of laptops, tablets and smartphones. Lenovo offers its smartphones on the latest technology at an affordable price. For those who love to use native Android OS which is not much customized, Lenovo is a best option to buy for. Lenovo is the only brand that offers Dolby Atmos sound technology on all its phones.</p>
                        <p><b></b></p>
                        <h3><b>Are Lenovo and Motorola both the same? </b></h3>
                        <p></p>
                        <p>Lenovo is the parent company of Motorola which Lenovo acquired from Google in 2015. Recently Lenovo announced that it would be selling all its future phones on Motorola brand. Until then, each brand will have its own lineup of smartphones.</p>
                        <span class="head">You may also be interested in</span>
                        <div class="msplistdetailstxt">
                            <ul>
                                <li> <a href="#" target="_blank"> Lenovo Mobiles Under 10000 </a> </li>
                                <li> <a href="#" target="_blank"> Lenovo Mobiles Under 15000 </a> </li>
                                <li> <a href="#" target="_blank"> Huawei Mobiles Price </a> </li>
                                <li> <a href="#" target="_blank"> Gionee Mobile Price</a> </li>
                                <li> <a href="#" target="_blank"> Intex Mobile Price in India </a> </li>
                                <li> <a href="#" target="_blank"> Lenovo 4g Mobile Price </a> </li>
                                <li><a href="#" target="_blank">Lenovo mobiles under 20000</a></li>
                                <li><a href="#" target="_blank">Lenovo mobiles under 5000</a></li>
                                <li><a href="#" target="_blank">Lenovo Vibe Mobiles Price List</a></li>
                            </ul>
                            <br clear="all">
                        </div>
                    </div>
                </section>
                
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
</div>
<!--Top Brands End-->
<!--Footer Starts-->
@include('frontInc.footer')]
<!--Footer End-->
<!--main-content Ends Here-->
<!--main end here-->
@endsection