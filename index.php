<?php
    ob_start();
    
    require_once("./Model/pdo.php");

    $resultat = $dbPDO->prepare("SELECT * FROM professeurs");
    $resultat->execute();

    $professeurs=$resultat->fetchAll();

    echo "<ul>";

    foreach ($professeurs as $professeur){
      echo "<li>".$professeur["prenom"]." ".$professeur["nom"]."</li>";
    }

    echo "</ul>";

    $content = ob_get_clean();
    require("./../inc/template.php");

?>