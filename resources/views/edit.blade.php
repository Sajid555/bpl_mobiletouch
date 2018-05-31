

   
  @extends('master')

  @section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
              <?php  
             $brand=\App\Brand::all();  
               ?>


   <div class="container">
      <div class="col-md-9">
         <h2 class="page-header" style="color:cadetblue">Add Product :</h2>
         <form class="form-horizontal" action="{{route('saveData')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

          <?php $cat=\App\Category::all() ?>
               
            <div class="form-group">
               <label class="control-label col-xs-3   " for="category">Category:</label>
               <div class="col-xs-9">
                  <select class="form-control ProductCategory" id="ProductCategory" name="cat_id">
                     <option selected disabled>Select the Category</option>
                     
                     @foreach($cat as $c)
                     <option value="{{$c->id}}">{{$c->cat_name}}</option>
                   @endforeach
                  </select>
               </div>
            </div>
                   <div class="form-group" style="padding-left:700px">
            
                    <a href="{{url('AddCategory')}}"><button type="button" class="btn btn-info">Add new category</button></a>
                 
            </div>

            <div class="form-group">
               <label class="control-label col-xs-3  " for="brand">Brands:</label>
               <div class="col-xs-9">
                  <select class="form-control brand" id="brand_id" name="brand_id">
                     <option selected disabled>Select the Brand</option>
                     @foreach($brand as $b)
                     <option value="{{$b->brand_id}}">{{$b->brand_name}}</option>
                   @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group" style="padding-left:700px">
            
                    <a href="{{url('AddBrand')}}"><button type="button" class="btn btn-info">add new model</button></a>
                 
            </div>
            <div class="form-group">
               
               <div class="col-xs-9">
                <input type="hidden" name="id" id="id" value="{{$data->id}}">
                 
               </div>
              </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="price">Product Price:</label>
               <div class="col-xs-9">
                <input type="hidden" name="price" id="price" value="{{$data->id}}">
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter Product Price" value="{{$data->price}}">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Product Details:</label>
               <div class="col-xs-9">
                <input type="hidden" name="price" id="price" value="{{$data->id}}">
                  <input type="text" class="form-control" id="details" name="details" placeholder="Enter Display Type" value="{{$data->details}}">
               </div>
            </div>
             <div id="DIV_62">
          <img src= "{{asset('images') . '/'. $data->image}}"  >
         
        </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="image">Product Image:</label>
               <div class="col-xs-9">
                  <label for="FormControlFile"></label>
                  
                  <input type="file" class="form-control-file" id="image" name="image" value="{{$data->image_path }}">
               </div>
            </div>
           <br>
            
            <div class="container" style="padding-left: 70px;">
               
              
                <h3>Display</h3><hr>
               <div class="container">
               <div class="form-group">
                <div class="col-xs-7">
                       <select class="form-control" name="display_type">
                         <option  value="TFT LCD ">TFT LCD </option>

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

              <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="display_type">Display Type</label>
               <div class="col-xs-7">
                <input type="hidden" name="display_type" id="display_type" value="{{$data->id}}">
                  <input type="text" class="form-control" id="display_type" name="display_type" placeholder="Enter Display Type" value="{{$data->display_type}}">
               </div>
            </div>
               <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Resolution">Resolution</label>
               <div class="col-xs-7">
                <input type="hidden" name="Resolution" id="Resolution" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Resolution" name="Resolution" placeholder="Enter Product Resolution" value="{{$data->Resolution}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3"  for="Size">Size</label>
               <div class="col-xs-7">
                <input type="hidden" name="Size" id="Size" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Size" name="Size" placeholder="Enter Product Price"  value="{{$data->Size}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Pixel_Density">Pixel Density</label>
               <div class="col-xs-7">
                <input type="hidden" name="Pixel_Density" id="Pixel_Density" value="{{$data->id}}">
                  <input type="text" class="form-control" id="price" name="Pixel_Density" placeholder="Enter Product Pixel Density" value="{{$data->Pixel_Density}}">
               </div>
            </div>
 

            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Touchscreen_Type:</label>
               <div class="col-xs-7">
                <input type="hidden" name="Touchscreen_type" id="Touchscreen_type" value="{{$data->id}}">
                  <input type="text" class="form-control" id="price" name="Touchscreen_type" placeholder="Enter Product Touchscreen type" value="{{$data->Touchscreen_type}}">
               </div>
            </div>
            
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Screen_to_body_percentage">Screen to body percentage</label>
               <div class="col-xs-7">
                 <input type="hidden" name="Screen_to_body_percentage" id="Screen_to_body_percentage" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Screen_to_body_percentage" name="Screen_to_body_percentage" placeholder="Enter Product Price" value="{{$data->Screen_to_body_percentage}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Color_Reproduction</label>
               <div class="col-xs-7">
                <input type="hidden" name="Color_Reproduction" id="Color_Reproduction" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Color_Reproduction" name="Color_Reproduction" placeholder="Enter Product Color_Reproduction" value="{{$data->Color_Reproduction}}">
               </div>
            </div>
           
                      </div>  
                      <div class="container" style="padding-left: 70px;">
               
               <h3>DESIGN AND BUILD</h3><hr>
               <div class="container">
               <div class="form-group">
                <div class="col-xs-8">
                <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Dimensions">Dimensions</label>
               <div class="col-xs-7">
                <input type="hidden" name="Dimensions" id="Dimensions" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Dimensions" name="Dimensions" placeholder="Enter Dimensions" value="{{$data->Dimensions}}">

               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Weight">Weight</label>
               <div class="col-xs-7">
                <input type="hidden" name="Weight" id="Weight" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Weight" name="Weight" placeholder="Enter Weight" value="{{$data->Weight}}" >
                  
               </div>
            </div>
            <div class="container" style="padding-left: 70px;">
               
               <h3>SOFTWARE</h3><hr>
               <div class="container">
               <div class="form-group">
                <div class="col-xs-7">
                     <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="OS">Oprating System</label>
               <div class="col-xs-7">
                <input type="hidden" name="OS" id="OS" value="{{$data->id}}">
                  <input type="text" class="form-control" id="OS" name="OS" placeholder="Enter Product Oprating System" value="{{$data->OS}}">
               </div>
            </div>   
                     </div>

                      </div>
             
                     </div>
                      </div>
                       <div class="container" style="padding-left: 70px;">
               
               <h3>CAMERA</h3><hr>
               <div class="container">
               <div class="form-group">
                <div class="col-xs-7">
                     
              <div class="row">
                <div class="col-sm-3">
            <div class="form-group">
               <label class="control-label col-xs-3" for="msg">real flash</label>
               <div class="col-xs-9">

                  <input type="radio" {{ $data->realflash === 'yes' ? 'checked' : '' }} name="realflash" value="yes"> yes<br>
                  <input type="radio" {{ $data->realflash === 'no' ? 'checked' : '' }} name="realflash" value="no">no<br>
               </div>
            </div>
          </div>
             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Fingerprint sensor</label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->Fingerprint_sensor === 'yes' ? 'checked' : '' }} name="Fingerprint_sensor" value="yes" > yes<br>
                  <input type="radio" {{ $data->Fingerprint_sensor === 'no' ? 'checked' : '' }} name="Fingerprint_sensor" value="no">no<br>
               </div>
            </div>
          </div>

        </div>
        <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Primary">Primary</label>
               <div class="col-xs-7">
                <input type="hidden" name="Primary" id="Primary" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Primary" name="Primary" placeholder="Enter  Primary Camera" value="{{$data->Primary}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Front">Front</label>
               <div class="col-xs-7">
                <input type="hidden" name="Front" id="Front" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Front" name="Front" placeholder="Enter  Front Camera" value="{{$data->Front}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Video">Video</label>
               <div class="col-xs-7">
                <input type="hidden" name="Video" id="Video" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Video" name="Video" placeholder="Enter  Video play quality" value="{{$data->Video}}">
               </div>
            </div>
</div>
</div>
 <div class="container" style="padding-left: 70px;">
               
               <h3>STORAGE</h3><hr>
               
               <div class="container">
               <div class="form-group">
                <div class="col-xs-7">
                    <div class="form-group" style="padding-right: 100px;">
                      
               <label class="control-label col-xs-3" for="Internal">Internal</label>
               <div class="col-xs-7">
                <input type="hidden" name="Internal" id="Internal" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Internal" name="Internal" placeholder="Enter  Internal STORAGE" value="{{$data->Internal}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="RAM">RAM</label>
               <div class="col-xs-7">
                  <input type="hidden" name="RAM" id="RAM" value="{{$data->id}}">
                  <input type="text" class="form-control" id="RAM" name="RAM" placeholder="Enter  RAM" value="{{$data->RAM}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Expandable">Expandable</label>
               <div class="col-xs-7">
                <input type="hidden" name="Expandable" id="Expandable" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Expandable" name="Expandable" placeholder="Enter Expandable Memory Upto" value="{{$data->Expandable}}">
               </div>
            </div>   

                     </div>
                      </div>
<div>
  

</div>
<div class="container" style="padding-left: 70px;">
               
               <h3>BATTERY</h3><hr>
               <div class="container">
               <div class="form-group">
                <div class="col-xs-7">
                    <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Type">Type</label>
               <div class="col-xs-7">
                <input type="hidden" name="Type" id="Type" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Type" name="Type" placeholder="Enter  BATTERY Type" value="{{$data->Type}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Capacity">Capacity</label>
               <div class="col-xs-7">
                <input type="hidden" name="Capacity" id="Capacity" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Capacity" name="Capacity" placeholder="Enter  Capacity" value="{{$data->Capacity}}">
               </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Turbo Charge </label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->Turbo === 'yes' ? 'checked' : '' }} name="Turbo" value="yes"> yes<br>
                  <input type="radio"{{ $data->Turbo === 'no' ? 'checked' : '' }} name="Turbo" value="no">no<br>
               </div>
            </div>
              <div>
             
          </div>
           </div>
              
          <br>

          <h3>Conectivity</h3><hr>
          <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Bluetooth">Bluetooth</label>
               <div class="col-xs-7">
                <input type="hidden" name="Bluetooth" id="Bluetooth" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Bluetooth" name="Bluetooth" placeholder="Enter  Bluetooth value" value="{{$data->Bluetooth}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="SIM Configuration">SIM Configuration</label>
               <div class="col-xs-7">
                <input type="hidden" name="SIM" id="SIM" value="{{$data->id}}">
                  <input type="text" class="form-control" id="SIM" name="SIM" placeholder="Enter  SIM Type" value="{{$data->SIM}}">
               </div>
            </div>
          <div class="row">
             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">3G</label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->G3 === 'yes' ? 'checked' : '' }} name="G3" value="yes"> yes<br>
                  <input type="radio" {{ $data->G3 === 'no' ? 'checked' : '' }} name="G3" value="no">no<br>
               </div>
            </div>
          </div>
             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">2G</label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->G2 === 'yes' ? 'checked' : '' }} name="G2" value="yes"> yes<br>
                  <input type="radio" {{ $data->G2 === 'no' ? 'checked' : '' }}  name="G2" value="no">no<br>
               </div>
            </div>
          </div>
        
                   
                <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">4G</label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->G4 === 'yes' ? 'checked' : '' }} name="G4" value="yes"> yes<br>
                  <input type="radio" {{ $data->G4 === 'no' ? 'checked' : '' }} name="G4" value="no">no<br>
               </div>
            </div>
          </div>


                <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">GPS</label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->GPS === 'yes' ? 'checked' : '' }} name="GPS" value="yes"> yes<br>
                  <input type="radio" {{ $data->GPS === 'no' ? 'checked' : '' }} name="GPS" value="no">no<br>
               </div>
            </div>
          </div>
           <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">NFC Chipset</label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->NFC === 'yes' ? 'checked' : '' }} name="NFC" value="yes"> yes<br>
                  <input type="radio" {{ $data->NFC === 'no' ? 'checked' : '' }}name="NFC" value="no">no<br>
               </div>
            </div>
        </div>
      </div>
      <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">USB</label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->USB === 'yes' ? 'checked' : '' }} name="USB" value="yes"> yes<br>
                  <input type="radio"{{ $data->USB === 'no' ? 'checked' : '' }} name="USB" value="no">no<br>
               </div>
            </div>
      
      </div>
        <div class="container" style="padding-left: 70px;">
               
               <h3>Display</h3><hr>
               <div class="container">
               <div class="form-group">
                <div class="col-xs-7">
                       <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Variant">Variant</label>
               <div class="col-xs-7">
                  <input type="hidden" name="Variant" id="Variant" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Variant" name="Variant" placeholder="Enter  Variant" value="{{$data->Variant}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Architecture">Architecture</label>
               <div class="col-xs-7">
                <input type="hidden" name="Architecture" id="Architecture" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Architecture" name="Architecture" placeholder="Enter Architecture" value="{{$data->Architecture}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Cores">No of Cores</label>
               <div class="col-xs-7">
                 <input type="hidden" name="Cores" id="Cores" value="{{$data->id}}">
                  <input type="text" class="form-control" id=" Cores" name="Cores" placeholder="Enter  No of Cores" value="{{$data->Cores}}">
               </div>
            </div>
              <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Frequency">Frequency</label>
               <div class="col-xs-7">
                <input type="hidden" name="Frequency" id="Frequency" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Frequency" name="Frequency" placeholder="Enter Frequency" value="{{$data->Frequency}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="Make">Make</label>
               <div class="col-xs-7">
                <input type="hidden" name="Make" id="Make" value="{{$data->id}}">
                  <input type="text" class="form-control" id="Make" name="Make" placeholder="Enter Make" value="{{$data->Make}}">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="GPU">GPU</label>
               <div class="col-xs-7">
                <input type="hidden" name="GPU" id="GPU" value="{{$data->id}}">
                  <input type="text" class="form-control" id="GPU" name="GPU" placeholder="Enter GPU" value="{{$data->GPU}}">
               </div>
            </div>  
                     </div>
                      </div>
                    </div>
                  </div>
</div></div></div></div>
            <h3>Sound</h3><hr>
           <div class="row" style="padding-right: 500px" >
                <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-4" for="msg">Infrared</label>
               <div class="col-xs-8">
                  <input type="radio"{{ $data->Infrared === 'yes' ? 'checked' : '' }} name="Infrared" value="yes"> yes<br>
                  <input type="radio" {{ $data->Infrared === 'no' ? 'checked' : '' }}  name="Infrared" value="no">no<br>
               </div>
            </div>

              </div>
          
             
                <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-md-4" for="msg">Loudpeaker</label>
               <div class="col-md-8">
                  <input type="radio" {{ $data->Loudpeaker === 'yes' ? 'checked' : '' }} name="Loudpeaker" value="yes"> yes<br>
                  <input type="radio"  {{ $data->Loudpeaker === 'no' ? 'checked' : '' }} name="Loudpeaker" value="no">no<br>
               </div>
            </div>
          </div>

                <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-4" for="msg">HeadPHones</label>
               <div class="col-xs-8">
                  <input type="radio" {{ $data->HeadPHones === 'yes' ? 'checked' : '' }} name="HeadPHones" value="yes"> yes<br>
                  <input type="radio" {{ $data->HeadPHones === 'no' ? 'checked' : '' }} name="HeadPHones" value="no">no<br>
               </div>
            </div>
          </div>
          </div>
        <br>

        
         <br>
            <h3>Sensors</h3><hr>
            <div class="row" style="padding-right: 500px">
                <div class="col-sm-3">
            <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Ambient Light</label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->Ambient_Light === 'yes' ? 'checked' : '' }} name="Ambient_Light" value="yes"> yes<br>
                  <input type="radio" {{ $data->Ambient_Light === 'no' ? 'checked' : '' }} name="Ambient_Light" value="no">no<br>
               </div>
            </div>
          </div>

             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Gyroscope</label>
               <div class="col-xs-9">
                  <input type="radio"{{ $data->Gyroscope === 'yes' ? 'checked' : '' }} name="Gyroscope" value="yes"> yes<br>
                  <input type="radio" {{ $data->Gyroscope === 'no' ? 'checked' : '' }} name="Gyroscope" value="no">no<br>
               </div>
            </div>
          </div>
             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Accelerometer</label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->Accelerometer === 'yes' ? 'checked' : '' }} name="Accelerometer" value="yes"> yes<br>
                  <input type="radio" {{ $data->Accelerometer === 'no' ? 'checked' : '' }}  name="Accelerometer" value="no">no<br>
               </div>
            </div>
          </div> 
 

             <div class="col-sm-3">
             <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Proximity</label>
               <div class="col-xs-9">
                  <input type="radio" {{ $data->Proximity === 'yes' ? 'checked' : '' }}  name="Proximity" value="yes"> yes<br>
                  <input type="radio" {{ $data->Proximity === 'no' ? 'checked' : '' }}name="Proximity" value="no">no<br>
               </div>
            </div>
          </div>
        </div>
      </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="submit"></label>
               <div class="col-xs-9">
                  <button type="submit" class="btn btn-primary center-block" value="submit">Submit</button>
               </div>
            </div>
         </form>
      </div>
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

                    url: '/myshop/public/getSubCategory/',
                    data:{'id':d},

                    success:function(data){
                         
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
      


 </body>
 </html> 


 @endsection