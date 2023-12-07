<?php

// Página de Criação

// Inclue o header da página
include_once("templates/header.php");
?>

<div class="container">
  <!-- Inclue o botão de voltar -->
  <?php include_once("templates/backbtn.html"); ?>

  <h1 id="main-title" style="color: #fff;">Criar contato</h1>
  <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="create">

    <!-- Campos do formulário para entrada de dados do contato -->
    <div class="form-group">
      <label for="name" style="color: #fff;">Nome do contato:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
    </div>

    <div class="form-group">
      <label for="phone" style="color: #fff;">Telefone do contato:</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
    </div>

    <div class="form-group">
      <label for="email" style="color: #fff;">E-mail:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
    </div>

    <div class="form-group">
      <label for="senha" style="color: #fff;">Senha:</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
    </div>

    <div class="form-group">
      <label for="observations" style="color: #fff;">Observações:</label>
      <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"></textarea>
    </div>

    <!-- Botão para submeter o formulário -->
    <button type="submit" class="btn" style="background: #B26DFC; color: #fff; border: none;">
      Cadastrar
    </button>
  </form>

</div>

<?php
// Inclue o footer da página
include_once("templates/footer.php");
?>
