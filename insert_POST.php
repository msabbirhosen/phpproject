<?php
session_start();

require 'db.php';

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$password = $_POST['password'] ;
$after_hash = password_hash($password, PASSWORD_DEFAULT );
$gender = $_POST['gender'] ;

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

if(!$password){
    $flag = true;
    $_SESSION['password_err'] = ' oi beta password de';
}

else {
    $upper = preg_match('@[A-Z]@', $password);
    $lower = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $spsl = preg_match('@[#,$,%,^,&,*,/]@', $password);

    if (!$upper || !$lower || !$number || !$spsl || strlen($password) < 8){
        $flag = true;
        $_SESSION['password_err'] = ' Uppercase dao, Lowercase dao,Numbercase dao,Spslcase dao, '; 
    }
}

if(!$gender){
    $flag = true;
    $_SESSION['gen_err'] = ' tmr sex ki  age bolo';
}

if($flag){
header('location:insert.php');
}

else{

    $select = "SELECT COUNT(*) as paisi FROM users WHERE email='$email'";
    $select_query = mysqli_query($db_connect,$select);
    $after_assoc = mysqli_fetch_assoc($select_query);
    
    if($after_assoc['paisi']==0){


        $insert = " INSERT INTO users(name,email, password, gender ) VALUES('$name','$email', '$after_hash', '$gender')";
        mysqli_query ( $db_connect,$insert );
//    $_SESSION['success']='user registerd Success!';
//    header('location:class4.php');
        header('location:insert.php');
        $_SESSION['success']='user registerd success';

    }

   
    else{
        header('location:insert.php');
        $_SESSION['exit']='email already exit';
 
    }
}

?>