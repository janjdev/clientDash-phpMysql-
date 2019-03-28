<?php
require '../auth/authenticated.php';
require '../auth/connect.php';
include '../data/user_data.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $set = array();
  if($_POST['email'] != ''){
      $mail = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
      $set[] = 'email' ." = '". $mail ."'";
  }
  $tset =  implode(', ', $set);
    $sql = "UPDATE client
            SET
          $tset
           WHERE id =" . mysqli_real_escape_string($conn,$_SESSION['id']);
    if ($conn->query($sql)) {
        http_response_code(200);
          echo 'success';
        }
        else{
            echo 'error' . $conn->connect_error;
            }
            mysqli_close($conn);
      }

?>
