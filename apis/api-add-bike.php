<?php

ini_set('display_errors', 0);

$sData = file_get_contents('../bikes.json');
$jData = json_decode($sData);

if($jData == null){fnvSendResponse(0, __LINE__,'json data corrupt'); }

$sBikeId = $_POST['bike-id'] ?? '';
if( empty($sBikeId) ){ fnvSendResponse(0, __LINE__,'Bike id field cant be empty');  }

$jInnerData = $jData->data; //from the data obj. - point to the obj. inside = the id/phone
$jBike = new stdClass(); // json empty obj.

$jBike->status = "active";
$jBike->imageurl = "images/bike1.jpg";
$jBike->longitude = "41.40338";
$jBike->latitude = "2.17403";

// $sBikeId = uniqid();
$jInnerData->$sBikeId = $jBike;

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