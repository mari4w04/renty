<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/white-theme.css">
    <title>Renty</title>
</head>
<body>
<div class="page">
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <nav> 
    <a href="login"><img src="" alt=""></a>
        <img src="images/logo.png" alt="">
        <div></div>
    </nav>


          <h1 class="SearchTitle"> Choose your bike</h1>

                  <div class="slideshow-container">

                              <div class="mySlides fade">
                                  <img src="images/norden-ellen-da-n7-askegra-m-pink.png">
                                  <h1>Lady bike</h1>
                                  <div class="text">100kr/hour</div>
                              </div>

                              <div class="mySlides fade">
                                  <img src="images/3731930550320.jpg">
                                  <h1>Kid bike</h1>
                                  <div class="text">100kr/hour</div>
                                </div>


                              <div class="mySlides fade">
                                  <img src="images/3121Li-1-1-2.jpg">
                                  <h1>Christiania bike</h1>
                                  <div class="text">100kr/hour</div>
                              </div>

                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>

                  </div>
</div>
<a href='map.php'><button>Find bikes nearby</button></a>
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