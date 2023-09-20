<?php 
session_start();

require 'db.php';
    $id = $_GET['id'];
    $topic_name = $_POST['topic_name'];
    $percentage = $_POST['Percentage'];

  
   $insert = "INSERT INTO expartis(topic_name, percentage)VALUES('$topic_name', '$percentage')";
   mysqli_query($db_connect, $insert);
   $_SESSION['success'] = 'New Skill Added';
   header('location:expartise.php');





?>