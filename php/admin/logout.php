<?php
session_start();
// Destroy session and redirect to homepage

session_destroy();
header('Location: ../../index.php');
exit;
?>