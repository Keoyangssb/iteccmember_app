<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

function topupStaffWalletByMonth($tokenKey, $userName,$monthView,$yearView, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'Reports/topupStaffWalletByMonth/';

    $jsonData = array(
        'userName' => $userName,
        'tokenKey' => $tokenKey,
        "monthView" => $monthView,
        "yearView" => $yearView
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}
