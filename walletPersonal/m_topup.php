<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

function PersonalAccountActive($tokenKey, $userName, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'PersonalWallet/PersonalAccountActive/';

    $jsonData = array(
        'userName' => $userName,
        'tokenKey' => $tokenKey
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}

function topupPersonalAmount($tokenKey, $userName, $amount, $walletAccount,$cbTopupType, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'PersonalWallet/topupPersonalAmount/';

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
        $descript = "top up for Personal";

        topupPersonalWallet($newPassKey,$cbTopupType, $descript, $api_url);
    } else {
        $arr = null;
    }
    return $arr;
}

function topupPersonalWallet($newPassKey,$topupType, $descript, $api_url)
{
    $urlRoute = $api_url . 'PersonalWallet/topupPersonalWallet/';

    $jsonData = array(
        "newPassKey" => $newPassKey,
        "topupType" => $topupType,
        "descript" => $descript
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

    if ($arr['statusCode'] == 200) {
        $_SESSION['showSuccess'] = $arr['message'];
        echo "<script>console.log('success: ".$_SESSION['showSuccess']."');</script>";
            $arr = $arr['data'];
    } else {
       
        $_SESSION['showError'] = $arr['message'];
        echo "<script>console.log('fail: ".$_SESSION['showError']."');</script>";
            $arr = null;
    }
    return $arr;
}
