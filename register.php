<?php 
  $title = 'NG - Cadastro';
  include_once('config.php');
  include_once('views/head.php');
?>
<body>

  <?php include_once('views/header.php'); ?>

  <header>
    <h2 class="big-title">Registration</h2>
  </header>


  <div class="container">
    
    
    <div class="well well-sm form-contact">
      <form class="form-horizontal" action="./controllers/client/RegisterController.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label class="col-sm-3 control-label">Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="nome" placeholder="Name" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Last Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="sobrenome" placeholder="Last Name" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" name="senha" placeholder="Password" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Address</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="endereco" placeholder="Address">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">City</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cidade" placeholder="City" required>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-3 control-label">Phone</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="telefone" minlength="9" placeholder="Phone">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <div class="checkbox">
              <label>
                <input type="checkbox" required> Accept terms and conditions
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-success">Register</button>
          </div>
        </div>

         <?php
          if( !empty( $_REQUEST['message'] ) ) { ?>

            <div class="alert alert-info" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $_REQUEST['message']; ?>
            </div>

        <?php } ?>

      </form>
    </div>

 

  </div>

<?php include_once('views/footer.php'); ?>
