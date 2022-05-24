<?php require "config.php";
require "navbar.php";
?>








<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-success text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>



<!-- Start Banner Hero -->
<div id="template-mo-Animall-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-Animall-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-Animall-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-Animall-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="background-color: #fcfdfd9e;">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last mt-5">
                        <img class="img-fluid1" src="images/image1.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>Animall</b><span style="font-size:35px ;"> store</span></h1>
                            <h3 class="h2">“You want a friend in life? Get a dog.”</h3>
                            <p>
                                Dogs are just natural comedians. They are clumsy, messy, playful balls of joy wrapped up in fur and wiggly butts. So, with that in mind, we’ve gone ahead and compiled a list of hilariously appropriate funny dog quotes to make you smile almost as much as your dog makes you smile.<a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank"></a>,
                                <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank"></a>
                                <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank"></a>
                            </p>
                            <div> <button style="border:1px solid  white;width:160px;margin:1% auto;"><a href="categories.php" style="text-decoration: none;color:#5a7578;font-size:35px;"> Shop now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid1" src="images/image2 (1).png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Pets are there for a reason</h1>
                            <h3 class="h2">Have a loyal friend</h3>
                            <p>
                                “There’s a saying. If you want someone to love you<strong> forever</strong> , buy a dog, feed it and keep it around.”
                            </p>
                            <div> <button style="border:1px solid  white;width:160px;margin:1% auto;"><a href="categories.php" style="text-decoration: none;color:#5a7578;font-size:35px;"> Shop now</a></button></div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid1" src="images/imageslider.png" alt="" >
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1 text-success"><b>Animall</b><span style="font-size:35px ;"> store</span></h1>
                            <h3 class="h2">Here to help you finding your pet. </h3>
                            <p>
                                “Until one has loved an animal, a part of one's soul remains unawakened.”
                            </p>
                            <div> <button style="border:1px solid  white;width:160px;margin:1% auto;"><a href="categories.php" style="text-decoration: none;color:#5a7578;font-size:35px;"> Shop now</a></button></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-Animall-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-Animall-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories </h1>
            <p>
            A lot can be overlooked when it comes to emotions.
            </p>
        </div>
    </div>

    <div class="row">
        <?php
        $sql = 'SELECT * FROM categories LIMIT 3';
        $statement = $db->query($sql);
        $data = $statement->fetchAll();

        foreach ($data as $value) :
        ?>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="shop.php"><img src="./admin/categorys/public/<?php echo $value['category_image'];?>" class="rounded-circle img-fluid2 border" ></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $value['category_name'] ?></h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- End Categories of The Month -->


<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">New Pets added to store</h1>
                <p>
                What we do is frequently get more pets you would be overwhelmed with.
                </p>
            </div>
        </div>
        <div class="row">
            <!-- *****************New Products ****************** -->
            <?php $select = "SELECT  categories.category_name,products.product_main_image,products.product_price,products.product_description,products.product_name,products.product_id 
									FROM products LEFT JOIN categories ON categories.category_id = product_categorie_id ORDER BY products.product_id DESC LIMIT 3";
            $fromd = $db->prepare($select);
            $fromd->execute();
            $shwwl = $fromd->fetchAll();
            foreach ($shwwl as $value) :

            ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.php">
                            <img src="./admin/products/public/<?php echo $value['product_main_image']; ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$<?php echo $value['product_price']; ?></li>
                                <li class="text-muted text-right" ><?php echo $value['category_name']; ?></li>
                            </ul>
                            <a href="shop-single.php" class="h2 text-decoration-none text-dark" ><a href="#" ><?php echo $value['product_name']; ?></a>
                                <p class="card-text">
                                    <?php echo $value['product_description']; ?>
                                </p>
                                <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- End Featured Product -->


<?php require "footer.php"; ?>