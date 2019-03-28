<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
 if(  $_SESSION['authenticated'] != true){
  header("Location: forms_auth/login.php");
}else{
  header("location: pages/admin.php");
 }
?>
