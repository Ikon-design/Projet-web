<?php $title = 'OverWatch | Team Cube'; var_dump($_POST);?>

<?php ob_start();?>
<?php
$content = ob_get_clean();
include (ROOT.'views/template.php');
?>
