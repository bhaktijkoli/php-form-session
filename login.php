<?php
session_start();
include 'includes/conn.php';
if(isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = $conn->query($sql);
  if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if($password == $row['password']) {
      $_SESSION['uid'] = $row['id'];
      die("Login Successfull");
    } else {
      echo 'Invalid email and password';
    }
  } else {
    echo 'Invalid email and password';
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form action="" method="post">
      <label for="">Email</label>
      <input type="email" name="email"/><br/>
      <label for="">Password</label>
      <input type="password" name="password"/><br/>
      <input type="submit" value="Login"/>
    </form>
  </body>
</html>
