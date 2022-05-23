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
  "category_image" => "" 
];
if($_SERVER["REQUEST_METHOD"]==="POST"){
require_once "./../validate.php";
if(empty($errors)){

$statement=$pdo->prepare("INSERT INTO categories (category_name, category_image, category_description)
 VALUES (:title, :image, :description)
 ");
 $statement->bindValue(':title', $title);
 $statement->bindValue(':image', "$imagePath");
 $statement->bindValue(':description', $description);
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