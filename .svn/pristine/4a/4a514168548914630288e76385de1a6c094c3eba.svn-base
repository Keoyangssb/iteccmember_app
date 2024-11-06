<?php

if (isset($_POST["btnSave"])) {

    $txtDeptCode = escape_string($_POST['txtDeptCode']);
    $txtDeptName = escape_string($_POST['txtDeptName']);
    $cb_bu = escape_string($_POST['cb_bu']);
    $sql = "INSERT INTO tb_department (buid,deptCode, deptName,statusId) VALUES (?,?, ?,?)";
    $params = array($cb_bu, $txtDeptCode, $txtDeptName, 1);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo "Inserted Successfully!";
    }


}
if (isset($_POST["btnEdit"])) {
    $id = escape_string($_POST['deptId']);
    $txtDeptCode = escape_string($_POST['txtDeptCode']);
    $txtDeptName = escape_string($_POST['txtDeptName']);
    $cb_bu = escape_string($_POST['cb_bu']);
   

    $sql = "UPDATE tb_department SET buid=?, deptCode = ?,deptName=? WHERE deptId = ?";
    $params = array($cb_bu,$txtDeptCode, $txtDeptName, $id);
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

    $sql = "UPDATE tb_department SET statusId = ? WHERE deptId = ?";
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