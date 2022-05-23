<?php
/** @var pdo \PDO */
require_once "./../database.php";
require_once "./../functions.php";
$errors =[];
$title="";
$price="";
$description="";
$category="";
$product = [
  "product_main_image" => "", 
  "product_image_1" => "", 
  "product_image_2" => "", 
  "product_image_3" => "" 
];
if($_SERVER["REQUEST_METHOD"]==="POST"){
require_once "./../validate.php";
if(empty($errors)){

$statement=$pdo->prepare("INSERT INTO products (product_name, product_main_image, product_desc_image_1, product_desc_image_2, product_desc_image_3, product_description, product_price,product_categorie_id)
 VALUES (:title, :image, :image1, :image2, :image3, :description, :price, :category)
 ");
 $statement->bindValue(':title', $title);
 $statement->bindValue(':image', "$imagePath");
 $statement->bindValue(':image1', "$imagePath1");
 $statement->bindValue(':image2', "$imagePath2");
 $statement->bindValue(':image3', "$imagePath3");
 $statement->bindValue(':description', $description);
 $statement->bindValue(':price', $price);
 $statement->bindValue(':category', $category);
 $statement->execute();
 header('location:index.php');
};
};

?>
<?php include_once "./../partials/header.php" ?>
<p><a href="index.php" class="btn btn-secondary">GO Back</a></p>
    <h1>ProductsCRUD</h1>
    <?php include_once "./../products/form.php" ?>
<?php include_once "./../partials/footer.php" ?>