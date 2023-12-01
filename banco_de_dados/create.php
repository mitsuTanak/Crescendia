
  <div class="container">

    <!-- Inclue o botão de voltar  -->
    <?php //include_once("templates/backbtn.html"); ?>

    <h1 id="main-title">Adicionar Usuário</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">

      <!-- Campos do formulário para entrada de dados do contato -->
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" required>
      </div>

      <div class="form-group">
        <label for="phone">Telefone:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
      </div>

      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Digite a senha" required>
      </div>



      <!-- Botão para submeter o formulário -->
      <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
  </div>