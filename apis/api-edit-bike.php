<?php

ini_set('display_errors', 0);

$sData = file_get_contents('../bikes.json');
$jData = json_decode($sData);

if($jData == null){fnvSendResponse(0, __LINE__,'json data corrupt'); }

$jInnerData = $jData->data; //from the data obj. - point to the obj. inside = the id/phone
$jBike = new stdClass(); // json empty obj.


// $sBikeId = '12345';

$sStatus = $_POST['status'];
$sBikeId = $_POST['bikeid'];

$jInnerData->$sBikeId->status = $sStatus;


$sData = json_encode($jData, JSON_PRETTY_PRINT);

if($sData == null){fnvSendResponse(0, __LINE__,'json data corrupt'); }
//put it back in the file
file_put_contents('../bikes.json', $sData);
fnvSendResponse(1,__LINE__, 'You have succesfully registered');
// header("Location:../login.php");


function fnvSendResponse( $iStatus, $iLineNumber, $sMessage ){
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
  }