<?php
require "config.php";session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>




	<body>
    <?php 
    $user_id  = (isset($_POST['user_id ']) ? $_POST['user_id '] : '');
    $user_name  = (isset($_POST['user_name ']) ? $_POST['user_name '] : '');
    $user_email   = (isset($_POST['user_email  ']) ? $_POST['user_email  '] : '');
    $user_mobile  = (isset($_POST['user_mobile ']) ? $_POST['user_mobile '] : '');
    $user_location  = (isset($_POST['user_location ']) ? $_POST['user_location '] : '');
    $user_address=(isset($_POST['user_address ']) ? $_POST['user_address '] : '');
  

   try {
    $statement = $pdoconnect->prepare("SELECT * FROM users  JOIN cart  ON (users.user_id =cart.user_f_id) JOIN  products ON (users.user_id =products.product_id) ");
    $statement->execute();
    $orders = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOExeption $err) {
    echo $err->getMessage();
}
    
    
    ?> 
		

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
      
 
   <?php foreach($orders as $order ): ?>
    <form action="" method="post">
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
      
					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
                           
						 <div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name" value=" <?php echo $order['user_name'] ; ?>">
							</div> 
                           
					
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" value=" <?php echo $order['user_email'] ; ?>">
							</div>
							 <div class="form-group">
                              
								<input class="input" type="text" name="address" placeholder="address" value="<?php echo $order['user_address'] ; ?>" > 
                                
                                
							</div>
						
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country" value=" <?php echo $order['user_location'] ; ?>">
							</div>
							
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone" value=" <?php echo $order['user_mobile'] ; ?>">
							</div>
                           
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Create Account?
									</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
                         <!-- <input type="submit" value="enter your " name="a"> -->
						<!-- /Billing Details -->
                       <?php   break; ?>
                        <?php endforeach; ?>
                        
                        <?php 

 ?>
<!-- Order Details -->
<?php
$order_id  = (isset($_POST['order_id ']) ? $_POST['order_id '] : '');
$order_details  = (isset($_POST['order_details ']) ? $_POST['order_details '] : '');
$order_location  = (isset($_POST['order_location ']) ? $_POST['order_location '] : '');
$order_mobile  = (isset($_POST['order_mobile ']) ? $_POST['order_mobile '] : '');
$order_user_name  = (isset($_POST['order_user_name ']) ? $_POST['order_user_name '] : '');
$order_date  = (isset($_POST['order_date ']) ? $_POST['order_date '] : '');
$order_total  = (isset($_POST['order_total ']) ? $_POST['order_total '] : '');
$order_status  = (isset($_POST['order_status ']) ? $_POST['order_status '] : '');
$order_user_id   = (isset($_POST['order_user_id  ']) ? $_POST['order_user_id  '] : '');
$grand_total   = (isset($_POST['grand_total  ']) ? $_POST['grand_total  '] : '');
 $sum   = (isset($_SESSION['sum  ']) ? $_SESSION['sum  '] : '');
try {


$orders = $pdoconnect->prepare('SELECT * FROM users  JOIN cart  ON (users.user_id =cart.user_f_id) JOIN  products ON (users.user_id =products.product_id)')  ;
$orders->execute();
$products = $orders->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOExeption $err){
echo $err->getMessage();
}

?>
<?php foreach($products as $order ): ?>

						<!-- Order notes -->
						
						<!-- /Order notes -->
					</div>
                   
					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>Order</strong></div>
								<div><strong>Detail</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div> Order ID : </div>
                                 
									<div><?php echo $order['user_id'] ; ?></div>
								</div>
								<div class="order-col">
									<div> Order by:</div>
                                 
									<div> <?php echo $order['user_name']; ?> </div>
								</div>
								<div class="order-col">
									<div> Quantity ordered:</div>
                                 
									<div> <?php echo $order['product_quantity']; ?> </div>
								</div>
								
								<div class="order-col">
									<div>Address : </div>
                                 
									<div><?php echo $order['user_location'] ; ?></div>
								</div>
								<!-- <div class="order-col">
									<div>Date : </div>
                                 
									<div> <?php echo $order['order_date'] ; ?></div>
								</div> -->
								<div class="order-col">
									<div>Total Amount: </div>
                                 
									<div>$<?php   echo $_SESSION['sum']; ?></div>
								</div>
								<div class="order-col">
									<div>Delivery : </div>
                                 
									<div >$<?php  echo 3; ?></div>
								</div>
								
								
							</div>
						
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total" style="color:  #660708;">$<?php echo (INT)$_SESSION['sum']+3; ?></strong></div>
							</div>
						</div>
						<div class="payment-method">
							
							
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3" required>
								<label for="payment-3">
									<span></span>
									cash on delivary
								</label>
								<div class="caption">
									<p>we only support cash on delivary payment.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						
                       <div>
						   <form  method="GET">
						   <button  class="primary-btn" style="background-color: #660708;" type="submit" name="a"value="<?php echo $order['user_id'];?>" ><a href="lastpage.php"style="text-decoration: none;color:white;">SubmiT</a></button>
						   </form>
						
						</div> 
					   <!-- <a href="lastpage.php"  style="text-decoration: none;color:white;"></a>  -->
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
        <?php   break; ?>
<?php endforeach; ?>
</form>
		

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
