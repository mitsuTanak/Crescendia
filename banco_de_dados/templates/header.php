<?php

  include_once("config/url.php");
  include_once("config/process.php");

  // limpa a mensagem
  if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de clientes</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body style="background: #240140;">
<header>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background: #262626;">
  <a class="navbar-brand" href="<?= $BASE_URL ?>index.php" style="padding-left: 50px;">
  <img src="<?= $BASE_URL ?>img/logo2.png" alt="Agenda" style="width: 80px;">
  </a>


  <div class="navbar-nav ml-auto">
  <a class="nav-link active font-weight-bold h5 ml-4 mr-4" id="home-link" href="<?= $BASE_URL ?>index.php">Início</a>
  <a class="nav-link active font-weight-bold h5 ml-4 mr-4" href="<?= $BASE_URL ?>create.php">Adicionar Cliente</a>
  <a class="nav-link active font-weight-bold h5 ml-4 mr-4" id="home-link2" href="<?= $BASE_URL ?>../index.html">Home</a>
</div>

  </nav>
</header>

