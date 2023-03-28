<?php
require_once('connect.php');
session_start();
unset($_SESSION['key']);
session_destroy();
session_unset();
header('Location:index.php');
?>
