<?php 
session_start();
require 'db.php';
$id = $_GET['id'];

$photo = "SELECT * FROM testimonials WHERE id=$id";
$photo_res = mysqli_query($db_connect,$photo);
$after_assoc = mysqli_fetch_assoc($photo_res );
$delete_form = 'upload/tesmonial/'. $after_assoc['image'];
unlink($delete_form);





$delete = "DELETE FROm testimonials WHERE id=$id";
mysqli_query($db_connect, $delete);
$_SESSION['delete'] = 'tesmonial deleted';
header('location:tesmonial.php');




?>