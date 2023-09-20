

<?php 
session_start();

require 'db.php';


$name = $_POST['name'];
$occupation = $_POST['occupation'];
$descritpion = $_POST['description'];
$image = $_FILES['image'];


$after_explode = explode('.', $image['name']);
$extension = end($after_explode);
$file_name = 'tesmonial' .'.'.rand(10000,20000).'.'. $extension;


 $new_location = 'upload/tesmonial/' .$file_name;
 move_uploaded_file($image['tmp_name'], $new_location);


  
   $insert = "INSERT INTO testimonials(name, occupation, description, image)VALUES('$name', '$occupation', '$descritpion', '$file_name')";
   mysqli_query($db_connect, $insert);
   $_SESSION['success'] = 'New tesmonial Added';
   header('location:tesmonial.php');





?>