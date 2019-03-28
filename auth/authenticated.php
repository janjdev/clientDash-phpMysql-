<?php
session_start();
if(  $_SESSION['authenticated'] != true){
  header("location: ../forms_auth/login.php");
}
 ?>
