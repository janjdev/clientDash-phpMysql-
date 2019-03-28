<?php
require 'connect.php';
 session_start();
if(!empty($_POST["email"]) && !empty($_POST["password"])) {
  $username = $_POST["email"];
  $password = $_POST["password"];
 $sql = "SELECT id FROM client WHERE username = '" . $username . "' and password = '" . $password . "'";
 $result = $conn->query($sql);
 $user = mysqli_fetch_array($result);
 if($user) {
    $_SESSION['authenticated'] = true;
     $_SESSION["id"]  = $user["id"];
     if(!empty($_POST["rememberMe"])) {
       setcookie ("member_login",$username,time()+ (10 * 365 * 24 * 60 * 60));
     } else {
       if(isset($_COOKIE["member_login"])) {
         setcookie ("member_login","");
       }
     }
     header("location: ../pages/admin.php");
 } else {
   $message = "Invalid username or password.";
 }
}
?>
