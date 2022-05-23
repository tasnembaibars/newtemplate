<?php
var_dump($_POST);
$title = $_POST["title"];
$description = $_POST["description"];
$imagePath="";
if(!$title){
    $errors[]='product title is required';
};
if(!is_dir("images")){
  mkdir("images");
}
if(empty($errors)){
  $image = $_FILES['img'] ?? null;
  var_dump($_FILES["img"]);
  $imagePath=$product["category_image"];   //change the image name here
  if($image && $image["tmp_name"]){
    if($product["category_image"]){        //and the image name here
        unlink($product["category_image"]);//and the image name here
    }
    $imagePath="images/".randomString(8)."/".$image["name"];
    mkdir(dirname($imagePath));
    move_uploaded_file($image['tmp_name'],$imagePath);
  }

};