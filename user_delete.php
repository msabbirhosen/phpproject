<?php 
session_start();

require 'db.php';

$id = $_GET['id'];
echo $id;

$delete = "DELETE FROM users WHERE id = $id";
mysqli_query($db_connect, $delete);

$_SESSION['delete'] = 'user deleted successfuly';
header('location:users_list.php');

?>