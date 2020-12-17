<?php 
  $title = "Project - admin";
  $page = 'home';
  include_once '../config.php';
  include_once 'views/header.php';
  get_file('controllers/CountController');
  $count = new CountController();
?>

<body>

  <div id="wrapper">
    <?php include 'views/navbar.php'; ?>

    <div id="page-wrapper">

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              <small>General information</small>
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $count->allItens('produto'); ?></div>
                    <div>Products</div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                  Products
                </h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <?php include 'views/product/user-head.php'; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include 'views/product/all-products.php'; ?>
                    </tbody>
                  </table>
                  <a href="./product.php">
                    See all products <i class="fa fa-arrow-circle-right"></i>
                  </a>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $count->allItens('cliente'); ?></div>
                    <div>Customers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-red">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <i class="fa fa-user fa-fw"></i> 
                  Customers
                </h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <?php include 'views/client/user-head.php'; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include 'views/client/all-clients.php'; ?>
                    </tbody>
                  </table>
                  <a href="./client.php">
                    See all customers<i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>

          </div> <!-- /.Client -->

          <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $count->allItens('funcionario'); ?></div>
                    <div>Employees</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-green">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <i class="fa fa-user fa-fw"></i> 
                  Employees
                </h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <?php include 'views/employe/user-head.php'; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include 'views/employe/all-employes.php'; ?>
                    </tbody>
                  </table>
                  <a href="./employe.php">
                    See al employees <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-12">
            <?php include 'views/message.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'views/footer.php'; ?>
