<?php $title = "Overwatch | Evenements"; ?>

<?php ob_start(); var_dump($_POST);?>

<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'/views/template.php');
