<?php
  get_file('controllers/GetByIdController');
  $clientCtrl = new GetByIdController();
  $clientArray = $clientCtrl->getById($_GET['id'], 'cliente');
  $clientEdit = $clientArray[0];
?>

<form class="form-horizontal" action="../controllers/client/UpdateController.php" method="post" enctype="multipart/form-data">

  <div class="form-group invisible">
    <label class="col-sm-3 control-label">id</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="id" placeholder="id" value="<?php echo $clientEdit['id']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">nome</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="nome" placeholder="nome" value="<?php echo $clientEdit['nome']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">sobrenome</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="sobrenome" placeholder="sobrenome" value="<?php echo $clientEdit['sobrenome']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">email</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $clientEdit['email']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">senha</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" name="senha" placeholder="senha">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">endereço</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="endereco" placeholder="endereço" value="<?php echo $clientEdit['endereco']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">cidade</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="cidade" placeholder="cidade" value="<?php echo $clientEdit['cidade']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">cpf</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="cpf" placeholder="cpf" value="<?php echo $clientEdit['cpf']; ?>" maxlength="11" minlength="11">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">cep</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="cep" placeholder="cep" value="<?php echo $clientEdit['cep']; ?>" maxlength="8" minlength="8">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">telefone</label>
    <div class="col-sm-9">
      <input type="tel" class="form-control" name="telefone" placeholder="telefone" value="<?php echo $clientEdit['telefone']; ?>" minlength="9">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Atualizar</button>
    </div>
  </div>

</form>