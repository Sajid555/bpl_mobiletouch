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
  <th>{{$img->id}}</th>
  <th>{{$img->image1}}</th>
  <td><input type="button" name="button" value="remove"></td>
  </tr>
  @endforeach
</table>

</body>
</html>
