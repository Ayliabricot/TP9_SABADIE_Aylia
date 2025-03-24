<?php
      ob_start();
    
    require_once("../Model/pdo.php");

    $resultat = $dbPDO->prepare("INSERT INTO etudiants(prenom,nom,classe_id) VALUES (:prenom,:nom,:classe_id)");
    $resultat->execute([
      "prenom"=>$_POST["prenom"],
      "nom"=>$_POST["nom"],
      "classe_id"=>"1"
    ]);

    echo "<br>Requête effectuée.";

?>

<form action="../index.php" method="post">
      <input type="submit" value="Valider" />
</form>

<?php $content = ob_get_clean(); ?>

<?php require('../template.php'); ?>