<?php
session_start();
require_once("../config.php");

$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

$cusMobileNumber =  $_GET['phone'];
function consoleLog($msg) {
    echo '<script type="text/javascript">' .
      'console.log(' . $msg . ');</script>';
}


function PersonalAccountInfo($tokenKey, $userName,$cusMobileNumber, $api_url)
{
    $message = '';

    $urlRoute = $api_url . '/Account/PersonalAccountInfo/';

    $jsonData = array(
        'userName' => $userName,
        'tokenKey' => $tokenKey,
        'cusMobileNumber' => $cusMobileNumber
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}

$arr = PersonalAccountInfo($tokenKey, $userName,$cusMobileNumber, $api_url);

foreach ($arr as $data) {
    $PersonalId = $data['PersonalId'];
    $AccountName = $data['AccountName'];
    $mobileNumber = $data['mobileNumber'];
    $fullName = $data['firstName'].' '. $data['lastName'];
    $dob = $data['dob'];
    $gender = $data['gender'];
    $emaillAddr = $data['emaillAddr'];
   
    $address =  $data['villageName'].'-'. $data['districtName'].'-'.$data['provinceName'];
    $personalWalet = $data['personalWalet'];
    $personalWaletBL = number_format($data['personalWaletBL']);
 
}
$result = array("$PersonalId", "$AccountName","$mobileNumber","$fullName","$dob",
 "$gender","$emaillAddr","$address","$personalWalet","$personalWaletBL");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;





?>


