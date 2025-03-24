<?php
      ob_start();
    
    require_once("../Model/pdo.php");

    $resultat = $dbPDO->prepare("INSERT INTO matiere(lib) VALUES (:lib)");
    $resultat->execute([
      "lib"=>$_POST["libelle"]
    ]);

    echo "<br>Requête effectuée.";

?>

<form action="../index.php" method="post">
      <input type="submit" value="Valider" />
</form>

<?php $content = ob_get_clean(); ?>

<?php 
  $deep=True;
  require($path.'../../inc/template.php'); ?>