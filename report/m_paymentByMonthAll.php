<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];


function ReportEmpCardBalance($tokenKey, $userName, $cardTypeId, $monthId, $yearId, $buId, $deptId, $api_url)
{
    $message = '';

    $urlRoute = $api_url . 'Reports/ReportEmpCardBalance/';

    $jsonData = array(
        'userName' => $userName,
        'tokenKey' => $tokenKey,
        "cardTypeId" => $cardTypeId,
        "monthId" => $monthId,
        "yearId" => $yearId,
        "buId" => $buId,
        "deptId" => $deptId,
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}
