<?php 
  $title = 'Projecto';
  include_once('config.php');
  include_once('views/head.php');
?>
<body>
  <?php include_once('views/header.php'); ?>
  <?php include_once('views/home/slider.php'); ?>

  <div class="maincontent-area">
    <div class="container latest-product">

      <h1 class="section-title">Products</h1>
      <?php include_once('views/home/latest-products.php'); ?>

    </div>
	</div>
  
<?php include_once('views/footer.php'); ?>
