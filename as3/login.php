<?php 
session_start();
$_SESSION['title'] = $_POST['title'];
$_SESSION['fname'] = $_POST['fName'];
$_SESSION['lname'] = $_POST['lName'];
$_SESSION['role'] = $_POST['role'];
header('Location: helpdesk.php');
exit;
?>