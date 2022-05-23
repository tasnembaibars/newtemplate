<?php
/** @var pdo \PDO */
require_once "./../database.php";
require_once "./../functions.php";
$id=$_GET['id'] ?? null;
if(!$id){
    header("location: index.php");
    exit;
}

$statement=$pdo->prepare("SELECT * FROM categories WHERE category_id=:id");
$statement->bindValue(':id',$id);
$statement->execute();
$product=$statement->fetch(PDO::FETCH_ASSOC); //give me the data
$errors =[];
$title=$product["category_name"];
$description=$product["category_description"];
if($_SERVER["REQUEST_METHOD"]==="POST"){

  require_once "./../validate.php";

if(empty($errors)){

$statement=$pdo->prepare("UPDATE categories SET category_name = :title,
                                              category_image = :image,
                                              category_description= :description WHERE category_id=:id");
 $statement->bindValue(':title', $title);
 $statement->bindValue('image', "$imagePath");
 $statement->bindValue(':description', $description);
 $statement->bindValue(':id', $id);
 $statement->execute();
 header('location:index.php');
};
};

?>

<?php include_once "./../partials/header.php" ?>
      <p><a href="index.php" class="btn btn-secondary">GO Back</a></p>
      
    <h1>Edit Product <b><?php echo $product["category_name"] ?></b></h1>
   <?php include_once "./../products/form.php" ?>
<?php include_once "./../partials/footer.php" ?>