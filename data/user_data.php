<?php
$sql = "SELECT * FROM client WHERE id =" . mysqli_real_escape_string($conn,$_SESSION["id"]); //after setting up login get name from table where username == username and get the id
$result = $conn->query($sql);

$data=mysqli_fetch_assoc($result);
$client_name=$data['fullname'];

$client_avatar_id=$data['avatar_image_id'];

$query = "SELECT imagePath FROM avatar_image WHERE id = " . mysqli_real_escape_string($conn,$client_avatar_id);
$res = $conn->query($query);
$avatar_data = mysqli_fetch_assoc($res);

$avatarPath = $avatar_data['imagePath'];
?>
