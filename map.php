<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/white-theme.css">
<title>Map</title>
</head>
<body>
  <div class="page" id="mapPage">
  <nav> 
    <a href="login"><img src="" alt=""></a>
    
        <div></div>
    </nav>

    <div id="clicker"></div>

    <div id="up-arrow"></div>

    <div id="bikeInfo">
        <p class="address">Vibevej 8</p>
        <p class="distance">197 M AWAY</p>
        <hr>
        <img src="images/norden-ellen-da-n7-askegra-m-pink.png">
        <a href='login'><button>Next</button></a>
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