<?php 
session_start();
require 'db.php';
$id = $_GET['id'];


$delete = "DELETE FROm masages WHERE id=$id";
mysqli_query($db_connect, $delete);
$_SESSION['delete'] = 'message deleted';
header('location:masage.php');




?>