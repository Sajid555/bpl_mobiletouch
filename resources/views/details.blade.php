@extends('layouts.productDetail')
@section('content')

   <!--Header/Nav-->
   @include('frontInc.header')

<div id="DIV_1">
<div id="DIV_2">
   <div id="DIV_3">
      <a href="" id="A_4">Mobile Phones / <?php 
         $productName=DB::table('categories')->where('id', '=', $data->cat_id)->get();
         echo $productName[0]->cat_name; 
         
         ?> / 
      <?php 
         $productName=DB::table('brands')->where('id', '=', $data->brand_id)->get();
         echo $productName[0]->brand_name; 
         
         ?></a>  
   </div>
</div>
<div id="DIV_15">
   <div id="DIV_26">
      <?php echo ($data->details) ?>
   </div>
   <?php $img=\App\photo::where('id','=',$data->image_id)->get(); ?>
   <div id="DIV_59">
      <div id="DIV_60">
         <div id="DIV_61">
         </div>
         <div id="DIV_62">
            @foreach($img as $pic)
            <img id="mainImage" src= "{{asset('images') . '/'. $pic->image}}"  >
         </div>
         <div id="DIV_64">
            <div id="DIV_65">
               <img src= "{{asset('images') . '/'.$pic->image1}}" width="42" height="46" >
            </div>
            <div id="DIV_67">
               <img src="{{asset('images') . '/'. $pic->image2}}" width="42" height="46">
            </div>
            <div id="DIV_69">
               <img src="{{asset('images') . '/' . $pic->image3}}" width="42" height="46">
            </div>
            <div id="DIV_71">
               <img src="{{asset('images') . '/' . $pic->image4}}" width="42" height="46">
            </div>
            @endforeach
            <!--  <div id="DIV_73">
               <a href="https://www.youtube.com/watch?v=5_-NKRVn7IQ"> <img src="BPL-mobileshop/public/flextop/images/SamsungGalaxyS9Plus.gif"> Vidio </a>
               </div> -->
         </div>
      </div>
      <div id="DIV_78">
         <div id="DIV_79">
            <div id="DIV_80">
               <span id="SPAN_81">Best Price:</span> <span id="SPAN_82">Rs:<?php echo ($data->price) ?></span> <span id="SPAN_83"></span>
            </div>
            <div id="DIV_84">
               <div id="DIV_85">
               </div>
               <div id="DIV_102">
                  <div id="DIV_103">
                     <div id="DIV_104">
                     </div>
                  </div>
                  <div id="DIV_106">
                  </div>
               </div>
            </div>
            <div id="DIV_110">
               <div id="DIV_111">
                  <div id="DIV_112">
                     <div id="DIV_113">
                        <img src="https://assets.mspcdn.net/q_auto/logos/partners/flipkart_store.png" id="IMG_114" alt='' />
                     </div>
                     <div id="DIV_115">
                        Rs:<?php echo ($data->flipcart) ?>
                        <div id="DIV_116">
                        </div>
                     </div>
                     <div id="DIV_117">
                        <a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301651430&amp;store=flipkart&amp;gts_button_type=top_pricetable" id="A_118"></a>
                     </div>
                  </div>
               </div>
               <div id="DIV_119">
                  <div id="DIV_120">
                     <div id="DIV_121">
                        <img src="https://assets.mspcdn.net/q_auto/logos/partners/samsungs9_store.png" id="IMG_122" alt='' />
                     </div>
                     <div id="DIV_123">
                        Rs:<?php echo ($data->drazpk) ?>
                        <div id="DIV_124">
                        </div>
                     </div>
                     <div id="DIV_125">
                        <a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301495601&amp;store=samsungs9&amp;gts_button_type=top_pricetable" id="A_126"></a>
                     </div>
                  </div>
               </div>
               <div id="DIV_127">
                  <div id="DIV_128">
                     <div id="DIV_129">
                        <img src="https://assets.mspcdn.net/q_auto/logos/partners/croma_store.png" id="IMG_130" alt='' />
                     </div>
                     <div id="DIV_131">
                        Rs:<?php echo ($data->ebay) ?>
                        <div id="DIV_132">
                        </div>
                     </div>
                     <div id="DIV_133">
                        <a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301670064&amp;store=croma&amp;gts_button_type=top_pricetable" id="A_134"></a>
                     </div>
                  </div>
               </div>
            </div>
            <div id="DIV_135">
               <h3 id="H3_136">
                  Key Specifications
               </h3>
               <ul id="UL_137">
                  <li id="LI_138">
                     <?php echo ($data->Variant) ?>
                  </li>
                  <li id="LI_139">
                     <?php echo ($data->RAM) ?>
                  </li>
                  <li id="LI_140">
                     <?php echo ($data->Internal) ?>
                  </li>
                  <li id="LI_141">
                     <?php echo ($data->Capacity) ?>
                  </li>
                  <li id="LI_142">
                     <?php echo ($data->Primary) ?> &amp; <?php echo ($data->Front) ?>
                  </li>
                  <li id="LI_143">
                     <?php echo ($data->Size) ?> inch screen
                  </li>
                  <li id="LI_144">
                     <?php echo ($data->SIM) ?>
                  </li>
                  <li id="LI_145">
                     <?php echo ($data->OS) ?>
                  </li>
               </ul>
            </div>
            <div id="DIV_146">
               <div id="DIV_147">
                  <div id="DIV_148">
                     <div id="DIV_149">
                        Offers
                     </div>
                     <ul id="UL_150">
                        <li id="LI_151">
                           Earn <span id="SPAN_152">₹434</span> cashback on this product<span id="SPAN_153"></span>. (Not applicable for purchases in Amazon) <span id="SPAN_154">i</span> <span id="SPAN_155"><strong id="STRONG_156">Sign up</strong></span>
                        </li>
                     </ul>
                     <ul id="UL_157">
                        <li id="LI_158">
                           Extra <strong id="STRONG_159">upto 25% cashback</strong> on adding our Chrome extension <span id="SPAN_160">i</span> <span id="SPAN_161"><strong id="STRONG_162">Know more</strong></span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="DIV_163">
