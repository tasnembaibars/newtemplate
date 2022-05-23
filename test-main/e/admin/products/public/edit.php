<?php
/** @var pdo \PDO */
require_once "./../database.php";
require_once "./../functions.php";
$id=$_GET['id'] ?? null;
if(!$id){
    header("location: index.php");
    exit;
}

$statement=$pdo->prepare("SELECT * FROM products INNER JOIN categories ON products.product_categorie_id = categories.category_id WHERE product_id=:id");
$statement->bindValue(':id',$id);
$statement->execute();
$product=$statement->fetch(PDO::FETCH_ASSOC); //give me the data
$errors =[];
$title=$product["product_name"];
$price=$product["product_price"];
$category=$product["product_categorie_id"];
$description=$product["product_description"];
if($_SERVER["REQUEST_METHOD"]==="POST"){

  require_once "./../validate.php";

if(empty($errors)){

$statement=$pdo->prepare("UPDATE products SET product_name = :title,
                                              product_main_image = :image,
                                              product_desc_image_1 = :image1,
                                              product_desc_image_2 = :image2,
                                              product_desc_image_3 = :image3,
                                              product_description= :description,
                                              product_price = :price,
                                              product_categorie_id = :category WHERE product_id=:id");
 $statement->bindValue(':title', $title);
 $statement->bindValue('image', "$imagePath");
 $statement->bindValue('image1', "$imagePath1");
 $statement->bindValue('image2', "$imagePath2");
 $statement->bindValue('image3', "$imagePath3");
 $statement->bindValue(':description', $description);
 $statement->bindValue(':price', $price);
 $statement->bindValue(':id', $id);
 $statement->bindValue(':category', $category);
 $statement->execute();
 header('location:index.php');
};
};

?>

<?php include_once "./../partials/header.php" ?>
      <p><a href="index.php" class="btn btn-secondary">GO Back</a></p>
      
    <h1>Edit Product <b><?php echo $product["product_name"] ?></b></h1>
   <?php include_once "./../products/form.php" ?>
<?php include_once "./../partials/footer.php" ?>