<?php
session_start();
   
    $get_langID = $_GET['langid'];                
        if ( $get_langID == "2" ) {
            $_SESSION['im_langId']  = "2"; 
             
         } else {
            $_SESSION['im_langId']  = "1";            
         }
?>
 
