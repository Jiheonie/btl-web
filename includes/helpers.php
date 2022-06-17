<?php 
function getRole($role_id) {
   $connect = require("db_connect.php");
   $sql = "SELECT * FROM Role WHERE id='$role_id'";

   try {
      $result = $connect->query($sql);
      $role = $result->fetch_assoc();
      return $role["name"] ?? "Guest";
   }
   catch (Exception $e) {
      echo $e;
   }

   return "Guest";
}
