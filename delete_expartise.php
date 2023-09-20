<?php 
session_start();
require 'db.php';
$id = $_GET['id'];


$delete = "DELETE FROm expartis WHERE id=$id";
mysqli_query($db_connect, $delete);
$_SESSION['delete'] = 'expartise deleted';
header('location:expartise.php');




?>