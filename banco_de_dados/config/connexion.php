<?php

// Define as credenciais de conexão ao banco
$host = "localhost"; 
$dbname = "clientes";
$user = "root";
$pass = "";

try {

  // Cria uma nova conexão PDO (PHP Data Objects. É uma extensão do PHP que fornece uma interface para acessar diferentes sistemas de banco de dados.)
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

  // Ativa o modo de erros para lançar exceções  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

  // Captura erros na conexão e exibe a mensagem
  $error = $e->getMessage();
  echo "Erro: $error"; 

}