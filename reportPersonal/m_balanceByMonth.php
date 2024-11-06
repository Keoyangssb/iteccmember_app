<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

function balancePersonalWalletByMonth($tokenKey, $userName,$monthView,$yearView, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'Reports/balancePersonalWalletByMonth/';

    $jsonData = array(
        'userName' => $userName,
        'tokenKey' => $tokenKey,
        "monthView" => $monthView,
        "yearView" => $yearView
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}
