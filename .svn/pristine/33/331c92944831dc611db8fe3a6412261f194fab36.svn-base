<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
// if (isset($_POST["btnTopUp"])) {

//     if (isset($_POST['type'])) {
//         $type = count($_POST['type']);
//         // echo "<script>alert('type: $type');</script>";

//         for ($i = 0; $i < $type; $i++) {

//             $cbCheckOne = $_POST['cbCheckOne'][$i];
//             // $txtStaffID = escape_string($_POST['txtStaffID'][$i]);
//             $amount = $_POST['txtAmount'];
         
//             if ($cbCheckOne != '') {
         
//                 topupStaffAmount($tokenKey, $userName, $amount, $cbCheckOne, $api_url);
//             }
//         }
//     }
// }



if (isset($_POST["btnRefund"])) {
    $amount = $_POST['txtAmount'];
    $phone = $_POST['txtNumber'];
 

   
    refundPersonalAmount($tokenKey, $userName, $amount, $phone, $api_url);
}
