<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Map</title>
</head>
<body>
<div id="clicker"></div>
<div id="up-arrow"></div>
<div id="mapContainer">
<img id="map" src="images/Screenshot 2019-10-01 at 11.03.21.png">
<div id="bikeInfo">
<p class="address">Vibevej 8</p>
<p class="distance">197 M AWAY</p>
<hr>
<img src="images/norden-ellen-da-n7-askegra-m-pink.png">

</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$( "#clicker" ).click(function() {
  $( "#up-arrow" ).toggle();
  $("#bikeInfo").toggle();
});

</script>
</body>
</html>