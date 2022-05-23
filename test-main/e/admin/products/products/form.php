<?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
            <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <form action=""  method="POST" enctype="multipart/form-data">
        <?php if($product['product_main_image']): ?>
            <img src="<?php echo $product["product_main_image"] ?>" alt="" class="edit-img">
                <?php endif; ?>
                <?php if($product['product_desc_image_1']): ?>
            <img src="<?php echo $product["product_desc_image_1"] ?>" alt="" class="edit-img">
                <?php endif; ?>
                <?php if($product['product_desc_image_2']): ?>
            <img src="<?php echo $product["product_desc_image_2"] ?>" alt="" class="edit-img">
                <?php endif; ?>
                <?php if($product['product_desc_image_3']): ?>
            <img src="<?php echo $product["product_desc_image_3"] ?>" alt="" class="edit-img">
                <?php endif; ?>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Images</label>
    <hr class="my-2">
    <input type="file" name="img">
    <hr class="my-2">
    <input type="file" name="img1">
    <hr class="my-2">
    <input type="file" name="img2">
    <hr class="my-2">
    <input type="file" name="img3">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Title</label>
    <input type="text" value="<?php echo $title?>" name="title" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Description</label>
    <textarea class="form-control" name="description"><?php echo $description?></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Price</label>
    <input type="number" step=".01" value="<?php echo $price?>" class="form-control" name="price">
  </div>
  <div class="mb-3">
  <label for="CatId">Category ID</label>
      <select value="<?php $category ?>" name="category" id="CatId">
      <?php $sql='SELECT * FROM categories';
$statement=$pdo->query($sql);
$data=$statement->fetchAll();
foreach($data as $value): ?>
        <option value="<?php echo $value['category_id']?>"><?php echo $value['category_name']?></option>
       
        <?php endforeach; ?>
      </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>