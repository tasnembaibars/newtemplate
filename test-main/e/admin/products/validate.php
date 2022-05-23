<?php
var_dump($_POST);
$title = $_POST["title"];
$description = $_POST["description"];
$price = $_POST["price"];
$category=$_POST["category"];
$imagePath="";
$imagePath1="";
$imagePath2="";
$imagePath3="";
if(!$title){
    $errors[]='product title is required';
};
if(!$price){
    $errors[]="product price is required";
};
if(!is_dir("images")){
  mkdir("images");
}
if(empty($errors)){
  $image  = $_FILES['img'] ?? null;
  $image1 = $_FILES['img1'] ?? null;
  $image2 = $_FILES['img2'] ?? null;
  $image3 = $_FILES['img3'] ?? null;
  $imagePath=$product["product_main_image"];
  $imagePath1=$product["product_desc_image_1"];
  $imagePath2=$product["product_desc_image_2"];
  $imagePath3=$product["product_desc_image_3"];
  if($image && $image["tmp_name"]){
    if($product["product_main_image"]){
        unlink($product["product_main_image"]);
    }
    $imagePath="images/".randomString(8)."/".$image["name"];
    mkdir(dirname($imagePath));
    move_uploaded_file($image['tmp_name'],$imagePath);
  }
  if($image1 && $image1["tmp_name"]){
    if($product["product_desc_image_1"]){
        unlink($product["product_desc_image_1"]);
    }
    $imagePath1="images/".randomString(8)."/".$image1["name"];
    mkdir(dirname($imagePath1));
    move_uploaded_file($image1['tmp_name'],$imagePath1);
  }
  if($image2 && $image2["tmp_name"]){
    if($product["product_desc_image_2"]){
        unlink($product["product_desc_image_2"]);
    }
    $imagePath2="images/".randomString(8)."/".$image2["name"];
    mkdir(dirname($imagePath2));
    move_uploaded_file($image2['tmp_name'],$imagePath2);
  }
  if($image3 && $image3["tmp_name"]){
    if($product["product_desc_image_3"]){
        unlink($product["product_desc_image_3"]);
    }
    $imagePath3="images/".randomString(8)."/".$image3["name"];
    mkdir(dirname($imagePath3));
    move_uploaded_file($image3['tmp_name'],$imagePath3);
  }

};