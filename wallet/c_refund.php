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
    if (isset($_POST['type'])) {
        $type = count($_POST['type']);
        // echo "<script>alert('type: $type');</script>";

        for ($i = 0; $i < $type; $i++) {
            $cbCheckOne = $_POST['cbCheckOne'][$i];
            // $txtStaffID = escape_string($_POST['txtStaffID'][$i]);
            //$amount = $_POST['txtAmount'];
            $amount = str_replace(",","",escape_string(trim($_POST['txtAmount'])));
            $year = date('Y', strtotime($_POST['txtMonth'])); 
            $month =  date('m', strtotime($_POST['txtMonth'])); 
            if ($cbCheckOne != '') {
                // echo "<script>alert('cbCheckOne: $cbCheckOne');</script>";
                refundStaffAmount($tokenKey, $userName, $amount, $cbCheckOne,$month,$year, $api_url);
            }
        }
    }
}
