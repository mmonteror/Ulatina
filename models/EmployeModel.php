<?php



  class Employe extends CRUD {

    public function insert() {
      $pdo = parent::connect();

      $nome =      $_POST['nome'];
      $email =     $_POST['email'];
      $senha =     md5($_POST['senha']);

      $validar = $pdo->prepare("SELECT * FROM funcionario WHERE email=:email");
      $validar->bindValue(':email', $email);
      $validar->execute();

      if( $validar->rowCount() == 0 ):
        $sql = $pdo->prepare("INSERT INTO funcionario(nome, email, senha)VALUES(:nome, :email, :senha)");

        $sql->bindValue(':nome',      $nome);
        $sql->bindValue(':email',     $email);
        $sql->bindValue(':senha',     $senha);

        $sql->execute();
        $message = 'Cadastro realizado com sucesso!';
        header("Location: ../../dashboard/employe.php?message={$message}");
      else:
        $message = 'Já existe um funcionario com este id!';
        header("Location: ../../dashboard/employe.php?message={$message}");
      endif;
    }




    public function update() {
      $pdo = parent::connect();

      $id =        $_POST['id'];
      $nome =      $_POST['nome'];
      $email =     $_POST['email'];
      $senha =     md5($_POST['senha']);

      if( !empty( $nome ) ) {
        $sql = $pdo->prepare("UPDATE funcionario SET nome=:nome WHERE id=:id");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $email ) ) {
        $sql = $pdo->prepare("UPDATE funcionario SET email=:email WHERE id=:id");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $_POST['senha'] ) ) {
        $sql = $pdo->prepare("UPDATE funcionario SET senha=:senha WHERE id=:id");
        $sql->bindValue(':senha', $senha);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      $message = 'Usuário atualizado com sucesso!';
      header("Location: ../../dashboard/employe.php?message={$message}");
    }



    public function getLoggedUser() {
      $pdo = parent::connect();
      
      $email = $_SESSION['email'];
      $senha = $_SESSION['senha'];

      $sql = $pdo->prepare("SELECT * FROM funcionario WHERE email=:email and senha=:senha");
      $sql->bindValue(':email', $email);
      $sql->bindValue(':senha', $senha);
      $sql->execute();

      $currentUser = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $currentUser;
    }

  
    public function getName() {
      $user = $this->getLoggedUser();
      return $user[0]['nome'];
    }


    public function auth() {
      parent::sessionStart();
      $user = parent::userType('funcionario');

      if( $user < 1 ) {
        header("Location: ../.");
      }
    }

  }

?>