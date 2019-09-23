<?php
include 'includes/conn.php';
if(isset($_POST['name'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $imageFile = $_FILES['image']['tmp_name'];
  $uniqid = uniqid();
  $image = "uploads/$uniqid.png";
  move_uploaded_file($imageFile, $image);
  $sql = "INSERT INTO users (name, email, password, image) VALUES ('$name', '$email', '$password', '$image')";
  if($conn->query($sql)) {
    die("Signup Successfull!");
  } else {
    die("Signup Failed!");
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <label for="">Name</label>
      <input type="text" name="name"/><br/>
      <label for="">Email</label>
      <input type="email" name="email"/><br/>
      <label for="">Password</label>
      <input type="password" name="password"/><br/>
      <label for="">Image</label>
      <input type="file" name="image"/><br/>
      <input type="submit" value="Signup"/>
    </form>
  </body>
</html>
