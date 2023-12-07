<?php
  include_once("templates/header.php");
?>
  <div class="container">
  <?php if(isset($printMsg) && $printMsg != ''): ?>
  <p id="msg" style="background-color: #976df2; color: #fff; border:none; font-size:20px;font-weight:bolder;"><?= $printMsg ?></p>
  <?php endif; ?>
    <h1 id="main-title" style="color: #fff;" >Cadastro de clientes</h1>
    <?php if(count($contacts) > 0): ?>
      <table class="table" id="contacts-table">
        <thead style="background: linear-gradient(to right, rgb(72, 104, 217), rgb(172, 105, 183));">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($contacts as $contact): ?>
            <tr>
            <td scope="row" class="col-id" style="color: #fff;"><?= $contact["id"] ?></td>
            <td scope="row" style="color: #fff;"><?= $contact["name"] ?></td>
            <td scope="row" style="color: #fff;"><?= $contact["phone"] ?></td>
            <td scope="row" style="color: #fff;"><?= $contact["email"] ?></td>
            <td scope="row" class="senha-cell" style="color: #fff;">
  <?= $contact["senha"] ?>
</td>

<script>
  // Função para ocultar os caracteres da senha
  function hidePasswords() {
    var senhaCells = document.querySelectorAll('.senha-cell');
    senhaCells.forEach(function(senhaCell) {
      senhaCell.textContent = '*'.repeat(senhaCell.textContent.length);
    });
  }

  // Chama a função para ocultar os caracteres ao carregar a página
  document.addEventListener('DOMContentLoaded', hidePasswords);
</script>

              <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>">
                <i class="far fa-edit edit-icon" style="color: #976df2;"></i>
                </a>
                
                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>  
      <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>
