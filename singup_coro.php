<?php
  
  require_once("php_connect_coro.php");

  $fname = htmlentities($_REQUEST["fname"]);
  $lname = htmlentities($_REQUEST["lname"]);
  $email = htmlentities($_REQUEST["email"]);
  $password = htmlentities($_REQUEST["password"]);
  $encrpassword = md5($password);

   
      $finddata = "SELECT * FROM users WHERE  email LIKE '%$email%' ";
      $fquery = mysqli_query($connect,$finddata);
      $fdatacount = mysqli_num_rows($fquery);

        if($fdatacount >=1){

            header("location:index-2.php?singup=email_already_registered !");

        }else{
          
          $insert = "INSERT INTO users(fname,lname,email,password) VALUES('$fname','$lname','$email','$encrpassword' )";

          $runquery = mysqli_query($connect,$insert);
      
          if ($runquery==true){
            
            header("location:index-2.php?sing=succesfull");
            }else{
                header("location:index-2.php?sing=false"); 
            }
        }
    
  
?>