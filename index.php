<?php
      ob_start();
    
    require_once("./Model/pdo.php");

    $resultat = $dbPDO->prepare("SELECT * FROM professeurs INNER JOIN matiere ON professeurs.id_matiere=matiere.id INNER JOIN classes ON professeurs.id_classe=classes.id");
    $resultat->execute();

    $professeurs=$resultat->fetchAll();

    echo "<ul>";

    foreach ($professeurs as $professeur){
      echo "<li>".$professeur["prenom"]." ".$professeur["nom"]." ".$professeur["lib"]." ".$professeur["libelle"]."</li>";
    }

    echo "</ul>";


?>

<form action="./Views/nouvelle_matiere.php" method="post">
        
      Libelle : <input type="text" name="libelle" />
            
      <input type="submit" value="Valider" />
</form>

<form action="./Views/nouvel_etudiant.php" method="post">
        
      Prénom : <input type="text" name="prenom" />
      Nom : <input type="text" name="nom" />
            
      <input type="submit" value="Valider" />
</form>

<?php $content = ob_get_clean(); ?>

<?php require('../inc/template.php'); ?>