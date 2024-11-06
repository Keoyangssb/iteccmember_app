<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

function staffAccountActive($tokenKey, $userName, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'StaffWallet/staffAccountActive/';

    $jsonData = array(
        'userName' => $userName,
        'tokenKey' => $tokenKey
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}

function topupStaffAmount($tokenKey, $userName, $amount, $walletAccount, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'StaffWallet/topupStaffAmount/';

    $jsonData = array(
        "tokenKey" => $tokenKey,
        "userName" => $userName,
        "amount" => $amount,
        "walletAccount" => $walletAccount
    );

    $ch = curl_init($urlRoute);
    $payload = json_encode($jsonData);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
    $result = curl_exec($ch);
    curl_close($ch);
    $arr = json_decode($result, true);

    $_SESSION['statusCode'] = $arr['statusCode'];

    $_SESSION['isSuccess'] = $arr['isSuccess'];

    $_SESSION['message'] = $arr['message'];

    if ($arr['statusCode'] == "200") {
       
        $newPassKey = $arr['newTokenKey'];
        $descript = "top up for staff";

        topupStaffWallet($newPassKey, $descript, $api_url);
    } else {
        $arr = null;
    }
    return $arr;
}
function refundStaffAmount($tokenKey, $userName, $amount, $walletAccount,$topupMonth,$topupYear, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'StaffWallet/topupStaffAmount/';

    $jsonData = array(
        "tokenKey" => $tokenKey,
        "userName" => $userName,
        "amount" => $amount,
        "walletAccount" => $walletAccount,
        "topupMonth" => $topupMonth,
        "topupYear" => $topupYear
    );

    $ch = curl_init($urlRoute);
    $payload = json_encode($jsonData);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
    $result = curl_exec($ch);
    curl_close($ch);
    $arr = json_decode($result, true);

    $_SESSION['statusCode'] = $arr['statusCode'];

    $_SESSION['isSuccess'] = $arr['isSuccess'];

    $_SESSION['message'] = $arr['message'];

    if ($arr['statusCode'] == "200") {
       
        $newPassKey = $arr['newTokenKey'];
        $descript = "Refund for staff";

        refundStaffWallet($newPassKey, $descript, $api_url);
    } else {
        $arr = null;
    }
    return $arr;
}
function topupStaffWallet($newPassKey, $descript, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'StaffWallet/topupStaffWallet/';

    $jsonData = array(
        "newPassKey" => $newPassKey,
        "descript" => $descript
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}
function refundStaffWallet($newPassKey, $descript, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'StaffWallet/refundStaffWallet/';

    $jsonData = array(
        "newPassKey" => $newPassKey,
        "descript" => $descript
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}