<div id="DIV_164">
<div id="DIV_165">
   <div id="DIV_166">
      <script id="SCRIPT_167">googletag.cmd.push(function() { googletag.display('div-gpt-ad-1486990827467-10'); });</script>
      <div id="DIV_168">
      </div>
   </div>
</div>
<div id="DIV_170">
   <div id="DIV_211">
      <h2 id="H2_212">
         <?php 
            $productName=DB::table('categories')->where('id', '=', $data->cat_id)->get();
            echo $productName[0]->cat_name; 
            
            ?></a>
         <?php 
            $productName=DB::table('brands')->where('id', '=', $data->brand_id)->get();
            echo $productName[0]->brand_name; 
            
            ?></a> 
      </h2>
      <table id="TABLE_213">
         <tbody id="TBODY_214">
            <tr id="TR_215">
               <td colspan="2" id="TD_216">
                  Display
               </td>
            </tr>
            <tr id="TR_217">
               <td id="TD_218">
                  Display Type
               </td>
               <td id="TD_219">
                  <?php echo ($data->display_type) ?>
               </td>
            </tr>
            <tr id="TR_220">
               <td id="TD_221">
                  Resolution
               </td>
               <td id="TD_222">
                  <?php echo ($data->Resolution) ?>
               </td>
            </tr>
            <tr id="TR_223">
               <td id="TD_224">
                  Size (in inches)
               </td>
               <td id="TD_225">
                  <?php echo ($data->Size) ?>
               </td>
            </tr>
            <tr id="TR_226">
               <td id="TD_227">
                  Pixel Density
               </td>
               <td id="TD_228">
                  <?php echo ($data->Pixel_Density) ?>
               </td>
            </tr>
            <tr id="TR_229">
               <td id="TD_230">
                  Touchscreen type
               </td>
               <td id="TD_231">
                  <?php echo ($data->Touchscreen_type) ?>
               </td>
            </tr>
            <tr id="TR_232">
               <td id="TD_233">
                  Color Reproduction
               </td>
               <td id="TD_234">
                  <?php echo ($data->Color_Reproduction) ?>
               </td>
            </tr>
            <tr id="TR_235">
               <td id="TD_236">
                  Protection
               </td>
               <td id="TD_237">
                  <?php echo ($data->Protection) ?>
               </td>
            </tr>
            <tr id="TR_238">
               <td id="TD_239">
                  Screen to body percentage
               </td>
               <td id="TD_240">
                  <?php echo ($data->Screen_to_body_percentage) ?>
               </td>
            </tr>
            <tr id="TR_241">
               <td colspan="2" id="TD_242">
                  Design and Build
               </td>
            </tr>
            <tr id="TR_243">
               <td id="TD_244">
                  Dimensions
               </td>
               <td id="TD_245">
                  <span id="SPAN_246">5.8</span>x<span id="SPAN_247">2.7</span>x<span id="SPAN_248">0.3 inches</span>
               </td>
            </tr>
            <tr id="TR_249">
               <td id="TD_250">
                  Weight
               </td>
               <td id="TD_251">
                  <span id="SPAN_252"><?php echo ($data->Weight) ?></span>
               </td>
            </tr>
            <tr id="TR_253">
               <td colspan="2" id="TD_254">
                  Software
               </td>
            </tr>
            <tr id="TR_255">
               <td id="TD_256">
                  Operating System
               </td>
               <td id="TD_257">
                  <?php echo ($data->OS) ?>
               </td>
            </tr>
            <tr id="TR_258">
               <td colspan="2" id="TD_259">
                  Camera
               </td>
            </tr>
            <tr id="TR_260">
               <td id="TD_261">
                  Rear Flash
               </td>
               <td id="TD_262">
                  <?php echo ($data->realflash) ?>
               </td>
            </tr>
            <tr id="TR_263">
               <td id="TD_264">
                  Selfie Flash
               </td>
               <td id="TD_265">
                  No
               </td>
            </tr>
            <tr id="TR_266">
               <td id="TD_267">
                  Primary
               </td>
               <td id="TD_268">
                  <?php echo ($data->Primary) ?>
               </td>
            </tr>
            <tr id="TR_269">
               <td id="TD_270">
                  Front
               </td>
               <td id="TD_271">
                  <?php echo ($data->Front) ?>
               </td>
            </tr>
            <tr id="TR_272">
               <td id="TD_273">
                  Video
               </td>
               <td id="TD_274">
                  <?php echo ($data->Video) ?>
               </td>
            </tr>
            <tr id="TR_275">
               <td colspan="2" id="TD_276">
                  Storage
               </td>
            </tr>
            <tr id="TR_277">
               <td id="TD_278">
                  Internal
               </td>
               <td id="TD_279">
                  <?php echo ($data->Internal) ?>
               </td>
            </tr>
            <tr id="TR_280">
               <td id="TD_281">
                  RAM
               </td>
               <td id="TD_282">
                  <?php echo ($data->RAM) ?>
               </td>
            </tr>
            <tr id="TR_283">
               <td id="TD_284">
                  Expandable
               </td>
               <td id="TD_285">
                  <?php echo ($data->Expandable) ?>
               </td>
            </tr>
            <tr id="TR_286">
               <td colspan="2" id="TD_287">
                  Battery
               </td>
            </tr>
            <tr id="TR_288">
               <td id="TD_289">
                  Type
               </td>
               <td id="TD_290">
                  <?php echo ($data->Type) ?>
               </td>
            </tr>
            <tr id="TR_291">
               <td id="TD_292">
                  Capacity
               </td>
               <td id="TD_293">
                  <?php echo ($data->Capacity) ?>
               </td>
            </tr>
            <tr id="TR_294">
               <td id="TD_295">
                  Turbo Charge
               </td>
               <td id="TD_296">
                  Yes
               </td>
            </tr>
            <tr id="TR_297">
               <td colspan="2" id="TD_298">
                  Connectivity
               </td>
            </tr>
            <tr id="TR_299">
               <td id="TD_300">
                  Bluetooth
               </td>
               <td id="TD_301">
                  <?php echo ($data->Bluetooth) ?>
               </td>
            </tr>
            <tr id="TR_305">
               <td id="TD_306">
                  3G
               </td>
               <td id="TD_307">
                  <?php echo ($data->G3) ?>
               </td>
            </tr>
            <tr id="TR_308">
               <td id="TD_309">
                  USB
               </td>
               <td id="TD_310">
                  <?php echo ($data->USB) ?>
               </td>
            </tr>
            <tr id="TR_311">
               <td id="TD_312">
                  Voice Over LTE (VoLTE)
               </td>
               <td id="TD_313">
                  Yes
               </td>
            </tr>
            <tr id="TR_314">
               <td id="TD_315">
                  2G
               </td>
               <td id="TD_316">
                  <?php echo ($data->G2) ?>
               </td>
            </tr>
            <tr id="TR_317">
               <td id="TD_318">
                  4G
               </td>
               <td id="TD_319">
                  <?php echo ($data->G4) ?>
               </td>
            </tr>
            <tr id="TR_320">
               <td id="TD_321">
                  SIM Configuration
               </td>
               <td id="TD_322">
                  <?php echo ($data->SIM) ?>
               </td>
            </tr>
            <tr id="TR_323">
               <td id="TD_324">
                  GPS
               </td>
               <td id="TD_325">
                  <?php echo ($data->GPS) ?>
               </td>
            </tr>
            <tr id="TR_326">
               <td id="TD_327">
                  NFC Chipset
               </td>
               <td id="TD_328">
                  <?php echo ($data->NFC) ?>
               </td>
            </tr>
            <tr id="TR_329">
               <td id="TD_330">
                  Infrared
               </td>
               <td id="TD_331">
                  <?php echo ($data->Infrared) ?>
               </td>
            </tr>
            <tr id="TR_332">
               <td colspan="2" id="TD_333">
                  Processor
               </td>
            </tr>
            <tr id="TR_334">
               <td id="TD_335">
                  Variant
               </td>
               <td id="TD_336">
                  <?php echo ($data->Variant) ?>
               </td>
            </tr>
            <tr id="TR_337">
               <td id="TD_338">
                  Architecture
               </td>
               <td id="TD_339">
                  <?php echo ($data->Architecture) ?>
               </td>
            </tr>
            <tr id="TR_340">
               <td id="TD_341">
                  No of Cores
               </td>
               <td id="TD_342">
                  <?php echo ($data->Cores) ?>
               </td>
            </tr>
            <tr id="TR_343">
               <td id="TD_344">
                  Make
               </td>
               <td id="TD_345">
                  <?php echo ($data->Make) ?>
               </td>
            </tr>
            <tr id="TR_346">
               <td id="TD_347">
                  Frequency
               </td>
               <td id="TD_348">
                  <?php echo ($data->Frequency) ?>
               </td>
            </tr>
            <tr id="TR_349">
               <td id="TD_350">
                  GPU
               </td>
               <td id="TD_351">
                  <?php echo ($data->GPU) ?>
               </td>
            </tr>
            <tr id="TR_352">
               <td colspan="2" id="TD_353">
                  Sensors
               </td>
            </tr>
            <tr id="TR_354">
               <td id="TD_355">
                  Proximity
               </td>
               <td id="TD_356">
                  <?php echo ($data->Proximity) ?>
               </td>
            </tr>
            <tr id="TR_357">
               <td id="TD_358">
                  Accelerometer
               </td>
               <td id="TD_359">
                  <?php echo ($data->Accelerometer) ?>
               </td>
            </tr>
            <tr id="TR_360">
               <td id="TD_361">
                  Gyroscope
               </td>
               <td id="TD_362">
                  <?php echo ($data->Gyroscope) ?>
               </td>
            </tr>
            <tr id="TR_363">
               <td id="TD_364">
                  Ambient Light
               </td>
               <td id="TD_365">
                  <?php echo ($data->Ambient_Light) ?>
               </td>
            </tr>
            <tr id="TR_366">
               <td id="TD_367">
                  Fingerprint sensor
               </td>
               <td id="TD_368">
                  <?php echo ($data->Fingerprint_sensor) ?>
               </td>
            </tr>
            <tr id="TR_369">
               <td colspan="2" id="TD_370">
                  Sound
               </td>
            </tr>
            <tr id="TR_371">
               <td id="TD_372">
                  Loudspeaker
               </td>
               <td id="TD_373">
                  <?php echo ($data->Loudpeaker) ?>
               </td>
            </tr>
            <tr id="TR_374">
               <td id="TD_375">
                  Headphones
               </td>
               <td id="TD_376">
                  <?php echo ($data->HeadPHones) ?>
               </td>
            </tr>

         </tbody>

      </table>

   </div>

