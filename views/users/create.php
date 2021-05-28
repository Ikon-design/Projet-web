<?php $title = "Page de profil" ?>

<?php ob_start();?>

<?php
$content = ob_get_clean();
include (ROOT.'views/template.php')
?>
