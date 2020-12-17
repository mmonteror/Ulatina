<?php

  class Database {

    private $host  = "localhost";
    private $user  = "root";
    private $pass  = "";
    private $banco = "Project";


    public function connect() {
      try {
        $pdo = new PDO("mysql:host=$this->host;dbname=$this->banco", $this->user, $this->pass);
      } catch( PDOException $e ) {
        $e->getMessage();
      }

      return $pdo;
    }


    public function sessionStart() {
      session_start();

      if( empty($_SESSION['email']) || empty($_SESSION['senha']) ) {
        header("Location: ../.");
      }
    }

    public function login() {
      $pdo = $this->connect();
      $email = $_POST['email'];
      $senha = md5($_POST['senha']);

      $cliente = $pdo->prepare("SELECT * FROM cliente WHERE email=:email and senha=:senha");
      $cliente->bindValue(':email', $email);
      $cliente->bindValue(':senha', $senha);
      $cliente->execute();
      $rowCliente = $cliente->rowCount();
      $dadosCliente = $cliente->fetchAll(PDO::FETCH_ASSOC);

      $funcionario = $pdo->prepare("SELECT * FROM funcionario WHERE email=:email and senha=:senha");
      $funcionario->bindValue(':email', $email);
      $funcionario->bindValue(':senha', $senha);
      $funcionario->execute();
      $rowFuncionario = $funcionario->rowCount();


      if( $rowCliente > 0 ) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['id'] = $dadosCliente[0]['id'];

        header("Location: ../.");

      } else if( $rowFuncionario > 0 ) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header("Location: ../dashboard");
        
      } else {
        echo "<script>
        alert('Invalid username or password, try again!');
        window.location.href = '../../index.php';
        </script>";
      }
    }

  }

?>