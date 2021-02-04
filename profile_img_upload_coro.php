<?php
    session_start(); 

      require_once("php_connect_coro.php");
   
     if(isset($_COOKIE["curentuser"])){
      
      $useremail = $_COOKIE["curentuser"];
     
      $showdata = "SELECT * FROM users WHERE  email='$useremail' ";
      $showquery = mysqli_query($connect,$showdata);
      
    if( $showdata==true){
  
      while($mydata = mysqli_fetch_array($showquery)){  
        
        echo  $userid = $mydata["id"]; 
       
                
     
        echo $ftmpname = $_FILES["ppic"]["tmp_name"]; 

        $puid = "BS20".uniqid(0,99999);

          move_uploaded_file($ftmpname,"images/$puid.jpg");
          
                 
         $updataa ="UPDATE users SET profile_img='$puid.jpg'  WHERE id='$userid' ";
        
         $runquery = mysqli_query($connect,$updataa);
 
        if($runquery==true){
          header("location:activity.php?img=upload");
        }else{
          header("location:activity.php?img=notupload");
        }
         
        
        }}} 
       

?>