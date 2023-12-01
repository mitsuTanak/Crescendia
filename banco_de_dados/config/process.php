<!-- passwordo 3.2 - Começe a programar construindo o process.php  -->

<?php

// Inicia a sessão
session_start();

// Inclui arquivos de conexão ao banco e funcionalidades
include_once("connection.php");
include_once("url.php");

// Recebe dados do formulário via POSTword
$data = $_POST;

// ___________________________________________________________________________

// MODIFICAÇÕES NO BANCO (CRUD - CREATE, READ, UPDATE, DELETE)
if(!empty($data)) {

  // Criar contato (CREATE)
  if($data["type"] === "create") {

    $name = $data["name"];
    $email = $data["email"];
    $phone = $data["phone"]; 
    $passwordword = $data["password"];

    // Query de inserção com placeholders
    $query = "INSERT INTO usuarios (name, email, phone, password) VALUES (:name, :email, :phone, :password)";
    
    // Prepara a query
    $stmt = $conn->prepare($query);  

    // Substitui placeholders

    // bindParam() é um método do objeto PDO Statement que associa uma variável PHP a um placeholder na query SQL preparada anteriormente.

    // No exemplo, a query contém o placeholder :name. Esta linha faz o bind da variável PHP $name para esse placeholder.

    // Quando a query for executada, o PDO irá substituir :name pelo valor atual de $name de forma segura, evitando SQL injection.
    $stmt->bindParam(":name", $name);

    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":password", $password);

    try {
      // Executa a query
      $stmt->execute();

      // Mensagem de sucesso
      $_SESSION["msg"] = "Usuário adicionado com sucesso!";
      
    } catch(PDOException $e) {
      // Captura erros
      $error = $e->getMessage();
      echo "Erro: $error";
    }

  //___________________________________________________________ 

  // Código para atualizar (UPDATE)
  } else if($data["type"] === "edit") {

      $name = $data["name"];
      $email = $email["email"];
      $phone = $data["phone"];
      $password = $data["password"];
      $id = $data["id"];

      // Query de atualização
      $query = "UPDATE usuarios 
                SET name = :name, email = :email, phone = :phone, password = :password;
                WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":phone", $phone);
      $stmt->bindParam(":password", $password);
      $stmt->bindParam(":id", $id);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Usuário atualizado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    //___________________________________________________________ 

    // Código para deletar (DELETE)
    } else if($data["type"] === "delete") {

      $id = $data["id"];

      // Query de remoção
      $query = "DELETE FROM usuarios WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      
      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato removido com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }

    //___________________________________________________________ 

    // Redireciona para página inicial (HOME)
    header("Location:" . $BASE_URL . "../index.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $id;

    // Código para selecionar um contato
    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Retorna o dado de um contato
    if(!empty($id)) {

      // Query de seleção
      $query = "SELECT * FROM usuarios WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $usuario = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $contacts = [];

      // Query de seleção de todos os contatos
      $query = "SELECT * FROM usuarios";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $contacts = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;
