<form class="form-horizontal" action="../controllers/product/RegisterController.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label class="col-sm-3 control-label">id</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="id"  required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Title</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="titulo"  required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Type</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="genero"  required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Price</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="preco" >
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Date Available</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="lancamento" >
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Language</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="audio" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Short Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="legenda" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Size</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="tamanho" >
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Quantity</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="quantidade" >
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
      <button type="submit" class="btn btn-success">Save</button>
    </div>
  </div>

</form>