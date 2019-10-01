<?php

$sCardNumber = $_POST['paymentCardNo'] ?? '';
if( empty($sCardNumber) ){
    sendResponse(0,__LINE__,"Please enter credit card number");
}
if( strlen($sCardNumber) != 16 ){
    sendResponse(0,__LINE__,"Credit card number has to have 16 digits");
}

$sCardHolder = $_POST['paymentCardHolder'] ?? '';
if( empty($sCardHolder) ){
    sendResponse(0,__LINE__,"Please enter card holder name");
}


$sCardMonth = $_POST['paymentMonth'] ?? '';
if( empty($sCardMonth) ){
    sendResponse(0,__LINE__,"Please enter expiration month");
}
if( strlen($sCardMonth) > 2 ){
    sendResponse(0,__LINE__,"Please enter expiration month 01-12");
}

$sCardYear = $_POST['paymentYear'] ?? '';
if( empty($sCardYear) ){
    sendResponse(0,__LINE__,"Please enter expiration year");
}
if( strlen($sCardYear) > 2){
    sendResponse(0,__LINE__,"Expiration year has to have 2 digits");
}

$sCardCvv = $_POST['paymentCvv'] ?? '';
if( empty($sCardCvv) ){
    sendResponse(0,__LINE__,"Please enter CVV");
}
if( strlen($sCardCvv) != 3){
    sendResponse(0,__LINE__,"CVV has to have 3 digits");
}


sendResponse(1, __LINE__, "Success");


/********************************/

function sendResponse($iStatus, $iLine, $sMessage){
    echo '{"status": '.$iStatus.', "code": "'.$iLine.'", "message":"'.$sMessage.'"}';
    exit;
}