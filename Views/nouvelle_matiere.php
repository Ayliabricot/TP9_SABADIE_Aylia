<?php
      ob_start();
    
    require_once("../Model/pdo.php");



    echo "<br>Requête effectuée.";

?>

<?php $content = ob_get_clean(); ?>


<?php 
  $deep=True;
  require($path.'../../inc/template.php'); ?>