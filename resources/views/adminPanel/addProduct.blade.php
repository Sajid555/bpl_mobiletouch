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
							<form action="{{url('/addproducts')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Category</strong></label>
											<select class="form-control ProductCategory" id="ProductCategory" data-placeholder="Choose a Category" tabindex="1" name="cat_id">
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
											<select class="form-control brand" id="brand_id" data-placeholder="Choose a Category" tabindex="1" name="brand_id">
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
											<input type="text" id="price" name="price" class="form-control" placeholder="Enter product price">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Product Details</strong></label>
											<textarea class="form-control" rows="4"  id="msg" name="details"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Daraz Price</strong></label>
											<input type="text" id="price" name="drazpk" class="form-control" placeholder="Enter Daraz price">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>FlipCart Price</strong></label>
											<input type="text" id="price" name="drazpk" class="form-control" placeholder="Enter FlipCart price">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Ebay Price</strong></label>
											<input type="text" id="price" name="ebay" class="form-control" placeholder="Enter Ebay price">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="FormControlFile" class="control-label mb-10"><strong>Product Image</strong></label>
											<input type="file" id="image" name="image" class="form-control-file">
										</div>
									</div>	
								</div>
								<?php $photo=\App\photo::all() ?>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Slider Image</strong></label>
											<select class="form-control ProductCategory" id="ProductCategory" data-placeholder="Choose a Category" tabindex="1" name="image_id">
												<option selected disabled>Select slider images</option>
												@foreach($photo as $p)
                                                <option value="{{$p->id}}">{{$p->img_name}}</option>
                                                 @endforeach   
											</select>
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
											<select class="form-control" name="display_type" data-placeholder="Choose a Category" tabindex="1">

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
											<input type="text" id="price" name="Resolution" class="form-control" placeholder="Enter resolution">
										</div>
									</div>
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Size</strong></label>
											<input type="text" class="form-control" name="Size" placeholder="Enter size">
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Pixel Density</strong></label>
											<input type="text" class="form-control" name="Pixel_Density" placeholder="Enter pixel density">
										</div>
									</div>
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Touchscreen type</strong></label>
											<input type="text" class="form-control" name="Touchscreen_type" placeholder="Enter screen type">
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Color Reproduction</strong></label>
											<input type="text" class="form-control" name="Color_Reproduction"  placeholder="Enter pixel color reproduction">
										</div>
									</div>
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Protection</strong></label>
											<input type="text" class="form-control" name="Protection" id="Protection" placeholder="Enter protection">
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Screen to Body %</strong></label>
											<input type="text" class="form-control" name="Screen_to_body_percentage" placeholder="Enter pixel density">
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
											<input type="text" class="form-control" name="Dimensions" id="Dimensions" placeholder="Enter dimension">
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Weight</strong></label>
											<input type="text" class="form-control" name="Weight" placeholder="Enter weight">
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
											<input type="text" id="OS" class="form-control"  name="OS" placeholder="Enter OS">
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
														<input type="radio" name="realflash" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="realflash" id="radio2" value="No"   >
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
														<input type="radio" name="radio" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="radio" id="radio2" value="No"   >
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
											<input type="text" name="Primary" class="form-control" placeholder="Enter primary Camera">
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Front</strong></label>
											<input type="text" class="form-control" name="Front" placeholder="Enter front Camera">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Video</strong></label>
											<input type="text" class="form-control" name="Video" placeholder="Enter video @fps">
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
											<input type="text" class="form-control" name="Internal" placeholder="Enter internal memory">
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>RAM</strong></label>
											<input type="text" class="form-control" name="RAM" placeholder="Enter RAM">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Expandable</strong></label>
											<input type="text" class="form-control" name="Expandable" placeholder="Enter expandable memory">
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
											<input type="text" class="form-control" name="Type" placeholder="Enter battery type">
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Capacity</strong></label>
											<input type="text" class="form-control" name="Capacity" placeholder="Enter battery capacity">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Fast Charge</strong></label>
											<div class="radio-list">
												<div class="radio-inline pl-0">
													<div class="radio radio-dark">
														<input type="radio" name="Turbo" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="Turbo" id="radio2" value="No"   >
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
											<input type="text" class="form-control" name="Bluetooth" placeholder="Enter bluetooth">
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Wi-Fi</strong></label>
											<input type="text" class="form-control" placeholder="Enter Wi-Fi">
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
														<input type="radio" name="G2" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="G2" id="radio2" value="No"   >
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
														<input type="radio" name="G3" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="G3" id="radio2" value="No"   >
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
														<input type="radio" name="G4" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="G4" id="radio2" value="No"   >
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
														<input type="radio" name="USB" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="USB" id="radio2" value="No"   >
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
														<input type="radio"  name="GPS" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio"  name="GPS" id="radio2" value="No"   >
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
														<input type="radio" name="NFC" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="NFC" id="radio2" value="No"   >
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
											<input type="text" name="SIM" class="form-control" placeholder="Enter SIM configuration">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Infrared</strong></label>
											<div class="radio-list">
												<div class="radio-inline pl-0">
													<div class="radio radio-dark">
														<input type="radio" name="Infrared" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="Infrared" id="radio2" value="No"   >
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
											<input type="text" id="price" name="Variant" class="form-control" placeholder="Enter variant">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Architecture</strong></label>
											<input type="text" id="price" name="Architecture" class="form-control" placeholder="Enter Architecture">
										</div>
									</div>
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>No. of Cores</strong></label>
											<input type="text" class="form-control" name="Cores" placeholder="Enter no of cores">
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Make</strong></label>
											<input type="text" class="form-control" name="Make" placeholder="Enter make">
										</div>
									</div>
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>Frequency</strong></label>
											<input type="text" class="form-control"  name="Frequency" placeholder="Enter frequency">
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label mb-10"><strong>GPU</strong></label>
											<input type="text" class="form-control" name="GPU" placeholder="Enter GPU">
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
														<input type="radio" name="Proximity" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="Proximity" id="radio2" value="No"   >
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
														<input type="radio" name="Accelerometer" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="Accelerometer" id="radio2" value="No"   >
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
														<input type="radio" name="Gyroscope" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="Gyroscope" id="radio2" value="No"   >
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
														<input type="radio" name="Ambient_Light" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="Ambient_Light" id="radio2" value="No"   >
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
														<input type="radio" name="Fingerprint_sensor" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="Fingerprint_sensor" id="radio2" value="No"   >
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
														<input type="radio" name="Loudpeaker" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="Loudpeaker" id="radio2" value="No"   >
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
														<input type="radio" name="HeadPHones" id="radio1" value="YES"   >
														<label for="radio1">Yes</label>
													</div>
												</div>
												<div class="radio-inline">
													<div class="radio radio-dark">
														<input type="radio" name="HeadPHones" id="radio2" value="No"   >
														<label for="radio2">No</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/row-->
								<div class="form-actions">
									<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>save</span></button>
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