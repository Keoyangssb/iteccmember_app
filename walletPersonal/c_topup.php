<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

if (isset($_POST["btnTopUp"])) {

   $amount = $_POST['txtAmount'];
   $phone = $_POST['txtNumber'];
   $txtPersonalId = $_POST['txtPersonalId'];
   $cbTopupType = $_POST['txttopupType'];

   //   echo "<script>alert('tokenKey: $tokenKey');</script>";
   //   echo "<script>alert('userName: $userName');</script>";
   //   echo "<script>alert('amount: $amount');</script>";
   //   echo "<script>alert('txtPersonalId: $txtPersonalId');</script>";
   topupPersonalAmount($tokenKey, $userName, $amount, $txtPersonalId, $cbTopupType, $api_url);

}








// if (isset($_POST["btnRefund"])) {
//     if (isset($_POST['type'])) {
//         $type = count($_POST['type']);
//         // echo "<script>alert('type: $type');</script>";

//         for ($i = 0; $i < $type; $i++) {

//             $cbCheckOne = $_POST['cbCheckOne'][$i];
//             // $txtStaffID = escape_string($_POST['txtStaffID'][$i]);
//             $amount = $_POST['txtAmount'];
//             if ($cbCheckOne != '') {
//                 // echo "<script>alert('cbCheckOne: $cbCheckOne');</script>";
//                 refundStaffAmount($tokenKey, $userName, $amount, $cbCheckOne, $api_url);
//             }
//         }
//     }
// }
