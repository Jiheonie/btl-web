 <?php
  require_once "define.php";

   $db_username = DB_USERNAME;
   $db_password = DB_PASSWORD;
   $database = 'database';
   $connect = new mysqli('localhost', $db_username, $db_password, $database);
   if ($connect == false) {
      die("Connection failed: " . mysqli_connect_error());
   }

   return $connect;
?>
