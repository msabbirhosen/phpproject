<?php 
session_start();

require 'db.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $masage = $_POST['message'];
   //  $email = $_POST['email'];

   $flag = false;
if(!$name){
    $flag = true;
    $_SESSION['name_err'] = ' oi beta name de';
}

if(!$email){
    $flag = true;
    $_SESSION['eml_err'] = ' oi beta email de';
}

else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $flag = true;
        $_SESSION['eml_err'] = ' ulata palta email dis ka?? ';
    }

}
if(!$subject){
    $flag = true;
    $_SESSION['subject'] = ' enter subject';
}

if(!$masage){
    $flag = true;
    $_SESSION['messsage'] = ' enter your masage';
}
if($flag){
   header('location:index.php');
}

else{



   $insert = "INSERT INTO masages(name, email, subject, masage)VALUES('$name', '$email', '$subject', '$masage')";
   mysqli_query($db_connect, $insert);
   $_SESSION['success'] = 'your message sent succsfuly';

   header('location:index.php');

 }

 



?> 