<?php
include_once("config.php");
$log_id = $_SESSION['im_userId'];
ob_start(); // Turn on output buffering
system('ipconfig /all'); //Execute external program to display output
$mycom = ob_get_contents(); // Capture the output into a variable
ob_clean(); // Clean (erase) the output buffer

$findme = "Physical";
$pmac = strpos($mycom, $findme); // Find the position of Physical text
$mac = substr($mycom, ($pmac + 36), 17); // Get Physical Address

$_SESSION['im_macadd'] = $mac;



function checkLogin($publickey, $userName, $pass, $device_token, $os_version, $api_url)
{

    $ch = curl_init($api_url . 'Account/UserLogin');

    $jsonData = array(
        //The JSON data.
        "publickey" => $publickey,
        "userName" => $userName,
        "pass" => $pass,
        "device_token" => $device_token,
        "os_version" => $os_version

    );
    $payload = json_encode($jsonData);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    // printf($result);
    $arr = json_decode($result, true);

    $_SESSION['statusCode'] = $arr['statusCode'];

    $_SESSION['isSuccess'] = $arr['isSuccess'];

    $_SESSION['message'] = $arr['message'];

    if (isset($arr['data']) && $arr['statusCode'] == "200") {
        foreach ($arr['data'] as $data) {

            $_SESSION['im_userId'] = $data['userId'];
            $_SESSION['im_userName'] = $data['userName'];
            $_SESSION['im_tokenKey'] = $data['tokenKey'];
            $_SESSION['im_fullName'] = $data['fullName'];
            $_SESSION['im_roleId'] = $data['roleId'];
            $_SESSION['im_roleName'] = $data['roleName'];
            $_SESSION['im_status'] = $data['status'];
            $_SESSION['im_strDate'] = $data['strDate'];
            $_SESSION['im_expDate'] = $data['expDate'];

            foreach ($data['permission'] as $data2) {
                if ($data2['perId'] == "1") {
                    $_SESSION['im_rolePerId_1'] = $data2['rolePerId'];
                    $_SESSION['im_perId_1'] = $data2['perId'];
                    $_SESSION['im_perName_1'] = $data2['perName'];
                    $_SESSION['im_view_1'] = $data2['per_view'];
                    $_SESSION['im_add_1'] = $data2['per_add'];
                    $_SESSION['im_edit_1'] = $data2['per_edit'];
                    $_SESSION['im_del_1'] = $data2['per_del'];
                    $_SESSION['im_enable_1'] = $data2['per_enable'];
                }
                if ($data2['perId'] == "35") {
                    $_SESSION['im_rolePerId_35'] = $data2['rolePerId'];
                    $_SESSION['im_perId_35'] = $data2['perId'];
                    $_SESSION['im_perName_35'] = $data2['perName'];
                    $_SESSION['im_view_35'] = $data2['per_view'];
                    $_SESSION['im_add_35'] = $data2['per_add'];
                    $_SESSION['im_edit_35'] = $data2['per_edit'];
                    $_SESSION['im_del_35'] = $data2['per_del'];
                    $_SESSION['im_enable_35'] = $data2['per_enable'];
                }
                if ($data2['perId'] == "36") {
                    $_SESSION['im_rolePerId_36'] = $data2['rolePerId'];
                    $_SESSION['im_perId_36'] = $data2['perId'];
                    $_SESSION['im_perName_36'] = $data2['perName'];
                    $_SESSION['im_view_36'] = $data2['per_view'];
                    $_SESSION['im_add_36'] = $data2['per_add'];
                    $_SESSION['im_edit_36'] = $data2['per_edit'];
                    $_SESSION['im_del_36'] = $data2['per_del'];
                    $_SESSION['im_enable_36'] = $data2['per_enable'];
                }
                if ($data2['perId'] == "37") {
                    $_SESSION['im_rolePerId_37'] = $data2['rolePerId'];
                    $_SESSION['im_perId_37'] = $data2['perId'];
                    $_SESSION['im_perName_37'] = $data2['perName'];
                    $_SESSION['im_view_37'] = $data2['per_view'];
                    $_SESSION['im_add_37'] = $data2['per_add'];
                    $_SESSION['im_edit_37'] = $data2['per_edit'];
                    $_SESSION['im_del_37'] = $data2['per_del'];
                    $_SESSION['im_enable_37'] = $data2['per_enable'];
                }
                if ($data2['perId'] == "38") {
                    $_SESSION['im_rolePerId_38'] = $data2['rolePerId'];
                    $_SESSION['im_perId_38'] = $data2['perId'];
                    $_SESSION['im_perName_38'] = $data2['perName'];
                    $_SESSION['im_view_38'] = $data2['per_view'];
                    $_SESSION['im_add_38'] = $data2['per_add'];
                    $_SESSION['im_edit_38'] = $data2['per_edit'];
                    $_SESSION['im_del_38'] = $data2['per_del'];
                    $_SESSION['im_enable_38'] = $data2['per_enable'];
                }
                if ($data2['perId'] == "39") {
                    $_SESSION['im_rolePerId_39'] = $data2['rolePerId'];
                    $_SESSION['im_perId_39'] = $data2['perId'];
                    $_SESSION['im_perName_39'] = $data2['perName'];
                    $_SESSION['im_view_39'] = $data2['per_view'];
                    $_SESSION['im_add_39'] = $data2['per_add'];
                    $_SESSION['im_edit_39'] = $data2['per_edit'];
                    $_SESSION['im_del_39'] = $data2['per_del'];
                    $_SESSION['im_enable_39'] = $data2['per_enable'];
                }
                if ($data2['perId'] == "42") {
                    $_SESSION['im_rolePerId_42'] = $data2['rolePerId'];
                    $_SESSION['im_perId_42'] = $data2['perId'];
                    $_SESSION['im_perName_42'] = $data2['perName'];
                    $_SESSION['im_view_42'] = $data2['per_view'];
                    $_SESSION['im_add_42'] = $data2['per_add'];
                    $_SESSION['im_edit_42'] = $data2['per_edit'];
                    $_SESSION['im_del_42'] = $data2['per_del'];
                    $_SESSION['im_enable_42'] = $data2['per_enable'];
                }
               
            }
            header("Location: index.php");
            exit();
        }
    }
}
