<?php


  class Message extends CRUD {


    public function insert() {
      $pdo = parent::connect();

      $nome =      $_POST['nome'];
      $email =     $_POST['email'];
      $mensagem =  $_POST['mensagem'];

      $sql = $pdo->prepare("INSERT INTO mensagem(nome, email, mensagem)VALUES(:nome, :email, :mensagem)");

      $sql->bindValue(':nome',      $nome);
      $sql->bindValue(':email',     $email);
      $sql->bindValue(':mensagem',     $mensagem);
      $sql->execute();

      $message = 'Mensagem enviada com sucesso!';
      header("Location: ../../contact.php?message={$message}");
    }

  }

?>