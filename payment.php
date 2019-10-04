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
        <a href="scan"><img src="images/back-white.png" alt=""></a>
        <a href="map"><img src="images/logo.png" alt=""></a>
        <a href="map">Logout</a>
    </nav>

    <h1 class="padding-top-bottom-40">Payment</h1>
 
        <div class="payment-info">
        <h2>10kr unlock + 2.50kr / min<span class="align-right" id="chosenCarPrice"></span></h2>
        <h2><input type="checkbox" checked>Insurance 25kr</h2>
        </div>
        <div class="container">
        <!-- <h2>Credit Card & Billing Information</h2> -->
        <form id="frmPayment" method="POST">
            <h6>Card Number</h6>
            <input name="paymentCardNo" type="text" id="paymentCardNo">
            <h6>Card Holder</h6>
            <input name="paymentCardHolder" type="text" id="paymentCardHolder">
            <div class="card-expiry-cvv">
                <div class="expiry-container">
                    <h6>Month</h6>
                    <h6>Year</h6>
                    <input name="paymentMonth" type="text" id="paymentCardExpiryMonth">
                    <input name="paymentYear" type="text" id="paymentCardExpiryYear">
                </div>
                <h6>CVV</h6>
                <input name="paymentCvv" id="paymentCvv" type="text">
            </div>
        
            <button id="payBtn" type="submit" class=" btn green-btn">Pay</button>
        </form>
   </div>
    


<script src="js/payment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/validate.js"></script>


</body>
</html>