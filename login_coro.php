<?php

    session_start(); 

require_once("php_connect_coro.php");

 $email = $_REQUEST["email"];
 $password = $_REQUEST["password"];
 $encreptedpassword = md5($password);
 
    $select = "SELECT * FROM users WHERE email='$email' AND password='$encreptedpassword' ";
    $runquery = mysqli_query($connect,$select);
    $count = mysqli_num_rows($runquery);
    
  if($runquery==true){
  
    if($count===1){
        
        setcookie("curentuser",$email,time() + (86400 * 4));
       
        header("location:index-2.php ");
        
     
    } else{
        header("location:index-2.php?action=login_fail");
    }
  }

 
?>