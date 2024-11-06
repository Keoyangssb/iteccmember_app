<?php

if (isset($_POST["btnSave"])) {

    $txtBuCode = escape_string($_POST['txtBuCode']);
    $txtBuName = escape_string($_POST['txtBuName']);
    $sql = "INSERT INTO tb_bu (buCode, buName,statusId) VALUES (?, ?,?)";
    $params = array($txtBuCode, $txtBuName, 1);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo "Inserted Successfully!";
    }


}
if (isset($_POST["btnEdit"])) {
    $id = escape_string($_POST['id']);
    $txtBuCode = escape_string($_POST['txtBuCode']);
    $txtBuName = escape_string($_POST['txtBuName']);
    // echo '<script>console.log("'.$id.'")</script>';
 

    $sql = "UPDATE tb_bu SET buCode = ?,buName=? WHERE buid = ?";
    $params = array($txtBuCode, $txtBuName, $id);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
        echo '<script>console.log("update: fail")</script>';
    } else {
        echo "Updated Successfully!";
        echo '<script>console.log("update: success")</script>';
    }


}
if (isset($_GET["del"])) {
    $id = $_GET["del"];

    $sql = "UPDATE tb_bu SET statusId = ? WHERE buid = ?";
    $params = array(0, $id);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
        echo '<script>console.log("Delete: fail")</script>';
    } else {
        echo "Deleted Successfully!";
        echo '<script>console.log("Delete: success")</script>';
    }
}