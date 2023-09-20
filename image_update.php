<?php 
session_start(); 
require 'db.php';

$id = $_SESSION['user_id'];
$image = $_FILES['image'];
$after_explode = explode('.', $image['name']);
$extension = end($after_explode);
$allowod_extension =['jpg','webp','png'];

if(in_array($extension,$allowod_extension)){
   
    if($image['size'] <= 512000){
        // echo 'choto';
        $file_name = $id .'.'. $extension; 
        $new_location = 'upload/users/' .$file_name;
        move_uploaded_file($image['tmp_name'], $new_location);

        $update = "UPDATE users SET image='$file_name' WHERE id=$id";
        mysqli_query($db_connect, $update);

        $_SESSION['update'] = 'Profile updated Successfully';
        header('location:profile.php');

    }
    else{

        $_SESSION['exten'] = 'maximum image size 512 kb';
        header('location:profile.php');
    }
}
else{
    $_SESSION['exten'] = 'image must be type of jpg,npg,png,webp';
    header('location:profile.php');
}

// else{
//     $delete_from = 'upload/usrrs/'.$after_assoc['image'];
//     unlink($delete_from);
    
// if(in_array($extension,$allowod_extension)){
   
//     if($image['size'] <= 512000){
//         // echo 'choto';
//         $file_name = $id .'.'. $extension; 
//         $new_location = 'upload/users/' .$file_name;
//         move_uploaded_file($image['tmp_name'], $new_location);

//         $update = "UPDATE users SET image='$file_name' WHERE id=$id";
//         mysqli_query($db_connect, $update);

//         $_SESSION['update'] = 'Profile updated Successfully';
//         header('location:profile.php');

// }




?>