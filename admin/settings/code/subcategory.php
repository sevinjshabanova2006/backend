<?php
 $category = $crud->Select("categories" , 1);
if(isset($_POST["subcategory"])){
 $column='
   category_id=:category_id,
   title=:title
 ';
 $arr=[
     "category_id"=>$_POST["subcategory_select"],
     "title"=>$_POST["title"]
 ];
 $crud->INSERT("sub_categories",$column,$arr) ? header("Location:subcategory.php?ok") :  header("Location:subcategory.php?no");
}

?>
