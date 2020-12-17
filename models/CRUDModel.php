<?php


  class CRUD extends Database {


    public function delete( $id, $table, $redirectPage ) {
      echo "<script>confirm('Tem certeza que deseja apagar esse registro?')</script>";
      $pdo = parent::connect();
      $sql = $pdo->prepare("DELETE FROM $table WHERE id=:id");
      $sql->bindValue(':id', $id);
      $sql->execute();

      $message = 'Deleted!';
      header("Location: ../../" . $redirectPage . ".php?message={$message}");
    }


    public function userType( $table ) {

      if( !empty($_SESSION['email']) || !empty($_SESSION['senha']) ) {
        $pdo = parent::connect();
        $user = $pdo->prepare("SELECT * FROM $table WHERE email=:email and senha=:senha");

        $user->bindValue(':email', $_SESSION['email']);
        $user->bindValue(':senha', $_SESSION['senha']);
        $user->execute();

        $rowUser = $user->rowCount();

        return $rowUser;
      }
    }

 

    public function count( $table ) {
      $pdo = parent::connect();
      $busca = $pdo->prepare("SELECT count(*) as total FROM $table");
      $busca->execute();
      $result = $busca->fetchColumn();
      echo $result;
    }

  

    public function readAll( $table ) {
      $pdo = parent::connect();
      $busca = $pdo->prepare("SELECT * FROM $table");
      $busca->execute();

      $linha = $busca->fetchAll(PDO::FETCH_ASSOC);

      return $linha;
    }

 

    public function getById( $id, $table ) {
      $pdo = parent::connect();
      $busca = $pdo->prepare("SELECT * FROM $table WHERE ID = :id");
      $busca->bindValue(':id', $id);
      $busca->execute();

      return $busca->fetchAll(PDO::FETCH_ASSOC);
    }
  
  }

?>