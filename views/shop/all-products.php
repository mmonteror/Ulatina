<?php
  
  foreach ($products as $product) { ?>

    <div class="col-md-3 col-sm-6">
      <div class="single-shop-product">
        <div class="product-upper">
          <a href="product.php?id=<?php echo $product['id']; ?>">
            <img src="upload/<?php echo $product['image'] ; ?>" alt="<?php echo $product['titulo']; ?>">
          </a>
        </div>
        <h2>
          <a href="product.php?id=<?php echo $product['id']; ?>">
           <?php echo $product['titulo']; ?>
          </a>
        </h2>
        <p class="product-carousel-price">$ <?php  echo $product['preco'] ; ?></p>  

        <div class="product-option-shop">
          <a class="add_to_cart_button" href="controllers/buy/AddCartController.php?id=<?php echo $product['id']; ?>">Add to Cart</a>
        </div>
      </div>
    </div>

<?php } ?>
