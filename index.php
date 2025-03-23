<?php
    ob_start();
    
    require_once("./Model/pdo.php");

    $content = ob_get_clean();
    require("./../inc/template.php");

?>