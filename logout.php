<?php
   session_start();
   $d= session_destroy();
   if($d)
   {
   		echo "successfully Logout";
      header("Location: index.php");
   }
?>