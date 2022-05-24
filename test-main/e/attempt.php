<?php
require "config.php";
session_start();
require "navbar.php";
$id = 33;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->

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
       FROM users LEFT JOIN cart  ON (users.user_id =cart.user_f_id) WHERE users.user_id= $id ORDER BY users.user_id desc LIMIT 1");
        $statement->execute();
        $orders = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOExeption $err) {
        echo $err->getMessage();
    }


    ?>




    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php foreach ($orders as $order) : ?>
                    <form action="" method="post">
                        <div class="card my-5 ms-5" style="width: 35rem;">

                            <div class="card-header">
                                <h3 style="color:#245152 ;">Checkout Info</h3>
                            </div>
                            <ul class="list-group list-group-flush p-3">
                                <li class="list-group-item p-3"> <span style="color:#245152 ;font-weight: 400;"> Ordered by : </span><?php echo $order['user_name']; ?> </li>
                                <li class="list-group-item p-3"><span style="color:#245152 ;font-weight: 400;">Email :</span> <?php echo $order['user_email']; ?></li>
                                <li class="list-group-item p-3"><span style="color:#245152 ;font-weight: 400;"> Location :</span><?php echo $order['user_location']; ?></li>
                                <li class="list-group-item p-3"> <span style="color:#245152 ;font-weight: 400;">Address :</span><?php echo $order['user_address']; ?></li>
                                <li class="list-group-item p-3"><span style="color:#245152 ;font-weight: 400;"> Mobile phone :</span><?php echo $order['user_mobile']; ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>

            </div>
            <div class="col-sm-4 ">
                <div class="card-header mt-5 border" >
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
                    $sum   = (isset($_SESSION['sum ']) ? $_SESSION['sum '] : '');

                    try {


                        $orders = $db->prepare("SELECT users.user_id,users.user_name,users.user_address,users.user_location,orders.order_date,cart.product_quantity FROM users
                          JOIN cart  ON users.user_id =cart.user_f_id JOIN orders ON orders.order_user_id=cart.user_f_id WHERE users.user_id=$id  ORDER BY orders.order_date desc LIMIT 1");
                        $orders->execute();
                        $products = $orders->fetchAll(PDO::FETCH_ASSOC);
                    } catch (PDOExeption $err) {
                        echo $err->getMessage();
                    }

                    ?>
                    <?php foreach ($products as $order) : ?>
                        <h4 style="color:#245152 ;">Order details</h4>
                </div>
                <ul class="list-group list-group-flush p-3 border">
                    <li class="list-group-item p-3"> <span style="color:#245152 ;font-weight: 400;"> Order ID : </span><?php echo $order['user_id']; ?> </li>
                    <li class="list-group-item p-3"><span style="color:#245152 ;font-weight: 400;">Order by:</span> <?php echo $order['user_name']; ?></li>
                    <li class="list-group-item p-3"><span style="color:#245152 ;font-weight: 400;"> Quantity ordered:</span><?php echo $order['product_quantity']; ?></li>
                    <li class="list-group-item p-3"> <span style="color:#245152 ;font-weight: 400;">Address :</span><?php echo $order['user_address'] . '-' . $order['user_location']; ?></li>
                    <li class="list-group-item p-3"><span style="color:#245152 ;font-weight: 400;"> Date :</span><?php echo $order['order_date']; ?></li>
                    <li class="list-group-item p-3"><span style="color:#245152 ;font-weight: 400;"> Total Amount:</span>$<?php echo $_SESSION['sum']; ?></li>
                    <li class="list-group-item p-3"><span style="color:#245152 ;font-weight: 400;"> Delivery:</span>$<?php echo 3; ?></li>
                    <li class="list-group-item p-3"><span style="color:#245152 ;font-weight: 400;"> TOTAL</span>$<?php echo (int)$_SESSION['sum'] + 3; ?></li>


                </ul>
                <div class="payment-method ps-1">


                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-3" required>
                        <label for="payment-3" style="color:#245152;font-weight:700;">
                            <span></span>
                            cash on delivary
                        </label>
                        <div class="caption">
                            <p style="color:black;font-size:7px">we only support cash on delivary payment.</p>
                        </div>
                    </div>
                </div>
                <div class="input-checkbox ps-1">
                    <input type="checkbox" id="terms">
                    <label for="terms" style="color:#245152">
                        <span></span>
                        I've read and accept the <a href="#" style="color:#245152">terms & conditions</a>
                    </label>
                </div>

                <div>
                    <form method="GET">
                        <button class="btn btn-outline-secondary mb-5 mt-2" style="background-color: #245152;float:left" type="submit" name="a" value="<?php echo $order['user_id']; ?>"><a href="lastpage.php" style="text-decoration: none;color:white;">Submit</a></button>
                    </form>

                </div>
                <!-- <a href="lastpage.php"  style="text-decoration: none;color:white;"></a>  -->
            </div>
        </div>

    <?php endforeach; ?>

    </div>
    </div>
    </div>

    </form>

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