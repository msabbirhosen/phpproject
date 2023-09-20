<?php 
session_start();
require 'db.php';

$header_logo = $_FILES['header_logo'];
$after_explode = explode('.', $header_logo['name']);
$extension = end($after_explode);
$allowod_extension =['jpg', 'webp', 'png'];



$select_logo ="SELECT * FROM logos WHERE id=1"; 
$select_logo_res = mysqli_query($db_connect, $select_logo );
$aftar_assoc = mysqli_fetch_assoc($select_logo_res);


// $delete_form = 'upload/logo/'.$aftar_assoc ['header_logo'];
// unlink ($delete_form);

if(in_array($extension,$allowod_extension)){
   
    if($header_logo['size'] <= 512000){
        $delete_form = 'upload/logo/'.$aftar_assoc ['header_logo'];
        unlink ($delete_form);
        // echo 'choto';
        $file_name = '$header_logo' .'.' . $extension; 
        $new_location = 'upload/logo/' .$file_name;
        move_uploaded_file($header_logo['tmp_name'], $new_location);

        $update = "UPDATE logos SET header_logo='$file_name' WHERE id=1";
        mysqli_query($db_connect, $update);

        $_SESSION['header_logo'] = 'header logo updated';
        header('location:logo.php');

    }
    else{

        $_SESSION['exten'] = 'maximum image size 512 kb';
        header('location:logo.php');
    }
}
else{
    $_SESSION['exten'] = 'image must be type of jpg,npg,png,webp';
    header('location:logo.php');
}

?>