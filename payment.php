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
        <img src="images/logo.png" alt="">
        <a href="map">Logout</a>
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


</body>
</html>