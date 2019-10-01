<?php 
  require_once 'top.php';
?>

<div class="main-container">
    <h1 class="padding-top-bottom-40">Have a safe ride!</h1>
    <h1 id="stopwatch"><time>00:00:00</time></h1>
    <button id="stop">End Ride</button>

    
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