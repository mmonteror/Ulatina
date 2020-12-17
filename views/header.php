<?php
  include_once 'controllers/HeaderController.php';
  $header = new HeaderController();
  $name = $header->getUserName();
  $user = empty($_SESSION['email']) || empty($_SESSION['senha']) ? true : false;
?>

<div class="header-area">
  <div class="container">
    <?php $user ? include 'views/login.php' : include 'views/welcome.php'; ?>
  </div> 
</div>

<div class="site-branding-area">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="logo">
          <h1><a href="./"><img src="img/3.png"  alt="logo"></a></h1>
        </div>
      </div>


    </div>
  </div>
</div> 

<div class="mainmenu-area">
  <div class="container">
    <div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div> 
      
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About us</a></li>
          <li><a href="shop.php">Products</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
        
        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        
      </div>  
      
    </div>
  </div>
</div>
