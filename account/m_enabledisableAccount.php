<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

function allAccount($tokenKey,$userName,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/allAccount/';

   $jsonData = array(
       'userName' => $userName,
       'tokenKey' => $tokenKey
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}

function enableStaffAccount($tokenKey,$userName,$accountNumber,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'StaffWallet/enableStaffAccount/';

   $jsonData = array(
       'tokenKey' => $tokenKey,
       'userName' => $userName,
       'accountNumber' => $accountNumber

   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}

function disableStaffAccount($tokenKey,$userName,$accountNumber,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'StaffWallet/disableStaffAccount/';

   $jsonData = array(
       'tokenKey' => $tokenKey,
       'userName' => $userName,
       'accountNumber' => $accountNumber

   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
