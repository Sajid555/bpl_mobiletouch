
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 6px;
    text-align: 50%;    
}
</style>
</head>
<body>

<h2>Tabele of Data</h2>
<table style="width:50%">
  <tr>
    <th>ID</th>
    <th>details</th>
    <th>price</th>
    <th>Size</th>
    <th>Variant</th>
    <th>RAM</th>
    <th>Internal</th>
    <th>Capacity</th>
    <th>Front</th>
    <th>Primary</th>
    <th>SIM</th>
    <th>OS</th>
    <th>cat_name</th>
    <th>brand_name</th>
    <th>display_type</th>
    <th>Resolution</th>
    <th>Pixel_Density</th>
    <th>Touchscreen_type</th>
    <th>Color_Reproduction</th>
    <th>Screen_to_body_percentage</th>
    <th>Weight</th>
    <th>realflash</th>
    <th>Expandable</th>
    <th>Type</th>
    <th>Capacity</th>
    <th>Bluetooth</th>
    <th>G3</th>
    <th>USB</th>
    <th>G2</th>
    <th>G4</th>
    <th>NFC</th>
    <th>Make</th>
    <th>Infrared</th>
    <th>Cores</th>
    <th>Frequency</th>
    <th>GPU</th>
    <th>Proximity</th>
    <th>Accelerometer</th>
    <th>Gyroscope</th>
    <th>Fingerprint_sensor</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
    @foreach($data as $post)
     <tr>
    <th>{{$post->id}}</th>
    <th>{{$post->details}}</th>
    <th>{{$post->price}}</th>
    <th>{{$post->Size}}</th>
    <th>{{$post->Variant}}</th>
    <th>{{$post->RAM}}</th>
    <th>{{$post->Internal}}</th>
    <th>{{$post->Capacity}}</th>
    <th>{{$post->Front}}</th>
    <th>{{$post->Primary}}</th>
    <th>{{$post->SIM}}</th>
    <th>{{$post->OS}}</th>
    <th>{{$post->cat_name}}</th>
    <th>{{$post->brand_name}}</th>
    <th>{{$post->display_type}}</th>
     <th>{{$post->Resolution}}</th>
    <th>{{$post->Pixel_Density}}</th>
    <th>{{$post->Touchscreen_type}}</th>
    <th>{{$post->Color_Reproduction}}</th>
    <th>{{$post->Screen_to_body_percentage}}</th>
    <th>{{$post->Weight}}</th>
    <th>{{$post->realflash}}</th>
    <th>{{$post->Expandable}}</th>
    <th>{{$post->Type}}</th>
    <th>{{$post->Capacity}}</th>
    <th>{{$post->Bluetooth}}</th>
    <th>{{$post->G3}}</th>
    <th>{{$post->USB}}</th>
    <th>{{$post->G2}}</th>
    <th>{{$post->G4}}</th>
    <th>{{$post->NFC}}</th>
    <th>{{$post->Make}}</th>
    <th>{{$post->Infrared}}</th>
    <th>{{$post->Cores}}</th>
    <th>{{$post->Frequency}}</th>
    <th>{{$post->GPU}}</th>
    <th>{{$post->Proximity}}</th>
    <th>{{$post->Accelerometer}}</th>
    <th>{{$post->Gyroscope}}</th>
    <th>{{$post->Fingerprint_sensor}}</th>
     <td align="center"><button  type="button"><a href="{{route('delete', ['id' => $post->id] )}}">Remove</a></button></td>
     <td align="center"><button  type="button"><a href="{{route('update', ['id' => $post->id] )}}">Edit</a></button></td>
   
  </tr>
  @endforeach
  
  
</table>

</body>
</html>
