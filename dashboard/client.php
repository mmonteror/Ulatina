<?php 
  $title = "NG - Clientes";
  $page = "cliente";
  include_once '../config.php';
  include_once 'views/header.php';
?>

<body>
  <div id="wrapper">
    <?php include 'views/navbar.php'; ?>
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Customers</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-red">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Customers</h3>
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
                  <?php include 'views/message.php'; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'views/footer.php'; ?>
