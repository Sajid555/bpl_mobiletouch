@extends('layouts.addProductApp')
@section('content')

<div class="container-fluid">
  <!-- Title -->
  <div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h5 class="txt-dark"><strong>Add Product:</strong></h5>
    </div>
  </div>
   <?php  
             $brand=\App\Brand::all();  
               ?>
 <?php $cat=\App\Category::all() ?>
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default card-view">
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <div class="form-wrap">
              <form action="{{route('postProduct')}}" method="POST" enctype="multipart/form-data">
                       {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Category</strong></label>
                      <select class="form-control ProductCategory" id="ProductCategory" data-placeholder="Choose a Category" tabindex="1" name="cat_id" required>
                        <option selected disabled>Select the Category</option>
                         @foreach($cat as $c)
                                                <option value="{{$c->id}}">{{$c->cat_name}}</option>
                                                 @endforeach
                      </select>
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Brand</strong></label>
                      <select class="form-control brand" id="brand_id" data-placeholder="Choose a Category" tabindex="1" name="brand_id" required>
                        <option selected disabled>Select the Brand</option>
                               @foreach($brand as $b)
                                                <option value="{{$b->brand_id}}">{{$b->brand_name}}</option>
                                                   @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <a href="{{url('/addbrand')}}">
                      <button type="button" class="btn  btn-primary btn-rounded">Add new Brand</button></a>
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <a href="{{url('/addmodel')}}">
                      <button type="button" class="btn  btn-primary btn-rounded">Add new Model</button></a>
                    </div>
                  </div>
                  <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Product Price</strong></label>
                      <input type="hidden" name="price" id="price" value="{{$data->id}}">
                      <input type="text" id="price" name="price" class="form-control" placeholder="Enter product price" required autofocus value="{{$data->price}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Product Details</strong></label>
                      <input type="hidden" name="details" id="details" value="{{$data->id}}">
                      <input type="text" id="price" name="price" class="form-control" placeholder="Enter product price" required autofocus value="{{$data->details}}">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Daraz Price</strong></label>
                      <input type="hidden" name="drazpk" id="drazpk" value="{{$data->id}}">
                      <input type="text" id="drazpk" name="drazpk" class="form-control" placeholder="Enter Daraz price" required autofocus value="{{$data->drazpk}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>FlipCart Price</strong></label>
                      <input type="hidden" name="flipcart" id="flipcart" value="{{$data->id}}">
                      <input type="text" id="flipcart" name="flipcart" class="form-control" placeholder="Enter FlipCart price" required autofocus value="{{$data->drazpk}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Ebay Price</strong></label>
                      <input type="hidden" name="ebay" id="ebay" value="{{$data->id}}">
                      <input type="text" id="ebay" name="ebay" class="form-control" placeholder="Enter Ebay price" required autofocus value="{{$data->drazpk}}">
                    </div>
                  </div>
                </div>
                <?php $photo=\App\photo::all() ?>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Slider Image</strong></label>
                      <input type="hidden" name="image_id" id="image_id" value="{{$data->id}}">
                      <select class="form-control ProductCategory" id="ProductCategory" data-placeholder="Choose a Category" tabindex="1" name="image_id" required autofocus value="{{$data->image_id}}">
                        <option selected disabled>Select slider images</option>
                        @foreach($photo as $p)
                                                <option value="{{$p->id}}">{{$p->img_name}}</option>
                                                 @endforeach   
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="FormControlFile" class="control-label mb-10"><strong>Product Image</strong></label>
                      <input type="hidden" name="image" id="image" value="{{$data->id}}">
                      <input type="file" id="image" name="image" class="form-control-file" required autofocusvalue="{{$data->image}}" >
                    </div>
                  </div>  
                </div>
                <div class="seprator-block"></div>
                <h5 class="txt-dark capitalize-font">Display</h5>
                <hr class="light-grey-hr"/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Display Type</strong></label>
                      <input type="hidden" name="display_type" id="display_type" value="{{$data->id}}">
                      <select class="form-control" name="display_type" data-placeholder="Choose a Category" tabindex="1" required value="{{$data->display_type}}">

                                   <option  value="IPS-LCD ">IPS-LCD </option>

                                   <option  value="Resistive Touchscreen LCD ">Resistive Touchscreen LCD </option>
                                   <option  value="Capacitive Touch screen LCD ">Capacitive Touch screen LCD </option>
                                   <option  value="OLED ">OLED </option>
                                   <option  value="AMOLED Retina Display ">AMOLED Retina Display </option>
                                   <option  value="Haptic ">Haptic </option>
                                   <option  value="Tactile touch screen ">Tactile touch screen</option>
                                   <option  value="Gorilla Glass ">Gorilla Glass </option>
                                </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Resolution</strong></label>
                      <input type="hidden" name="Resolution" id="Resolution" value="{{$data->id}}">
                      <input type="text" id="Resolution" name="Resolution" class="form-control" placeholder="Enter resolution" required autofocus value="{{$data->Resolution}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Size</strong></label>
                      <input type="hidden" name="Size" id="Size" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Size" placeholder="Enter size" required autofocus value="{{$data->Size}}">
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Pixel Density</strong></label>
                      <input type="hidden" name="Pixel_Density" id="Pixel_Density" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Pixel_Density" placeholder="Enter pixel density"required autofocus value="{{$data->Pixel_Density}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Touchscreen type</strong></label>
                      <input type="hidden" name="Touchscreen_type" id="Touchscreen_type" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Touchscreen_type" placeholder="Enter screen type" required autofocus value="{{$data->Touchscreen_type}}">
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Color Reproduction</strong></label>
                      <input type="hidden" name="Color_Reproduction" id="Color_Reproduction" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Color_Reproduction"  placeholder="Enter pixel color reproduction" required autofocus value="{{$data->Color_Reproduction}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Protection</strong></label>
                      <input type="hidden" name="Protection" id="Protection" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Protection" id="Protection" placeholder="Enter protection" required autofocus value="{{$data->Protection}}">
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Screen to Body %</strong></label>
                      <input type="hidden" name="Screen_to_body_percentage" id="Screen_to_body_percentage" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Screen_to_body_percentage" placeholder="Enter pixel density" required autofocus value="{{$data->Screen_to_body_percentage}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="seprator-block"></div>
                <h5 class="txt-dark capitalize-font">Design & Build</h5>
                <hr class="light-grey-hr"/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10" for="Dimensions"><strong>Dimensions</strong></label>
                      <input type="hidden" name="Dimensions" id="Dimensions" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Dimensions" id="Dimensions" placeholder="Enter dimension" required autofocus value="{{$data->Dimensions}}">
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Weight</strong></label>
                      <input type="hidden" name="Weight" id="Weight" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Weight" placeholder="Enter weight" required autofocus value="{{$data->Weight}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="seprator-block"></div>
                <h5 class="txt-dark capitalize-font">Software</h5>
                <hr class="light-grey-hr"/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Operating System</strong></label>
                      <input type="hidden" name="OS" id="OS" value="{{$data->id}}">
                      <input type="text" id="OS" class="form-control"  name="OS" placeholder="Enter OS" required autofocus value="{{$data->OS}}">
                    </div>
                  </div>
                </div>
                <div class="seprator-block"></div>
                <h5 class="txt-dark capitalize-font">Camera</h5>
                <hr class="light-grey-hr"/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Rear Flash</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="realflash"  {{ $data->realflash === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="realflash" {{ $data->realflash === 'NO' ? 'checked' : '' }} id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Selfie Flash</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="radio" {{ $data->realflash === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1" >Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="radio" {{ $data->realflash === 'NO' ? 'checked' : '' }}id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Primary</strong></label>
                      <input type="hidden" name="Primary" id="Primary" value="{{$data->id}}">
                      <input type="text" name="Primary" class="form-control" placeholder="Enter primary Camera" required autofocus value="{{$data->Primary}}">
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Front</strong></label>
                      <input type="hidden" name="Front" id="Front" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Front" placeholder="Enter front Camera" required autofocus value="{{$data->Front}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Video</strong></label>
                      <input type="hidden" name="Video" id="Video" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Video" placeholder="Enter video @fps" required autofocus value="{{$data->Video}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="seprator-block"></div>
                <h5 class="txt-dark capitalize-font">Storage</h5>
                <hr class="light-grey-hr"/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Internal</strong></label>
                      <input type="hidden" name="Internal" id="Internal" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Internal" placeholder="Enter internal memory" required autofocus value="{{$data->Internal}}">
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>RAM</strong></label>
                      <input type="hidden" name="RAM" id="RAM" value="{{$data->id}}">
                      <input type="text" class="form-control" name="RAM" placeholder="Enter RAM" required autofocus value="{{$data->RAM}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Expandable</strong></label>
                      <input type="hidden" name="Expandable" id="Expandable" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Expandable" placeholder="Enter expandable memory" required autofocus value="{{$data->Expandable}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="seprator-block"></div>
                <h5 class="txt-dark capitalize-font">Battery</h5>
                <hr class="light-grey-hr"/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Type</strong></label>
                      <input type="hidden" name="Type" id="Type" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Type" placeholder="Enter battery type" required autofocus value="{{$data->Type}}">
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Capacity</strong></label>
                      <input type="hidden" name="Capacity" id="Capacity" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Capacity" placeholder="Enter battery capacity" required autofocus value="{{$data->Capacity}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Fast Charge</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="Turbo"  {{ $data->Turbo === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="Turbo"  {{ $data->Turbo === 'NO' ? 'checked' : '' }} id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="seprator-block"></div>
                <h5 class="txt-dark capitalize-font">Connectivity</h5>
                <hr class="light-grey-hr"/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Bluetooth</strong></label>
                      <input type="hidden" name="Bluetooth" id="Bluetooth" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Bluetooth" placeholder="Enter bluetooth" required autofocus value="{{$data->Bluetooth}}">
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Wi-Fi</strong></label>
                      <input type="hidden" name="Capacity" id="Capacity" value="{{$data->id}}">
                      <input type="text" class="form-control" placeholder="Enter Wi-Fi" required autofocus value="{{$data->id}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>2G</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="G2"  {{ $data->G2 === 'YES' ? 'checked' : '' }}  id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="G2"   {{ $data->G2 === 'NO' ? 'checked' : '' }} id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>3G</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="G3"  {{ $data->G3 === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="G3"  {{ $data->G3 === 'No' ? 'checked' : '' }}  id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>4G</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="G4"  {{ $data->G4 === 'YES' ? 'checked' : '' }}  id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="G4"  {{ $data->G4 === 'No' ? 'checked' : '' }}  id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>USB</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="USB"  {{ $data->USB === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="USB"  {{ $data->USB === 'No' ? 'checked' : '' }}  id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>GPS</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio"  name="GPS"  {{ $data->GPS === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio"  name="GPS"  {{ $data->GPS === 'No' ? 'checked' : '' }} id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>NFC Chipset</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="NFC"  {{ $data->NFC === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="NFC"  {{ $data->NFC === 'No' ? 'checked' : '' }} id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>SIM Configuration</strong></label>
                      <input type="hidden" name="SIM" id="SIM" value="{{$data->id}}">
                      <input type="text" name="SIM" class="form-control" placeholder="Enter SIM configuration" value="{{$data->SIM}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Infrared</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="Infrared"  {{ $data->Infrared === 'YES' ? 'checked' : '' }}  id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="Infrared"  {{ $data->Infrared === 'No' ? 'checked' : '' }}  id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="seprator-block"></div>
                <h5 class="txt-dark capitalize-font">Processor</h5>
                <hr class="light-grey-hr"/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Variant</strong></label>
                      <input type="hidden" name="Variant" id="Variant" value="{{$data->id}}">
                      <input type="text" id="Variant" name="Variant" class="form-control" placeholder="Enter variant" required autofocus value="{{$data->Variant}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Architecture</strong></label>
                      <input type="hidden" name="Architecture" id="Architecture" value="{{$data->id}}">
                      <input type="text" id="Architecture" name="Architecture" class="form-control" placeholder="Enter Architecture" required autofocus value="{{$data->Architecture}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>No. of Cores of Processor</strong></label>
                      <input type="hidden" name="Cores" id="Cores" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Cores" placeholder="Enter no of cores" required autofocus value="{{$data->Cores}}">
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Make</strong></label>
                      <input type="hidden" name="Make" id="Make" value="{{$data->id}}">
                      <input type="text" class="form-control" name="Make" placeholder="Enter make" required autofocus value="{{$data->Make}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Frequency</strong></label>
                      <input type="hidden" name="SIM" id="SIM" value="{{$data->id}}">
                      <input type="text" class="form-control"  name="Frequency" placeholder="Enter frequency" required autofocus value="{{$data->Frequency}}">
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>GPU</strong></label>
                      <input type="hidden" name="GPU" id="GPU" value="{{$data->id}}">
                      <input type="text" class="form-control" name="GPU" placeholder="Enter GPU" required autofocus value="{{$data->GPU}}">
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="seprator-block"></div>
                <h5 class="txt-dark capitalize-font">Sensors</h5>
                <hr class="light-grey-hr"/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Proximity</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="Proximity"  {{ $data->Proximity === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="Proximity"  {{ $data->Proximity === 'No' ? 'checked' : '' }} id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Accelerometer</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="Accelerometer"  {{ $data->Accelerometer === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="Accelerometer"  {{ $data->Accelerometer === 'No' ? 'checked' : '' }} id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Gyroscope</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="Gyroscope"  {{ $data->Gyroscope === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="Gyroscope"  {{ $data->Gyroscope === 'No' ? 'checked' : '' }} id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Ambient Light</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="Ambient_Light"  {{ $data->Ambient_Light === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="Ambient_Light"  {{ $data->Ambient_Light === 'No' ? 'checked' : '' }}  id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Fingerprint sensor</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="Fingerprint_sensor"  {{ $data->Fingerprint_sensor === 'YES' ? 'checked' : '' }} id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="Fingerprint_sensor"  {{ $data->Fingerprint_sensor === 'No' ? 'checked' : '' }} id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="seprator-block"></div>
                <h5 class="txt-dark capitalize-font">Sound</h5>
                <hr class="light-grey-hr"/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Loudspeaker</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="Loudpeaker"  {{ $data->Loudpeaker === 'YES' ? 'checked' : '' }}  id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="Loudpeaker"  {{ $data->Loudpeaker === 'No' ? 'checked' : '' }}  id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10"><strong>Headphones</strong></label>
                      <div class="radio-list">
                        <div class="radio-inline pl-0">
                          <div class="radio radio-dark">
                            <input type="radio" name="HeadPHones"  {{ $data->HeadPHones === 'YES' ? 'checked' : '' }}  id="radio1" value="YES"   >
                            <label for="radio1">Yes</label>
                          </div>
                        </div>
                        <div class="radio-inline">
                          <div class="radio radio-dark">
                            <input type="radio" name="HeadPHones"  {{ $data->HeadPHones === 'No' ? 'checked' : '' }}  id="radio2" value="No"   >
                            <label for="radio2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <div class="form-actions">
                  <button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>Save</span></button>
                  <button type="button" class="btn btn-warning pull-left">Cancel</button>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Row -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!-- <script  src="../../Jquery/prettify.js"></script> -->
 <!-- <script type="text/javascript"> -->
   <script>
      $(document).ready(function(){
          
          
          
         $( ".ProductCategory" ).change(function() {
       var d = document.getElementById("ProductCategory").value;
       

      $.ajax({

                    type:'get',

                    url: 'http://localhost/BPL-mobileshop/public/GetSubCategoryMobNames/'+d,
                    //data:{'id':d},

                    success:function(data){
                         console.log(data);
                         $('.brand').find('option').remove();

                        var i = 0;
                         while(i < data.length)
                         {


                             $('.brand').append($('<option>',
                             {
                                value: data[i].id,
                                text : data[i].brand_name,
                              }));
                             i++;
                       }

                      },
                        error: function (data) {

                          console.log(data);
                        }




});
       });  

       });    

</script>

@endsection