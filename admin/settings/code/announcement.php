<?php
$category = $crud->Select("categories" , 1);
$subcategory = $crud->Select("sub_categories",1);
if(isset($_POST["announcement"])){
    $column='
     category_id=:category_id,
     subcategory_id=:subcategory_id,
     title=:title,
     link=:link,
     description=:description,
     date=:date,
     video=:video
    ';
    $arr=[
       "category_id"=>$_POST["category_select"],
        "subcategory_id"=>$_POST["subcategory_select"],
        "title"=>$_POST["title"],
        "link"=>$_POST["link"],
        "description"=>$_POST["description"],
        "date"=>date("Y-m-d-h-i-s"),
        "video"=>$_POST["video"]
    ];
    $crud->INSERT("announcement",$column,$arr) ? header("Location:announcement.php?ok") : header("Location:announcement.php?no");
}

?>

