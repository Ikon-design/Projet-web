<?php $title = "Overwatch | Evenements"; ?>

<?php ob_start(); $url = '/articles'; $urlEdit = '/articles/edit/'.$article['ArticleID'];?>
<main class="main-edit-article">
    <form method="post">
        <input type="text" name="title" value="<?php echo "${article['Title']}" ?>">
        <textarea name="content" ><?php echo "${article['Content']}"  ?></textarea>
        <div class='container-dialog-button'>
            <input class='dialog-button' type="submit" value="Valider" formaction="<?php echo "$urlEdit"?>">
            <button class='dialog-button' formaction="<?php "$url"?>">Annuler</button>
        </div>
    </form>
</main>
<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'/views/template.php');
