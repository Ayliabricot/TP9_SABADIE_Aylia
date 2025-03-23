<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Afficher les erreurs et les avertissements
error_reporting(E_ALL);
ob_start();
?>

<?php
         
      ?>

<?php $content = ob_get_clean(); ?>

<?php require('../inc/template.php'); ?>