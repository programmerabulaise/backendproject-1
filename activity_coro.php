<?php session_start();
  
  require_once("php_connect_coro.php");

  if(isset($_COOKIE["curentuser"])){
    
    $email = $_COOKIE["curentuser"];
  }
  
  $showdata = "SELECT * FROM users WHERE  email='$email' ";
  $showquery = mysqli_query($connect,$showdata);
  
  if( $showdata==true){

    while($mydata = mysqli_fetch_array($showquery)){  
      
        $userid = $mydata["id"];

    }}

  $notsname = htmlentities($_REQUEST["notsname"]);
  $nots = htmlentities($_REQUEST["nots"]);
       
  $updataa ="UPDATE users SET notsname='$notsname' , nots='$nots' WHERE id=$userid ";
   
    $runquery = mysqli_query($connect,$updataa);
      
          if ($runquery==true){
            
              header("location:activity.php?data=save");
            }else{
                header("location:activity.php?data=not save");
            }
       

        ?>