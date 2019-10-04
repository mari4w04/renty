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
        <img src="images/back-white.png" alt="">
        <img src="images/logo.png" alt="">
        <div><a href="map.php">Logout</a></div>
    </nav>
<div class="main-container">
    <h1 class="padding-top-bottom-40">Have a safe ride!</h1>
    <h1 id="stopwatch"><time>00:00:00</time></h1>
    <button id="stop">End Ride</button>

    
</div>
</div>

<script>
    let stopwatchContainer = document.getElementById('stopwatch'),
        // start = document.getElementById('start'),
        stop = document.getElementById('stop'),
        seconds = 0, minutes = 0, hours = 0,
        t;

    function add() {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                hours++;
            }
        }
        
        stopwatchContainer.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);

        timer();
    }
    function timer() {
        t = setTimeout(add, 1000);
    }
    timer();

    /* Stop button */
    stop.onclick = function() {
        let rentalTime = document.querySelector("#stopwatch").textContent;
        localStorage.setItem("rentalTime", rentalTime);
        clearTimeout(t);
        window.location.replace("confirmation.php");
    }

</script>

<?php 
    // $sLinkToScript = '<script src="js/payment.js"></script>';
    require_once 'bottom.php';
?>