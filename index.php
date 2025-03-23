<?php
    ob_start();
    
    require_once("./Model/pdo.php");

    $resultat = $dbPDO->prepare("SELECT * FROM etudiants");
    $resultat->execute();

    $etudiants=$resultat->fetchAll();

    echo "<ul>";

    foreach ($etudiants as $etudiant){
      echo "<li>".$etudiant["nom"]." ".$etudiant["prenom"]."</li>";
    }

    echo "</ul>";

    $content = ob_get_clean();
    require("./../inc/template.php");

?>