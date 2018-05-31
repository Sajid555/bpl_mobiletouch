<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Slider - Range slider</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount_start" ).val( ui.values[ 0 ]);
        
        $( "#amount_end" ).val( ui.values[ 1 ]);
     

      }
    });
    
  });

  </script>
<script>
  
    // function myFunction(){
        
    //     var start=$( "#amount_start" ).val();
        
    //     var end=$( "#amount_end" ).val();
         
    

    //   $.ajax({

    //   method: "get", url:'post.php', data: "start"= +start + "& end=" +end,
      
    //    beforeSend:function(){
      
    //      $('#showPrice').show("fast");

    //    }, 
          
    //       complete:function(){
    //       $('#showPrice').show("fast");

    //       }, 

    //    success: function(html){
    //      $('#showdiv').show("slow");
    //       $('#showdiv').html("html");
    //    }  
      
    // });

    // }


</script>

</head>
<body>
 
<p>
  <label for="amount">Price range:</label>
  <input type="text" id="amount_start" name="start_price"    value="70">

  <input type="text" id="amount_end" name="end_price" value="150">
</p>
 
<div id="slider-range"></div>
<button name="click" id="click" >Click me</button>
 <div id="showdiv"><div id="showPrice"></div></div>


<script type="text/javascript">

$("#click").on("click",function(){



        
        var start=$( "#amount_start" ).val();
        
        var end=$( "#amount_end" ).val();
         
    

      $.ajax({ method: "get", url:'resources/views/post.php', data: "start=" +start + "& end=" +end,
      
       beforeSend:function(){
      
         $('#showPrice').show("fast");

       }, 
          
          complete:function(){
          $('#showPrice').show("fast");

          }, 

       success: function(html){
         $('#showdiv').show("slow");
          $('#showdiv').html("html");
       }  
      
    });


});



</script>


</body>
</html>