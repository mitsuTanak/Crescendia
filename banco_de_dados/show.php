<?php
  include_once("templates/header.php");
?>
  <div class="container" id="view-contact-container"> 
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $contact["name"] ?></h1>
    <p class="bold">E-mail:</p>
    <p class="form-control"><?= $contact["email"] ?></p>
    <p class="bold">Telefone:</p>
    <p class="form-control"><?= $contact["phone"] ?></p>
    <p class="bold">Senha:</p>
    <p class="form-control"><?= $contact["password"] ?></p>
  </div>
<?php
  include_once("templates/footer.php");
?>
