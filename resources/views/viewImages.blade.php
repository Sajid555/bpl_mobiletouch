<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Images Table</h2>

<table >
  <tr>
    <th>ID</th>
    <th>Images</th>
    <th>Delete</th>
  </tr>
  @foreach ($data as $img)
  <tr>
  <td>{{$img->id}}</td>
  <td><img src="{{asset('images') . '/'.$img->image1}}" alt="" width="40px" height="60px"></td>
  <td><input type="button" name="button"><a href="{{route('deleteImage', ['id' => $img->id] )}}">Edit</a> </td>
  </tr>
  @endforeach
</table>

</body>
</html>
