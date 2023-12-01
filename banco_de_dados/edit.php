<div class="container">

<h1 id="main-title">Editar Usuário</h1>
<form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">  <!-- </form> -->
<input type="hidden" name="type" value="edit">
</div>

<input type="hidden" name="id" value="<?= $contact['id'] ?>">

<div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $contact['name'] ?>" required>
</div>

<div class="form-group">
    <label for="name">Email:</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" value="<?= $contact['email'] ?>" required>
</div>

<div class="form-group">
    <label for="PHONE">Telefone:</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact['phone'] ?>" required>
</div>
<div class="form-group">
    <label for="">Senha:</label>
    <input type="text" class="form-control" id="password" name="password" placeholder="Insira a senha" rows="3"<?= $contact['password'] ?>"></textarea>
</div>

<button type="submit" class="btn btn-primary">Atualizar</button>

</form>
</div>