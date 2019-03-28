<?php
require '../auth/authenticated.php';
require '../auth/connect.php';
include 'user_data.php';
error_reporting(E_ERROR | E_PARSE);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $set = array();
  if($_POST["email"] != ''){
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $set[] =  'email' ." = '". $email ."'";
  }
  if($_POST['fullname'] != ''){
      $fullname = $_POST['fullname'];
    $set[] = 'fullname' ." = '". $fullname ."'";
  }
  if($_POST['title'] != ''){
    $title = $_POST['title'];
    $set[] = 'title' ." = '". $title ."'";
  }
  if($_POST['phone'] != ''){
      $phone = $_POST['phone'];
    $set[] = 'phone' ." = '". $phone ."'";
  }
  if($_POST['personal_info'] != ''){
    $personal_info = $_POST['personal_info'];
    $set[] = 'personal_info' ." = '". $personal_info ."'";
  }
$tset =  implode(', ', $set);

$sql = "UPDATE client
        SET
      $tset
       WHERE id =" . mysqli_real_escape_string($conn,$_SESSION['id']) ;
if ($conn->query($sql)) {
    http_response_code(200);
      echo 'success';
    }
    else{
        echo 'error';
        }
        mysqli_close($conn);
  }

?>
