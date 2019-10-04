<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/white-theme.css">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/overall-style.css">
    <title>Renty</title>
</head>
<body>
<div class="page">
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>

    <div class='search-page-wrapper'>
      <h1 class="search-heading"> Choose<br/> your bike</h1>
      
      <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="images/norden-ellen-da-n7-askegra-m-pink.png">
            <h5>Lady bike</h5>
        </div>

        <div class="mySlides fade">
            <img src="images/bike2.png">
            <h5>Kid bike</h5>
          </div>


        <div class="mySlides fade">
            <img src="images/bike3.png">
            <h5>Christiania bike</h5>
        </div>

      <a class="prev" onclick="plusSlides(-1)"><img class="slider-arrow" src="images/prev-white.png"></a>
      <a class="next" onclick="plusSlides(1)"><img class="slider-arrow" src="images/next-white.png"></a>

    </div>
  </div>

  <div class="white-container search-page-container">

    <a href='map.php'><button class="find-btn"><i class="fas fa-search"></i> Find bikes nearby</button></a>
  </div>

</div>


<script src="https://kit.fontawesome.com/22eaa1461b.js" crossorigin="anonymous"></script>
<!-- end page -->
<script>

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}

</script>



</body>
</html>