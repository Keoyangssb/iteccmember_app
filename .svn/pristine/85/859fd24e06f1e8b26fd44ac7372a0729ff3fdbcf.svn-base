<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

function transactionDetailStaffwallet($tokenKey, $userName,$cusId,$fromDate,$toDate, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'StaffWallet/transactionDetailStaffwallet/';

    $jsonData = array(
        'userName' => $userName,
        'tokenKey' => $tokenKey,
        'cusId' => $cusId,
        'fromDate' => $fromDate,
        'toDate' => $toDate
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}


