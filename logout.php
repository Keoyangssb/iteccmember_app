<?php

session_start();

unset($_SESSION['im_userId']);
unset($_SESSION['im_userName']);
unset($_SESSION['im_tokenKey']);
unset($_SESSION['im_fullName']);
unset($_SESSION['im_roleId']);
unset($_SESSION['im_roleName']);
unset($_SESSION['im_status']);
unset($_SESSION['im_strDate']);
unset($_SESSION['im_expDate']);

header("Location: login.php");
