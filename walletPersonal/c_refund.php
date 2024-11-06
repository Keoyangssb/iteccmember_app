<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
if (isset($_POST["btnRefund"])) {

  
            $amount = $_POST['txtAmount'];
            $phone = $_POST['txtNumber'];
            $txtPersonalId = $_POST['txtPersonalId'];
            $cbTopupType = '1';
     
                  //   echo "<script>alert('tokenKey: $tokenKey');</script>";
                  //   echo "<script>alert('userName: $userName');</script>";
                  //   echo "<script>alert('amount: $amount');</script>";
                  //   echo "<script>alert('txtPersonalId: $txtPersonalId');</script>";
            refundPersonalAmount($tokenKey, $userName, $amount, $txtPersonalId,$cbTopupType, $api_url);
         }
      
        
                
        




