<?php
$data=$crud->Select("about");

if (isset($_POST["about"])){
    $size=$_FILES["sekil"]["size"];
    $type=$_FILES["sekil"]["type"];
    $tmp_name=$_FILES["sekil"]["tmp_name"];
    $name=$_FILES["sekil"]["name"];
    $old_image=$_POST["old_image"];
    $types=["image/png","image/jpeg","image/jpg","image/webp","image/gif"];
    $yol="../../image/about/".$name;
    if($size>0 && !in_array($type,$types)){
        header("Location:about.php?status=no");
        exit();
    }
    $column='
    title=:title,
    description=:description,
    video=:video,
    image=:sekil
    ';
    $arr=[
        "title"=>$_POST["title"],
        "description"=>$_POST["description"],
        "video"=>$_POST["video"],
        "sekil"=>$size>0 ? $yol : $old_image
        ];


    if($crud->UPDATE("about",$column,null,$arr)){
        $size>0 ? unlink($old_image) : "";
        move_uploaded_file($tmp_name,$yol);
        header("Location:about.php?status=ok");
        exit();
    }
    else{
        header("Location:about.php?status=no");
        exit();
    }
}
?>