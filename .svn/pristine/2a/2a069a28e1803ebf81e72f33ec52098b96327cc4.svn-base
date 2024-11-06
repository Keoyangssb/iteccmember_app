<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
if (isset($_POST["btnTopUp"])) {

    if (isset($_POST['cbCheckOne'])) {
        $type = count($_POST['cbCheckOne']);
        // echo "<script>alert('type: $type');</script>";

        for ($i = 0; $i < $type; $i++) {

            $cbCheckOne = $_POST['cbCheckOne'][$i];

       
            $amount = str_replace(",", "", escape_string(trim($_POST['txtAmount'])));

            $year = date('Y', strtotime($_POST['txtMonth']));
            $month = date('m', strtotime($_POST['txtMonth']));

            if ($cbCheckOne != '') {
             
                topupStaffAmount($tokenKey, $userName, $amount, $cbCheckOne, $month, $year, $api_url);
            }
        }
    }
}



