<?php 
session_start();
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT COUNT(*) as paisi FROM users WHERE email='$email'";
$select_query = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_query);



if($after_assoc['paisi']==1){
    $user = "SELECT * FROM users WHERE email= '$email'";
    $user_query = mysqli_query($db_connect,$user);
     $after_assoc_user = mysqli_fetch_assoc($user_query);

     
    if(password_verify($password, $after_assoc_user['password'])){
    
        $_SESSION['login_korcha']= 'ha lodin hoise';
        $_SESSION['user_id'] = $after_assoc_user['id'];
        header ('location:admin.php');
    }  
else{
    $_SESSION['wrong']= 'wrong password';
    header ('location:login.php');
}
}
else{
    $_SESSION['invalid']= 'invalid email address';
    header ('location:login.php');
}

?>