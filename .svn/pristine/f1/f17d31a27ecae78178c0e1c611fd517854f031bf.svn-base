<?php
error_reporting(E_ALL & !E_NOTICE);
//error_reporting(E_ALL);
//te

/*----------- API Path --------------*/

$api_url = 'http://192.168.100.28:8444/api/';

$publickey = "wt86t129-58m0-c245-8ff0-80ynov0a29pmh";

//config database direct


// $this->dbcon = $conn;
function escape_string($data)
{
        if (!isset($data) or empty($data)) return '';
        if (is_numeric($data)) return $data;

        $non_displayables = array(
                '/%0[0-8bcef]/',            // url encoded 00-08, 11, 12, 14, 15
                '/%1[0-9a-f]/',             // url encoded 16-31
                '/[\x00-\x08]/',            // 00-08
                '/\x0b/',                   // 11
                '/\x0c/',                   // 12
                '/[\x0e-\x1f]/'             // 14-31
        );
        foreach ($non_displayables as $regex)
                $data = preg_replace($regex, '', $data);
        $data = str_replace("'", "''", $data);
        return $data;
}
function callAPI($jsonArray, $api_url)
{
        $message = '';

        $ch = curl_init($api_url);
        $payload = json_encode($jsonArray);
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

        if (isset($arr['data']) && $arr['statusCode'] == "200") {
                $arr = $arr['data'];
        } else {
                $arr = null;
        }
        return $arr;
}
