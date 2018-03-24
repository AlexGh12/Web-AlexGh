<?php 
session_start();

$pwdm = $_POST["pwd-master"];
$xxxpwd = "1379";

$camp = isset($pwdm) && !empty($pwdm);
$compa = $pwdm == $xxxpwd;

$_SESSION["curriculum"] = $xxxpwd;
$coknam = "id_web_Gh"; //nombre de session.
$cokval = $_SESSION["curriculum"];
$expira = time() + 1800;
$magic = setcookie($coknam, $cokval, $expira, "/");

 ?>