<?php

  class Client extends CRUD {
    public function insert() {
      $pdo = parent::connect();

      $nome =      $_POST['nome'];
      $sobrenome = $_POST['sobrenome'];
      $email =     $_POST['email'];
      $senha =     md5($_POST['senha']);
      $endereco =  $_POST['endereco'];
      $cidade =    $_POST['cidade'];
      $cpf =       $_POST['cpf'];
      $cep =       $_POST['cep'];
      $telefone =  $_POST['telefone'];

      $validar = $pdo->prepare("SELECT * FROM cliente WHERE email=:email");
      $validar->bindValue(':email', $email);
      $validar->execute();

      if( $validar->rowCount() == 0 ):
        $sql = $pdo->prepare("INSERT INTO cliente(nome, sobrenome, email, senha, endereco, cidade, cpf, cep, telefone)VALUES(:nome, :sobrenome, :email, :senha, :endereco, :cidade, :cpf, :cep, :telefone)");

        $sql->bindValue(':nome',      $nome);
        $sql->bindValue(':sobrenome', $sobrenome);
        $sql->bindValue(':email',     $email);
        $sql->bindValue(':senha',     $senha);
        $sql->bindValue(':endereco',  $endereco);
        $sql->bindValue(':cidade',    $cidade);
        $sql->bindValue(':cpf' ,      $cpf);
        $sql->bindValue(':cep',       $cep);
        $sql->bindValue(':telefone',  $telefone);

        $sql->execute();
        $message = 'Successfull registration!';
        header("Location: ../../register.php?message={$message}");
      else:
        $message = 'This email already exists!';
        header("Location: ../../register.php?message={$message}");
      endif;
    }


    public function update() {
      $pdo = parent::connect();

      $id =        $_POST['id'];
      $nome =      $_POST['nome'];
      $sobrenome = $_POST['sobrenome'];
      $email =     $_POST['email'];
      $senha =     md5($_POST['senha']);
      $endereco =  $_POST['endereco'];
      $cidade =    $_POST['cidade'];
      $cpf =       $_POST['cpf'];
      $cep =       $_POST['cep'];
      $telefone =  $_POST['telefone'];

      if( !empty( $nome ) ) {
        $sql = $pdo->prepare("UPDATE cliente SET nome=:nome WHERE id=:id");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $sobrenome ) ) {
        $sql = $pdo->prepare("UPDATE cliente SET sobrenome=:sobrenome WHERE id=:id");
        $sql->bindValue(':sobrenome', $sobrenome);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $email ) ) {
        $sql = $pdo->prepare("UPDATE cliente SET email=:email WHERE id=:id");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $_POST['senha'] ) ) {
        $sql = $pdo->prepare("UPDATE cliente SET senha=:senha WHERE id=:id");
        $sql->bindValue(':senha', $senha);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $endereco ) ) {
        $sql = $pdo->prepare("UPDATE cliente SET endereco=:endereco WHERE id=:id");
        $sql->bindValue(':endereco', $endereco);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $cidade ) ) {
        $sql = $pdo->prepare("UPDATE cliente SET cidade=:cidade WHERE id=:id");
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $cpf ) ) {
        $sql = $pdo->prepare("UPDATE cliente SET cpf=:cpf WHERE id=:id");
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $cep ) ) {
        $sql = $pdo->prepare("UPDATE cliente SET cep=:cep WHERE id=:id");
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $telefone ) ) {
        $sql = $pdo->prepare("UPDATE cliente SET telefone=:telefone WHERE id=:id");
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }


      $message = 'Usuário atualizado com sucesso!';
      header("Location: ../../dashboard/client.php?message={$message}");
    }

    public function getLoggedUser() {
      if( !empty($_SESSION['email']) || !empty($_SESSION['senha']) ):
        $pdo = parent::connect();

        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];


        $sql = $pdo->prepare("SELECT * FROM cliente WHERE email=:email and senha=:senha");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        $currentUser = $sql->fetchAll(PDO::FETCH_ASSOC);

        if( !empty( $currentUser ) ) {
          return $currentUser;
        } else {
          $employe = new Employe;
          return $employe->getLoggedUser();
        }

      endif;
    }

    public function loggedUserName() {
      $user = $this->getLoggedUser();
      return $user[0]['nome'];
    }

  }

?>