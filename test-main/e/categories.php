
   
<?php 
require "config.php";
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



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">LATEST PRODUCTS</h1>
                <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Filter the Page
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="categories.php?sort=1"><option value="1"> A-Z</a>  </li>
                            <li><a class="text-decoration-none" href="categories.php?sort=3"><option value="3"> Z-A</a>  </li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        LATEST PRODUCTS
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li> <!-- aside Widget -->
					<div class="aside">
						
						<?php
						
						$sql = 'SELECT * FROM `products` ORDER BY `products`.`product_id` DESC LIMIT 3';
						$statement = $db->query($sql);
						$data = $statement->fetchAll();
						foreach ($data as $product) :

							
						?>
								<div class="product-widget">
									<div class="product-img">
										<img src="./admin/products/public/<?php echo $product['product_main_image']; ?>" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href="product.php?product_id=" .<?php echo $product['product_id']; ?>><?php echo $product['product_name']; ?></a></h3>
                                        <h4 class="product-price">Price:<?php echo $product['product_price']; ?> $</h4>
									</div>
								</div>
						<?php 
							
						endforeach ?>

					</div>
					<!-- /aside Widget --></li>
                            
                        </ul>
                    </li>
                   
</ul>
               
                
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="categories.php">Categories</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            
                            <!-- <select name='sort' class="form-control"> -->

                          
									
									
                            <!-- </select> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                    $statement='';
                    if(isset($_GET["sort"])){
                        $value=$_GET["sort"];
                    }else{
                    $value=0 ;
                }
                    if($value =='1'){
                        

                            $statement = $db->query("SELECT * FROM `categories`  ORDER BY category_name ASC");
                            
                        }
                      
                        elseif($value =='3'){
                            

                            $statement = $db->query("SELECT * FROM `categories`  ORDER BY category_name desc");
                            
                        }else{
							
                            $statement = $db->query("SELECT * FROM `categories`  ORDER BY category_name ASC");
                            
                        } ?>
                   
                  
                <?php


$data=$statement->fetchAll();

foreach($data as $value):
		?>
                   
                    
                    
                   <?php//********************?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="./admin/categorys/public/<?php echo $value['category_image'];?>">
                                
                                <a  href="shop.php?category=<?php echo $value['category_id']?>&name=<?php echo $value['category_name']?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    
                                       
                                       
                                     
                                    
                                </div> </a>
                            </div>
                            <div class="card-body">
                            <a href="shop.php?category=<?php echo $value['category_id']?>&name=<?php echo $value['category_name']?>  " class="cta-btn"> Shop now <i class="fa fa-arrow-circle-right"></i></a>
                           
                                
                                
                                
                                <p class="text-center mb-0"><?php echo $value['category_name']?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; //************* ?> 
                </div>
                
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

 
  

    <?php require "footer.php"; ?>

