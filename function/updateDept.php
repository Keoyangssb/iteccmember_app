<?php
require_once("../config.php");
session_start();
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];



$deptId = $_GET['deptId'];
$sId = $_GET['sId'];



function UpdateStaffDepartment($tokenKey, $userName, $cusId, $deptId, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'StaffWallet/UpdateStaffDepartment/';

    $jsonData = array(
        "tokenKey" => $tokenKey,
        "userName" => $userName,
        "cusId" => $cusId,
        "deptId" => $deptId
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}

UpdateStaffDepartment($tokenKey, $userName, $sId, $deptId, $api_url);

echo "Update Department Successfully";

