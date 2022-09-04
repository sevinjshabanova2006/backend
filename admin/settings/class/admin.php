<?php
   session_start();
   ob_start();
   require_once "../settings/db.php";
   $db=new DBConnection();

   require_once "../settings/class/general.php";

   require_once "../settings/class/crud.php";
   $crud=new CRUD();
?>
