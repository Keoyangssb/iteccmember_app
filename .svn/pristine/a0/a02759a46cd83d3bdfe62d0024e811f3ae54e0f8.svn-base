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


?>