<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
if (isset($_POST["btnEnable"])) {

    if (isset($_POST['type'])) {
        $type = count($_POST['type']);
       

        for ($i = 0; $i < $type; $i++) {

            $cbCheckOne = $_POST['cbCheckOne'][$i];
            // $txtStaffID = escape_string($_POST['txtStaffID'][$i]);

            if ($cbCheckOne != '') {
                // echo "<script>alert('cbCheckOne: $cbCheckOne');</script>";
                enablePersonalAccount($tokenKey, $userName, $cbCheckOne, $api_url);
             
            }
        }
        
    }
}



if (isset($_POST["btnDisable"])) {
    if (isset($_POST['type'])) {
        $type = count($_POST['type']);
   

        for ($i = 0; $i < $type; $i++) {

            $cbCheckOne = $_POST['cbCheckOne'][$i];
         

            if ($cbCheckOne != '') {
                // echo "<script>alert('cbCheckOne: $cbCheckOne');</script>";
                disablePersonalAccount($tokenKey, $userName, $cbCheckOne, $api_url);
            }
        }

    }
}
