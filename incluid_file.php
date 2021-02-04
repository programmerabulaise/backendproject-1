 
  <?php  
       if(isset($_REQUEST["singup"])){

        if($_REQUEST["singup"]==true){

             echo "<script> alert('Email already register please try with another Email!')</script>";
         }
         else{
          echo "<script> alert('you have succefull to Sing Up')</script>";
         }
       }
        if(isset($_REQUEST["sing"])){

        if($_REQUEST["sing"]==true){

             echo "<script> alert('you are successfull to singup!')</script>";
         }
          
       }
          

       if(isset($_REQUEST["action"])){

        if($_REQUEST["action"]==true){

             echo "<script> alert('Email or username Wrong!')</script>";
         }
         else{
          echo "<script> alert('Email or username Wrong!')</script>";
         }
       }


 
  ?>