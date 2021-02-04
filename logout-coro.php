 
<?php
  setcookie("curentuser"," ",time() - (86400 * 4));
  header("location:index-2.php");
?>