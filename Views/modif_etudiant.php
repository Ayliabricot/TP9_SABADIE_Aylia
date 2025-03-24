<?php
      ob_start();
    
    require_once("../Model/pdo.php");

    $id=$_GET["id"];

?>

<h3>Nouvel étudiant : </h3>
<form action="../index.php" method="post">
    
  Prénom : <input type="text" name="prenom" value="<?= $_POST['prenom'] ?? 'Jean' ?>" />
  Nom : <input type="text" name="nom" value="<?= $_POST['nom'] ?? 'Sérien' ?>" />
    
  <input type="submit" value="Valider" />
</form>

<?php $content = ob_get_clean(); ?>

<?php require('../template.php'); ?>