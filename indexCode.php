<?php
error_reporting(E_ALL & ~E_NOTICE);
ob_start();
//require_once ("config.php");
session_start();
// $info_id = $_SESSION["empid"];
   
    if(!isset($_SESSION['im_userId'])){
       header("Location: login.php");
       exit();        
    }
		

$filename = "index";

if (isset($_GET['d'])) $filename = $_GET['d'];

$slashpos = stripos($filename, "/");
if ($slashpos != false){
	$mfilename = substr($filename, 0, $slashpos+1) . "m_" . substr($filename, $slashpos+1) . ".php";
	$vfilename = substr($filename, 0, $slashpos+1) . "v_" . substr($filename, $slashpos+1) . ".php";
	$cfilename = substr($filename, 0, $slashpos+1) . "c_" . substr($filename, $slashpos+1) . ".php";
} else {
	$mfilename = "m_$filename.php";
	$vfilename = "v_$filename.php";
	$cfilename = "c_$filename.php";
}
include_once("function_sel.php");
if (file_exists($mfilename)) include($mfilename);
if (file_exists($cfilename)) include($cfilename);

/*
if(!isset($_SESSION['WTKrate'])){
	$rate = rate($info_id);
	$rs_rate = mysql_fetch_array($rate);
	$rate_id = $rs_rate['rate_id'];
	$thb = $rs_rate['thb'];
	$usd = $rs_rate['usd'];
	$date_add_rate = $rs_rate['date_add_rate'];
	$user_add_rate = $rs_rate['user_add_rate'];
	
	$_SESSION['WTKrate'] = array();
	
	$rate_arr = array("rate_id" => $rate_id, "thb" => $thb, "usd" => $usd, "date_add_rate" => $date_add_rate, "user_add_rate" => $user_add_rate);
	$_SESSION['WTKrate'] = $rate_arr;
}
*/