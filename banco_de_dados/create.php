<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">

      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
      </div>

      <div class="form-group">
        <label for="phone">Email do contato:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" required>
      </div>

      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
      </div>

      <div class="form-group">
        <label for="password">Telefone do contato:</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Digite a senha" required>
      </div>

      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
