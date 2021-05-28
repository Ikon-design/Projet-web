<?php $title = "Overwatch | Evenements"; ?>

<?php ob_start(); ?>
<main>
    <form method="post">
        <input type="text" name="title" value="<?php echo "${article['Title']}" ?>">
        <textarea name="content" ><?php echo "${article['Content']}"  ?></textarea>
        <input type="submit" value="Valider">
    </form>
</main>
<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'/views/template.php');
