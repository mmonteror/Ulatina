<div class="product-carousel">
  <?php
    include_once('controllers/GetAllController.php');
    $productsCtrl = new GetAllController();
    $products = $productsCtrl->getAll('produto');

    foreach ($products as $product) { ?>
     <div class="single-product">

       <div class="product-f-image">
        <img src="upload/<?php echo $product['image']; ?>" alt="<?php echo $product['titulo'] ?>">
        <div class="product-hover">
          <a href="product.php?id=<?php echo $product['id']; ?>" class="view-details-link">
            <i class="fa fa-link"></i> View Details
          </a>
        </div>
      </div>

      <h2>
        <a href="product.php?id=<?php echo $product['id']; ?>">
          <?php echo $product['titulo'] ?>
        </a>
      </h2>

      <div class="product-carousel-price">
        <ins> $<?php echo $product['preco'] ?></ins>
      </div>
      
    </div>

  <?php } ?>
</div>
