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
    <link rel="stylesheet" href="css/overall-style.css">
    <title>Renty</title>
</head>
<body>
<div class="page">
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
    <nav>
        <a href="scan"><img src="images/back-white.png" alt=""></a>
    </nav>


    <div class="login-page-wrapper">
    <h1 class="payment-h1">Just ride</h1>
    <p class="payment-p">Just ride and pay at the end. <br/>
The longer you ride the cheaper it gets.</p>
        
        <div class="white-container payment-container">

        <!-- <h2>Credit Card & Billing Information</h2> -->
        <form id="frmPayment" method="POST">

            
            
            
            
            <div class="card-expiry-cvv">
                <div class="card-number-box">
                    <i class="far fa-credit-card"></i>
                    <input name="paymentCardNo" type="text" id="paymentCardNo" placeholder="1234 1234 1234 1234">
                </div>
                <div class="expiry-container">
                    <input name="paymentMonth" type="text" id="paymentCardExpiryMonth" placeholder="MM">
                    <span>/</span>
                    <input name="paymentYear" type="text" id="paymentCardExpiryYear" placeholder="YY">
                </div>
                
                <input name="paymentCvv" id="paymentCvv" type="text" placeholder="CVV">
            </div>

            <h6>Cardholder name</h6>
            <input name="paymentCardHolder" type="text" id="paymentCardHolder">

            <div class="payment-info">
                <h5 class="red-h5">Rates</h5>
                <p class="rate-info">10 kr. unlock + 2.50 kr./min<span class="align-right" id="chosenCarPrice"></span></p>
                <p class="insurance">
                <label class="container-checkbox insurance" >I would like to have insurance for 25 kr.
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>  
                </p>
            </div>
            <button id="payBtn" type="submit">Save</button>

            
        </form>
</div>
   </div>
    


<script src="js/payment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/validate.js"></script>
<script src="https://kit.fontawesome.com/22eaa1461b.js" crossorigin="anonymous"></script>


</body>
</html>