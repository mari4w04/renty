<?php


$sthisBikeId = $_GET['bikeid'];

$sData = file_get_contents('../bikes.json');
$jData = json_decode($sData);
if($jData ==null){
    sendResponse(0,__LINE__,"File is corrupted");
}

$jInnerData = $jData->data;

unset($jInnerData->$sthisBikeId);

$sData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../bikes.json', $sData);
sendResponse(1, __LINE__,"Bike removed");



/*********************************/
function sendResponse($bStatus, $iLineNumber, $sMessage){
    echo '{"status":'.$bStatus.', "code":'.$iLineNumber.', "message": "'.$sMessage.'"}';
    exit;
}
