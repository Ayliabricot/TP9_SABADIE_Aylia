<?php
      ob_start();
    
    require_once("../Model/pdo.php");

    

?>

<form action="../index.php" method="post">
      <input type="submit" value="Valider" />
</form>

<?php $content = ob_get_clean(); ?>

<?php require('../template.php'); ?>