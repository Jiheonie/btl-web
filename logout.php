<?php
   session_start();
   unset($_SESSION['userId']);
   unset($_SESSION['fullname']);
   unset($_SESSION['role']);
   header("Location:./index.php");
?>
