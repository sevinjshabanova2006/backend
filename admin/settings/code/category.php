<?php
if (isset($_POST["category"])){
    $column='
    title=:title
    ';
    $arr=[
        "title"=>$_POST["title"]
    ];
    $crud->INSERT("categories",$column,$arr) ? header("Location:category.php?status=ok") : header("Location:category.php?status=no");
}
?>