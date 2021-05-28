<?php $title = 'OverWatch | Team Cube'; ?>

<?php ob_start();?>

<?php
$content = ob_get_clean();
include (ROOT.'views/template.php');
?>