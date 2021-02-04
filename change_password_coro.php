 <?php
    
    session_start(); 
    require_once("php_connect_coro.php");
 
   if(isset($_COOKIE["curentuser"])){
    
    $useremail = $_COOKIE["curentuser"];
   
    $showdata = "SELECT * FROM users WHERE  email='$useremail' ";
    $showquery = mysqli_query($connect,$showdata);
    
  if( $showdata==true){

    while($mydata = mysqli_fetch_array($showquery)){  
      
        $userid = $mydata["id"];
      
        $dboldpassword = $mydata["password"];
        $oldenterpassword =  htmlentities(md5($_REQUEST["oldpassword"]));
        $newenterpassword =  htmlentities(md5($_REQUEST["newpassword"]));
        $confirmpassword =  htmlentities(md5($_REQUEST["confirmpassword"]));
        
        if ($dboldpassword===$oldenterpassword && $newenterpassword===$confirmpassword ){
           
         $updataa ="UPDATE users SET password='$confirmpassword'  WHERE id='$userid' ";
        
         $runquery = mysqli_query($connect,$updataa);

         header("location:activity.php?password=password_changeed_successfull");

        }else{
             header("location:changepassword.php?password=something went to wrong please try angin!");
        }
        
 
        }}}

 
         
 

 
?>