<?php
session_start();
include 'includes/conn.php';
$uid = $_SESSION['uid'];
$sql = "SELECT * FROM users WHERE id = '$uid'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User</title>
  </head>
  <body>
    <h1>Welcome <?= $user['name']?></h1>
    <img src="/<?= $user['image']?>"/>
    <a href="/logout.php">Logout</a>
  </body>
</html>
