<?php session_start();
  
  require_once("php_connect_coro.php");

  if(isset($_COOKIE["curentuser"])){
    
    $useremail = $_COOKIE["curentuser"];
  }




  $showdata = "SELECT * FROM users WHERE  email='$useremail' ";
  $showquery = mysqli_query($connect,$showdata);
  
  if( $showdata==true){

    while($mydata = mysqli_fetch_array($showquery)){  
      
        $userid = $mydata["id"];
        $userfname = $mydata["fname"];

    }}
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Abu Laise</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- font-awesome link    -->
  <script src="https://kit.fontawesome.com/78e73b37a7.js" crossorigin="anonymous"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

 
      <!-- nav bar start here -->
      <nav class="navbar navbar-expand-lg navbar-light bg-danger text-white position-relative">
        <div class="container">
           <a class="navbar-brand float-left h3 text-white"  href="">Abu Laise</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
         
           <div class="collapse navbar-collapse container  " id="navbarSupportedContent">
             <ul class="navbar-nav    ">
               <li class="nav-item active">
                 <a class="nav-link text-white " href="index-2.php">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link text-white" href="#aboutme">About</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link text-white" href="#what-i_know">Service</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link text-white" href="#">Reuse</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link text-white" href="#">Portfolio</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link text-white" href="#">blog</a>
                 </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Website
                 </a>
                 <div class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item text-white" href="#">Facebook</a>
                   <a class="dropdown-item text-white" href="#">Google</a>
                   <a class="dropdown-item text-white" href="#">Whatsapp</a>
                   <a class="dropdown-item text-white" href="#">You Tube</a>
                    
                 </div>
               </li>
               <li class="nav-item">
                 <a class="nav-link text-white" href="#contactsection">Contact Us</a>
               </li>
   
     
                  <?php

                    if(!isset($_COOKIE["curentuser"])){
                     
                      echo'  <li class="nav-item">
                      <a class="nav-link text-white"  id="log-inid" href="#">Log In</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" id="sin-up" href="#"    href="#" >Sing Up</a>
                    </li>';


                    }else{
                      
                        echo '  
                              
                               <li class="nav-item">
                                  <a class="nav-link text-white" href="activity.php">activity</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-white" href="#">Hello ' .$userfname.'</a>
                              </li>

                              <li class="nav-item">
                               <a class="nav-link text-white" href="logout-coro.php">Log Out</a>
                             </li>
                      ';

                    }
                  
                  
                  ?>
               
             </ul>
              
        </div>
       </div>
     </nav>
  </head>
  <body>
      

    <div class="container">
          
        <div class="row">
            <div class="col-lg-3 col-sm-12"></div>
            <div class="col-lg-6 col-sm-12">
            <div class="change-password pt-5"  >
        <form action="change_password_coro.php" method="post">
            <h5 >Enter your old password </h5>
           <input class="pt-2" type="password" placeholder="Enter Your Old password" name="oldpassword">
           <h5>Enter your new password</h5>
           <input class="pt-2" type="password" placeholder="Enter Your New password" name="newpassword">
           <h5>Enter your confirm password</h5>
           <input class="pt-2" type="password" placeholder="Enter Your Confirm password" name="confirmpassword">
           
           <?php  if(isset($_REQUEST["password"])){ ?>

               <h4 style="color:red;"><?php echo"something went to wrong";?></h4>
            
           
            <?php }  ?>
           
          

           <input class="pt-2" type="submit" value="CHANGE" id="changepaswordid" class="btn btn-danger">
         
            </div>
            <div class="col-lg-3 col-sm-12"></div>
        </div>
    </div>

 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>


</html>