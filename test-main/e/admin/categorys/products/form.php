<?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
            <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <form action=""  method="POST" enctype="multipart/form-data">
        <?php if($product['category_image']): ?>
            <img src="<?php echo $product["category_image"] ?>" alt="" class="edit-img">
                <?php endif; ?>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Image</label>
    <br>
    <input type="file" name="img">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Title</label>
    <input type="text" value="<?php echo $title?>" name="title" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Description</label>
    <textarea class="form-control" name="description"><?php echo $description?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>