
<?php
require "config.php";
session_start();
require "navbar.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/templatemo.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  </head>
  <body>
  <?php
    $user_id  = (isset($_POST['user_id ']) ? $_POST['user_id '] : '');
    $user_name  = (isset($_POST['user_name ']) ? $_POST['user_name '] : '');
    $user_email   = (isset($_POST['user_email  ']) ? $_POST['user_email  '] : '');
    $user_mobile  = (isset($_POST['user_mobile ']) ? $_POST['user_mobile '] : '');
    $user_location  = (isset($_POST['user_location ']) ? $_POST['user_location '] : '');
    $user_address = (isset($_POST['user_address ']) ? $_POST['user_address '] : '');


    try {
        $statement = $db->prepare("SELECT users.user_name, users.user_id, users.user_location, users.user_address, users.user_mobile ,user_email ,cart.product_quantity 
       FROM users LEFT JOIN cart  ON (users.user_id =cart.user_f_id) WHERE users.user_id= 33 ");
        $statement->execute();
        $orders = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOExeption $err) {
        echo $err->getMessage();
    }


    ?>
 
  <div class="card my-5 ms-5" style="width: 35rem;">
 
  <div class="card-header">
  <h3>Checkout details</h3>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <!-- Start Script -->
 <script src="assets/js/jquery-1.11.0.min.js"></script>
 <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
 <script src="assets/js/bootstrap.bundle.min.js"></script>
 <script src="assets/js/templatemo.js"></script>
 <script src="assets/js/custom.js"></script>

 <!-- End Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php include "footer.php" ?>