</div>

<div id="DIV_1">
   <form id="FORM_2">
      <div id="DIV_3">
         <input type="text" placeholder="Ask or search questions" id="INPUT_4" />
         <div id="DIV_5">
         </div>
         <div id="DIV_6">
            Please ask the question in above box
         </div>
      </div>
   </form>
   <div id="DIV_7">
      <div id="DIV_8">
          <span id="SPAN_9">No results found.</span>
         <div id="DIV_10">
            Ask a Question
         </div>
      </div>
   </div>
   <div id="DIV_11">
      <div id="DIV_12">
         <div id="DIV_13">
             <span id="SPAN_14">5</span> <span id="SPAN_15">Upvote(s)</span>
         </div>
         <div id="DIV_16">
            Does it have a DSLR camera feature?
         </div>
         <div id="DIV_17">
            <div id="DIV_18">
               No, it doesn't have a DSLR camera feature.
               <div id="DIV_19">
                  <div id="DIV_20">
                     By Sharfuddin
                  </div> <span id="SPAN_21"> <span id="SPAN_22">Mark Helpful (<span id="SPAN_23">21</span>)</span></span>
               </div>
            </div>
         </div>
         <div id="DIV_24">
            Write Answer
         </div>
      </div>
      <div id="DIV_25">
         <div id="DIV_26">
             <span id="SPAN_27">3</span> <span id="SPAN_28">Upvote(s)</span>
         </div>
         <div id="DIV_29">
            Does it support VoLTE?
         </div>
         <div id="DIV_30">
            <div id="DIV_31">
               Yes, it supports VoLTE.
               <div id="DIV_32">
                  <div id="DIV_33">
                     By Srikanth
                  </div> <span id="SPAN_34"> <span id="SPAN_35">Mark Helpful (<span id="SPAN_36">11</span>)</span></span>
               </div>
            </div>
         </div>
         <div id="DIV_37">
            Write Answer
         </div>
      </div>
      <div id="DIV_38">
         <div id="DIV_39">
             <span id="SPAN_40">6</span> <span id="SPAN_41">Upvote(s)</span>
         </div>
         <div id="DIV_42">
            Which type of battery is used in this mobile?
         </div>
         <div id="DIV_43">
            <div id="DIV_44">
               It comes with Li-Ion 3000 mAh battery.
               <div id="DIV_45">
                  <div id="DIV_46">
                     By Shiva
                  </div> <span id="SPAN_47"> <span id="SPAN_48">Mark Helpful (<span id="SPAN_49">19</span>)</span></span>
               </div>
            </div>
         </div>
         <div id="DIV_50">
            Write Answer
         </div>
      </div>
      <div id="DIV_51">
         <div id="DIV_52">
             <span id="SPAN_53">11</span> <span id="SPAN_54">Upvote(s)</span>
         </div>
         <div id="DIV_55">
            Which is the best phone between Samsung Galaxy J6 and Samsung Galaxy J7 Duo?
         </div>
         <div id="DIV_56">
            <div id="DIV_57">
               Samsung Galaxy J6 is the best because of its infinity display.
               <div id="DIV_58">
                  <div id="DIV_59">
                     By Visha**
                  </div> <span id="SPAN_60"> <span id="SPAN_61">Mark Helpful (<span id="SPAN_62">32</span>)</span></span>
               </div>
            </div>
         </div>
         <div id="DIV_63">
            Write Answer
         </div>
      </div>
      <div id="DIV_64">
         <div id="DIV_65">
             <span id="SPAN_66">4</span> <span id="SPAN_67">Upvote(s)</span>
         </div>
         <div id="DIV_68">
            Does it have a curved display?
         </div>
         <div id="DIV_69">
            <div id="DIV_70">
               Yes, it has a curved display.
               <div id="DIV_71">
                  <div id="DIV_72">
                     By Shiva
                  </div> <span id="SPAN_73"> <span id="SPAN_74">Mark Helpful (<span id="SPAN_75">15</span>)</span></span>
               </div>
            </div>
         </div>
         <div id="DIV_76">
            Write Answer
         </div>
      </div>
   </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://www.mysmartprice.com/msp/js/jquery-ui-1.10.3.custom.pack.js?release=4bbcefbf3169d14c53c2c3901b633f77" defer=""></script>
<script type="text/javascript" src="https://www.mysmartprice.com/msp/js/jquery-ui-1.10.3.slider.js?release=d0383ea6bf671a74fa2b2ef5a960db48" defer=""></script>
<script type="text/javascript" src="https://www.mysmartprice.com/assets/js_modules/dist/modules-bundle.js?release=60f0051bf8d11143cff13a84ed42398b" defer=""></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.18/require.min.js" defer=""></script>
<script type="text/javascript">
   $("#DIV_64 img").hover(function() {
   
     var imageSrc=$(this).attr("src");
       $("#mainImage").attr('src',imageSrc);
   }, function() {
   });
   
</script>
<script type="text/javascript">
   $("#DIV_75 img").hover(function() {
   
     var imageSrc=$(this).attr("src");
       $("#mainImage").attr('src',imageSrc);
   }, function() {
   });
   
</script>



@endsection