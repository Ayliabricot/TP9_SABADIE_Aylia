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

    $content = ob_get_clean();
    require("./../inc/template.php");

?>