<?php
      ob_start();
    
    require_once("../Model/pdo.php");

    $id=$_GET["id"];
    $resultat = $dbPDO->prepare("SELECT * FROM etudiants WHERE id=:id");
    $resultat->execute([
      "id"=>$_GET["id"]
    ]);

    $etudiants=$resultat->fetchAll();
    foreach($etudiants as $etudiant){
      $modifier=$etudiant;
    }
?>

<h3>Nouvel étudiant : </h3>
<form action="../index.php" method="post">
    
  Prénom : <input type="text" name="prenom" value="<?= $_POST['prenom'] ?? $modifier['prenom'] ?>" />
  Nom : <input type="text" name="nom" value="<?= $_POST['nom'] ?? $modifier['nom'] ?>" />
    
  <input type="submit" value="Valider" />
</form>

<?php $content = ob_get_clean(); ?>

<?php require('../template.php'); ?>