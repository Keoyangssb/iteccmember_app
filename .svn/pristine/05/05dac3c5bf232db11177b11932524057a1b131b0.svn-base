<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

function paymentPersonalWalletByDaily($tokenKey, $userName,$strDate,$endDate, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'Reports/paymentPersonalWalletByDaily/';

    $jsonData = array(
        'userName' => $userName,
        'tokenKey' => $tokenKey,
        "strDate" => $strDate,
        "endDate" => $endDate
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}
