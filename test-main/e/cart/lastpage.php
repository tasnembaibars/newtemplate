<?php require"config.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
 <?php if(isset($_GET['a'])):

$order_id='1';
// $_GET['a'];
var_dump($order_id);

$up="INSERT INTO  orders(order_id,order_user_name,order_details,order_location,order_date,order_total,order_status) VALUES('$order_id','$user_name','$product_quantity','$user_location','$order_date','$sum','$order_status') ";

$statment=$pdoconnect->prepare($up);
$statment->execute();

endif;  ?>
 <div class="container">
<center><h4 style="color:#220901;font-size:40px;  margin:10% auto   ">your order has been placed successfully</h4></center>
<img src = "image/box.png" width = "200px" class=" mx-auto d-block" >

<div class="section"> 
			 
			<div class="container">
      <?php 
       try {


     $orders = $pdoconnect->prepare('SELECT * FROM orders');
      $orders->execute();
      $products = $orders->fetchAll(PDO::FETCH_ASSOC);
       } catch(PDOExeption $err){
        echo $err->getMessage();
      }
      ?>
      
  
  <?php foreach($products as $order ): ?>
<table class="table" style="margin:5% auto">
  <thead>
    <tr>
     
      <th scope="col">Order number</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><?php echo $order['order_id'] ; ?></td>
      <td><?php echo $order['order_location'] ; ?></td>
      <td> <?php echo $order['order_status']  ;?></td>
      <td><i class="fas fa-shipping-fast"></i> </td>
    </tr>
  
  </tbody>
</table>
<?php   break; ?>
<?php endforeach; ?>
</div></div>
<form action="drop.php" method="GET">
<a href="lastpage.php">
    <button type="submit" class="btn btn-danger" style=" background-color:  #660708; width:260px;border-color:#660708; ">Back to shop</button>
    </a></form>
  </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>