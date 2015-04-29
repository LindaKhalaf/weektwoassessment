<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="dan">
	<button type="submit">Click me!</button>
</div>
<div class="iwao">
<button type="submit">Click me!</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>


$(document).ready(function(){
    $('.dan' ).click(function() {
       alert("hey you clicked on me!");
    });
   //$("<div class='dan'><p>suuuuuuup</p></div>" ).appendTo(document.body);
});
$(document).ready(function(){
    $('.iwao' ).click(function() {
       $( ".iwao" ).hide( "slow" );
    });
   //$("<div class='dan'><p>suuuuuuup</p></div>" ).appendTo(document.body);
});
</script>
</body>
</html>