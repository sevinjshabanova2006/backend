<?php
 class DBConnection extends PDO{
     const host="localhost";
     const dbname="backend2";
     const user="root";
     const pass="";

     public function __construct()
     {
         parent::__construct("mysql:host=".self::host.";dbname=".self::dbname.";charset=utf8", self::user, self::pass);
         $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
     }

 }
?>