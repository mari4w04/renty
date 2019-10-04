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

<div class="content confirmation">
<!-- map -->
<img class="confirmation-map" src="images/map.jpg" alt="">
<div class="confirmation-section">
<!-- km ridden -->
<div>
<img src="images/pin.png" alt="">
<h2>1km</h2>
<h3>Distance</h3>
</div>
<!-- time ride -->
<div>
<img src="images/stop-watch.png" alt="">
<h2>3min</h2>
<h3>Duration</h3>
</div>
<!-- date, start time finish time -->
<div>
<h2>Tuesday, October 1, 2019</h2>
<h3>5.50pm-5.53</h3>
</div>
<!-- total price -->
<div class="confirmation-price">
<h2>18kr</h2>
<h3>christiania bike</h3>
</div>
</div>

<!-- Logo -->
<img class="logo" src="images/logo.png" alt=""></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/vote.js"></script>
    <?php 
    // $sLinkToScript = '<script src="js/payment.js"></script>';
    
    require_once 'bottom.php';
?>