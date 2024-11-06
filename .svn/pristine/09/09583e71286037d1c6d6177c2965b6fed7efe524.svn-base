<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

function paymentStaffWalletByMonth($tokenKey, $userName,$monthView,$yearView, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'Reports/paymentStaffWalletByMonth/';

    $jsonData = array(
        'userName' => $userName,
        'tokenKey' => $tokenKey,
        "monthView" => $monthView,
        "yearView" => $yearView
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}
