<?php
/** @var pdo \PDO */
require_once "./../database.php";
$search=$_GET['search'] ?? "";
if($search){
  $statement=$pdo->prepare("SELECT * FROM categories WHERE category_name LIKE :category_name");
  $statement->bindValue(':category_name',"%$search%");
}else{
  $statement=$pdo->prepare("SELECT * FROM categories");
}
$statement->execute();
$products=$statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../assets/css/main/app.css">
    <link rel="stylesheet" href="../../assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/png">
    
    <link rel="stylesheet" href="../../assets/css/shared/iconly.css">


</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="../../index.php"><img src="../../assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item">
                <a href="../../index.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="../../products/public/index.php" class='sidebar-link'>
                    <i class="bi bi-shop"></i>
                    <span>Products</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="../../users.php" class='sidebar-link'>
                    <i class="bi bi-people"></i>
                    <span>Users</span>
                </a>
            </li>
            <li
                class="sidebar-item active">
                <a href="index.php" class='sidebar-link'>
                    <i class="bi bi-blockquote-left"></i>
                    <span>Categories</span>
                </a>
            </li>
            
               
            
            
        </ul>
    </div>
</div>
</div>
        </div>
      <div id="main">
   
    <h3><a href="../../index.php"><i class="bi bi-arrow-bar-left"></i>Go Back</a></h3>
    <h1>CategoryCRUD</h1>
    <p>
        <a href="create.php" class="btn btn-success">Create Category</a>
    </p>
  <form method="GET" action="">
  <div class="input-group mb-3">
  <input value="<?php echo $search ?>" type="text" class="form-control" placeholder="Search for Category" name="search">
  <button class="btn btn-outline-secondary" type="submit">Search</button>
</div>
  </form>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">ID</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
<?php foreach($products as $i => $product) : ?>
    <tr>
    <th scope="row"><?php echo $i +1 ?></th>
    <td>
      <img src="<?php echo $product["category_image"] ?>" alt="" class="size-img">
    </td>
    <td><?php echo $product["category_name"] ?></td>
    <td><?php echo $product["category_id"] ?></td>
    <td><?php echo $product["category_description"] ?></td>
    <td>
      <form action="edit.php" method="GET" style="display: inline-block;" >
          <input type="hidden" name="id" value="<?php echo $product["category_id"]?>">
        <button type="submit" class="btn btn-sm btn-primary">Edit</button>
        </form>
        <form action="delete.php" method="POST" style="display: inline-block;" >
          <input type="hidden" name="id" value="<?php echo $product["category_id"]?>">
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </td>
  </tr>

<?php endforeach; ?>
  </tbody>
</table>
</div>
<?php include_once "./../partials/footer.php" ?>