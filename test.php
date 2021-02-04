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

      

      <!-- nav bar end here -->
  <body style="background:#ddd;">
  <div class="container" style="width:1140px; margin:auto;"> 

    
     




    <div class="notsform">
     
    <form action="activity_coro.php" method="post">
  <div class="form-group pt-5">
    <label for="exampleFormControlInput1">Write your notsname</label>
    <input type="text" name="notsname" class="form-control" id="exampleFormControlInput1" placeholder="write your nots name">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe Your nots</label>
    <textarea class="form-control" name="nots"type="text" id="exampleFormControlTextarea1" placeholder="what's on your mind" rows="3"></textarea>
    <input type="submit" value="SAVE" class="btn btn-danger mt-3 w-100% f-right"> 
  </div>
</form>
    </div>


 <br/>
   <div style="width:1140px; margin:auto; text-align:center; margin-bottom:50px; background:white;color:black;">   ACTIVITY</div>
<table border="1px" style="border-collapse:collapse;" class="table table-hover table-dark">
 <thead>
 <tr style ="text-transform:uppercase;">
 
 <th>user_id</th>
 <th>notsname</th>
 <th>nots</th>
  
 
 
 </tr>
 
 </thead>
<tbody>
  <?php
   require_once("php_connect_coro.php");
   
   
  $showdata = "SELECT * FROM users WHERE id='$userid'";

  $showquery = mysqli_query($connect,$showdata);
  
  if( $showdata==true){

    while($mydata = mysqli_fetch_array($showquery)){   ?>
	 
      <tr>
          <td><?php echo $mydata["id"];?></td>
		     <td><?php echo $mydata["notsname"];?></td>
		     <td><?php echo $mydata["nots"];?></td>
		   </tr>



   <?php }  ?>

</tbody>

 </table>

 <?php } ?>

 </div>

 
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>