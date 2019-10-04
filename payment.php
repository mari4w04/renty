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

    <h1 class="padding-top-bottom-40">Payment</h1>
   <div class="container">
        <div class="payment-info">
        <p>Base Rate<span class="align-right" id="chosenCarPrice"></span></p>
        <input type="checkbox" checked>Insurance
    </div>
        <h2>Credit Card & Billing Information</h2>
        <form id="frmPayment" method="POST">
            <input name="paymentCardNo" type="text" id="paymentCardNo" placeholder="Card number">
            <input name="paymentCardHolder" type="text" id="paymentCardHolder" placeholder="Cardholder name">
            <div class="card-expiry-cvv">
                <div class="expiry-container">
                    <input name="paymentMonth" type="text" placeholder="Month" id="paymentCardExpiryMonth">
                    <div class="slash">/</div>
                    <input name="paymentYear" type="text" placeholder="Year" id="paymentCardExpiryYear">
                </div>
                <input name="paymentCvv" id="paymentCvv" type="text" placeholder="CVV">
            </div>
        
            <button id="payBtn" type="submit" class=" btn green-btn">Pay</button>
        </form>
   </div>
    


<script src="js/payment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/validate.js"></script>


<?php 
    // $sLinkToScript = '<script src="js/payment.js"></script>';
    
    require_once 'bottom.php';
?>