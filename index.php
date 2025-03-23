<?php
    ob_start();
    
    require_once("./Model/pdo.php");

    $resultat = $dbPDO->prepare("SELECT * FROM classes");
    $resultat->execute();

    $classes=$resultat->fetchAll();

    echo "<ul>";

    foreach ($classes as $classe){
      echo "<li>".$classe["libelle"]."</li>";
    }

    echo "</ul>";

    $content = ob_get_clean();
    require("./../inc/template.php");

?>