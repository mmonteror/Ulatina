<?php
  get_file('controllers/GetByIdController');
  $ProductCtrl = new GetByIdController();
  $productArray = $ProductCtrl->getById($_GET['id'], 'produto');
  $productEdit = $productArray[0];
?>

<form class="form-horizontal" action="../controllers/product/UpdateController.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label class="col-sm-3 control-label">ID</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="id" value="<?php echo $productEdit['id']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Title</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="titulo" value="<?php echo $productEdit['titulo']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Type</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="genero"  value="<?php echo $productEdit['genero']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Price</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="preco" value="<?php echo $productEdit['preco']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Date Available</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="lancamento"  value="<?php echo $productEdit['lancamento']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Language</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="audio"  value="<?php echo $productEdit['audio']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Short Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="legenda" value="<?php echo $productEdit['legenda']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Size</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="tamanho" value="<?php echo $productEdit['tamanho']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Quantity</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="quantidade" value="<?php echo $productEdit['quantidade']; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <label>Picture</label>
      <input type="file" name="image">
      <p class="help-block"></p>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Update</button>
    </div>
  </div>

</form>
