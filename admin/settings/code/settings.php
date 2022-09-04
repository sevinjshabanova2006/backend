<?php
  $data=$crud->Select("settings");

  if(isset($_POST["settings"])){
      $column="
      title=:title,
      description=:description,
      keywords=:keywords,
      phone=:phone,
      email=:email,
      location=:location
      ";
      $arr=[
          "title"=>$_POST["title"],
          "description"=>$_POST["description"],
          "keywords"=>$_POST["keywords"],
          "phone"=>$_POST["phone"],
          "email"=>$_POST["email"],
          "location"=>$_POST["location"]
      ];

      if($crud->UPDATE("settings",$column,null,$arr)){
          header("Location:settings.php?status=ok");
      }
      else{
         header("Location:settings.php?status=no");
      }
  }
