<?php
require '../auth/authenticated.php';
require '../auth/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(is_uploaded_file($_FILES['file']['tmp_name'])){

    if (preg_match('/^image\/p?jpeg$/i', $_FILES['file']['type']) or
        preg_match('/^image\/gif$/i', $_FILES['file']['type']) or
        preg_match('/^image\/(x-)?png$/i', $_FILES['file']['type']) or
        preg_match('/^image\/svg\+xml$/i', $_FILES['file']['type']))
        {

       $Cset = array();
       $Vset = array();
    //-----------------------------------------------------------------------------
       $imageName = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
       $imageFileName = '"'. mysqli_real_escape_string($conn, $imageName) . '"'; //'_'. $_SERVER['REMOTE_ADDR'].
       $Cset[] = '`imageName`' ;
       $Vset[] = $imageFileName;
    //---------------------------------------------------------------------------------
       $imagePath = 'http://dezineshop.co/dash/avatar/' . $_FILES['file']['name'];
       $Cset[] = '`imagePath`';
       $Vset[] = '"'. mysqli_real_escape_string($conn, $imagePath) . '"';
    //-----------------------------------------------------------------------------------
       $imageSize = $_FILES['file']['size'];
       $Cset[] = '`imageSize`';
       $Vset[] = '"'. mysqli_real_escape_string($conn,$imageSize) . '"';
    //-----------------------------------------------------------------------------------
       $tcset =  implode(', ', $Cset);
       $tvset = implode(',', $Vset);
    //Get the actual File now----------------------------------------------------
      $thefile = file_get_contents($_FILES['file']['tmp_name']);
    //Check if file alredy exist--------------------------------------------------------------
    $tmpPath = '../avatar/'. $_FILES['file']['name'];
      if (file_exists($tmpPath)){
        $sql = "INSERT IGNORE INTO avatar_image ($tcset) VALUES ($tvset)";
        if ($conn->query($sql)) {
          $sql =" UPDATE client SET avatar_image_id = (SELECT id FROM avatar_image WHERE imageName = $imageFileName) WHERE id =" . mysqli_real_escape_string($conn, $_SESSION["id"]);
          if ($conn->query($sql)) {
              http_response_code(200);
              echo 'success';
          }else{
              echo 'error' . " " . $conn->errno . " " . $conn->error;
              mysqli_close($conn);
              }
        }else{
          echo 'error' . " " . $conn->errno . " " . $conn->error;
          mysqli_close($conn);
          }

      }else{
    //Move to directory-------------------------------------------------------------
      $uploads_dir = '../avatar';
      $name = $_FILES['file']['name'];
      move_uploaded_file($_FILES['file']['tmp_name'], "$uploads_dir/$name");
    //Add file to DB---------------------------------------------------------------
      //Checks the file was uploaded to directory----------------------------------------------
        if (file_exists($tmpPath)){
          $sql = "INSERT IGNORE INTO avatar_image ($tcset) VALUES ($tvset)";
          if ($conn->query($sql)) {
            $sql =" UPDATE client SET avatar_image_id = (SELECT id FROM avatar_image WHERE imageName = $imageFileName) WHERE id =" . mysqli_real_escape_string($conn,$_SESSION["id"]);
            if ($conn->query($sql)) {
                http_response_code(200);
                echo 'success';
            }else{
                echo 'error' . " " . $conn->errno . " " . $conn->error;
                mysqli_close($conn);
                }
          }else{
            echo 'error' . " " . $conn->errno . " " . $conn->error;
            mysqli_close($conn);
            }
        }else {
          echo 'upload';
          mysqli_close($conn);
        }
      }
    } else {
        echo 'image' ;
        mysqli_close($conn);
      }
  }else {
      echo 'file' ;
      mysqli_close($conn);
  }

}

?>
