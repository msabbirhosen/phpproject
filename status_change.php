<?php 
session_start();

require 'db.php';
$id = $_GET["id"];

$select = "SELECT * FROM expartis WHERE id=$id";
$select_res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if($after_assoc['status'] == 1){
    $update = "UPDATE expartis SET status=0 WHERE id=$id";
    mysqli_query($db_connect,$update);
    header('location:expartise.php');
}

else{
    $update = "UPDATE expartis SET status=1 WHERE id=$id";
    mysqli_query($db_connect,$update);
    header('location:expartise.php');
}

?>