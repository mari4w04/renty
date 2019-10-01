<?php 
    // $sLinkToPageBack = 'driver-details.php';
  require_once 'top.php';
?>

<div class="main-container">
    <h1 class="padding-top-bottom-40">Payment</h1>
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
                    <input name="paymentMonth" placeholder="Month" id="paymentCardExpiryMonth">
                    <div class="slash">/</div>
                    <input name="paymentYear" placeholder="Year" id="paymentCardExpiryYear">
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