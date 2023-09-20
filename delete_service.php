<?php 
session_start();
require 'db.php';
$id = $_GET['id'];


$delete = "DELETE FROm services WHERE id=$id";
mysqli_query($db_connect, $delete);
$_SESSION['delete'] = 'service deleted';
header('location:service.php');




?>