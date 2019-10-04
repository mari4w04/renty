<?php

require_once __DIR__.'/top.php'; 
?>
<div class="page">
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<nav>
        <img src="images/back-white.png" alt="">
        <img src="images/logo.png" alt="">
        <div>Logout</div>
    </nav>


<h1 class="SearchTitle"> choose your type of bikes :</h1>

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


<?php
require_once __DIR__.'/bottom.php'; 