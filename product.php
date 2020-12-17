<?php
  include_once('config.php');
  include_once 'controllers/GetByIdController.php';
  $ProductCtrl = new GetByIdController();
  $productArray = $ProductCtrl->getById($_GET['id'], 'produto');

  foreach ($productArray as $currProduct) {
    $title = 'NG - ' . $currProduct['titulo'];
  }
  include_once 'views/head.php';
?>
<body>

  <?php include_once 'views/header.php'; ?>

  <header>
    <?php foreach ($productArray as $currProduct) { ?>
      <h2 class="big-title">
        <?php echo $currProduct['titulo'] ;?>
      </h2>
    <?php } ?>
  </header>


  <div class="container">

    <?php foreach ($productArray as $currProduct) { 

    ?>

       <div class="col-sm-6">
         <div class="product-main-img">
           <img src="upload/<?php echo $currProduct['image']; ?>" width="450px" alt="<?php echo $currProduct['titulo']; ?>">
         </div>
       </div>

       <div class="col-sm-6">

        <div class="product-inner-price">
         <span>Price: $ </span><ins><?php echo $currProduct['preco']; ?></ins>
        </div>
        <a class="add_to_cart_button" href="controllers/buy/AddCartController.php?id=<?php echo $currProduct['id']; ?>">Add to cart</a>

        <!--- prod-infos -->
        <ul class="prod-infos">

          <li>
            <h4 class="infos">Title:</h4>
            <span class="infos-value"><?php echo $currProduct['titulo']; ?></span>
          </li>

          <li>
            <h4 class="infos">Type: </h4>
            <span class="infos-value"><?php echo $currProduct['genero']; ?></span>
          </li>

          <li>
            <h4 class="infos">Data Available: </h4>
            <span class="infos-value"><?php echo $currProduct['lancamento']; ?></span>
          </li>

          <li>
            <h4 class="infos">Language: </h4>
            <span class="infos-value"><?php echo $currProduct['audio']; ?></span>
          </li>

          <li>
            <h4 class="infos">Short Name: </h4>
            <span class="infos-value"><?php echo $currProduct['legenda']; ?></span>
          </li>

          <li>
            <h4 class="infos">Size: </h4>
            <span class="infos-value"><?php echo $currProduct['tamanho']; ?></span>
          </li>

          <li>
            <h4 class="infos">Quantity: </h4>
            <span class="infos-value"><?php echo $currProduct['quantidade']; ?></span>
          </li>

        </ul> 
          
      </div>

    <?php } ?>


  </div>


<?php include_once 'views/footer.php'; ?>
