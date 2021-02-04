 
<?php
    $host = "localhost";
    $dbuser = "abu";
    $dbpassword = "abulaise1111";
    $dbname = "project2";
   
   $connect = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
   if ($connect == false){
      echo "<font color='red'> database establishin problem show here</font>"; 
 
   } 

?>