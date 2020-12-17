<?php


  class Support extends CRUD {

    public function insert() {
      $pdo = parent::connect();

      $id_message = $_POST['id'];
      $response   = $_POST['response'];

      $sql = $pdo->prepare("INSERT INTO responsesupport(id_message, response)VALUES(:id_message, :response)");

      $sql->bindValue(':id_message', $id_message);
      $sql->bindValue(':response',   $response);
      $sql->execute();

      $message = 'Chamado respondido com sucesso!';
      header("Location: ../../dashboard/index.php?message={$message}");
    }

  }

?>