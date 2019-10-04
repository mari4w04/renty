<?php

ini_set('display_errors', 0);

// validate email
$sEmail = $_POST['txtLoginEmail'] ?? '';
if( empty($sEmail) ){sendResponse(0, __LINE__, "email field is empty");}
if( !filter_var( $sEmail, FILTER_VALIDATE_EMAIL ) ){ sendResponse(0, __LINE__, "email field doesn't match with an email format");  }

$sPassword = $_POST['txtLoginPassword'] ?? '';
if( empty($sPassword) ){ sendResponse(0, __LINE__);  }
if( strlen($sPassword) < 4 ){ sendResponse(0, __LINE__); }
if( strlen($sPassword) > 50 ){ sendResponse(0, __LINE__); }


$sData = file_get_contents('../voters.json');
$jData = json_decode($sData);
if( $jData == null ){ sendResponse(0, __LINE__); }
$jInnerData = $jData->data;

// !password_verify( $sPassword,  $jInnerData->$sCPR->password)
if(!password_verify( $sPassword,  $jInnerData->$sEmail->password) ){ sendResponse(0, __LINE__); }

// SUCCESS
session_start();
$_SESSION['sUserId'] = $sEmail;
sendResponse(1, __LINE__);


// **************************************************

function sendResponse($bStatus, $iLineNumber){
  echo '{"status":'.$bStatus.', "code":'.$iLineNumber.'}';
  exit;
}

//  API LOGOUT START
// session_start();

// unset($_SESSION['sUserId']);
// unset($_SESSION['sUserName']);
// session_destroy();

// header("Location: ./../index.php");
