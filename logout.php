<?php
session_start();
$_SESSION['uid'] = null;
session_destroy();
?>
