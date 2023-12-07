<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title" style="color: #fff;">Editar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $contact['id'] ?>">
      <div class="form-group">
        <label for="name" style="color: #fff;">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $contact['name'] ?>" required>
      </div>
      <div class="form-group">
        <label for="phone" style="color: #fff;">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact['phone'] ?>" required>
      </div>
      <div class="form-group">
        <label for="email" style="color: #fff;">Email:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" value="<?= $contact['email'] ?>" required>
      </div>
      <div class="form-group">
        <label for="email" style="color: #fff;">Senha:</label>
        <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a sua senha" value="<?= $contact['senha'] ?>" required>
      </div>
      <div class="form-group">
        <label for="observations" style="color: #fff;">Observações:</label>
        <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"><?= $contact['observations'] ?></textarea>
      </div>
      
      <button type="submit" class="btn" style="background: #B26DFC; color: #fff; border: none;">
      Atualizar
      </button>


    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
