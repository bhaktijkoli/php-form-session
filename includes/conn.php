<?php
$db_host = "localhost";
$db_username="root";
$db_password="root12345";
$db_database="demo";
$conn = new mysqli($db_host, $db_username, $db_password, $db_database);
if($conn->connect_error) {
  die("Connection failed");
}
?>
