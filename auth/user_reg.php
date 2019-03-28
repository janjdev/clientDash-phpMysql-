<?php
require 'connect.php';
 //
 session_start();
if(!empty($_POST["fullName"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
  $fullName = $_POST["fullName"];
  $username = $_POST["email"];
  $password = $_POST["password"];
  $sql = "INSERT INTO client (fullName, email, username, password) VALUES ($fullName, $username, $username, $password)";
  //$result =  
  $conn->query($sql);
  //$user = mysqli_fetch_array($result);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    header("location: ../forms_auth/login.php");
}
  //if($user) {
    // $_SESSION['authenticated'] = true;
    //  $_SESSION["id"]  = $user["id"];
    //  if(!empty($_POST["rememberMe"])) {
    //    setcookie ("member_login",$username,time()+ (10 * 365 * 24 * 60 * 60));
    //  } else {
    //    if(isset($_COOKIE["member_login"])) {
    //      setcookie ("member_login","");
    //    }
    //  }
     //header("location: ../forms_auth/login.php");
 //} else {
  // $message = "Cannot register at this time";
 //}
}
?>