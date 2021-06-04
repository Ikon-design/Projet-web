<?php $title = "Overwatch | Evenements"; ?>

<?php
ob_start();
$url = '/articles/create';
?>
    <div class='article-block display-flex'>
        <div class='article-container display-flex flex-direction-column'>
        <div class='header-article display-flex globale-margin'>
            <h2>Articles</h2>
            <div class='display-flex'>
                <a class='circulare-button display-flex' onclick='addarticle()' class='fas fa-plus'><img src='/public/img/plus.svg'></a>
            </div>
        </div>
    <div class='divider'></div>
<?php if (isset($getArticle)) {
    foreach ($getArticle as $article){
        echo "
            <div class='display-flex globale-margin author-article'>
                <h3 class='article-title'>${article['Title']}</h3>
                <h4 class='article-author'>De ${article['Pseudo']} le ${article['Date']}.</h4>";
                if ($me['admin'] == 1 || $me['manager'] == 1 ) {
                    echo "<div class='circulare-button-container display-flex' >
                    <a class='edit-button circulare-button display-flex' href = '/articles/edit/${article["ArticleID"]}' ><img src ='/public/img/pencil.svg' ></a >
                    <a class='delete-button circulare-button display-flex' href = '/articles/delete/${article["ArticleID"]}' ><img src ='/public/img/delete.svg' ></a >
                </div>";}
           echo "</div>
           <p class=''>${article['Content']}</p>";
           if ($article['oversize'] == true){
               echo"<a class='more globale-padding' href='/articles/read/${article["ArticleID"]}'>Lire la suite</a>";
           }
           echo"<div class='divider'></div>";}
}?>
<?="</div>
    <div class='article-container display-flex flex-direction-column'>
        <div class='header-article display-flex globale-margin'>
            <h2>Événements</h2> 
            <div class='display-flex'>
                <a class='circulare-button display-flex' onclick='addarticle()' class='fas fa-plus'><img src='/public/img/plus.svg'></a>
            </div>
        </div>
        <div class='divider'></div>
    "?>
<?php if (isset($getEvent)) {
    foreach ($getEvent as $article){
        echo "
            <div class='display-flex globale-margin author-article'>
                <h3 class='article-title'>${article['Title']}</h3>
                <h4 class='article-author'>De ${article['Pseudo']} le ${article['Date']}.</h4>";
                if ($me['admin'] == 1 || $me['manager'] == 1 ) {
                    echo "<div class='circulare-button-container display-flex' >
                    <a class='edit-button circulare-button display-flex' href = '/articles/edit/${article["ArticleID"]}' ><img src = '/public/img/pencil.svg' ></a >
                    <a class='delete-button circulare-button display-flex' href = '/articles/delete/${article["ArticleID"]}' ><img src = '/public/img/delete.svg' ></a >
                </div>";}
            echo "</div>
            <p>${article['Content']}</p>";
            if ($article['oversize'] == true){
               echo"<a class='more globale-padding' href='/articles/read/${article["ArticleID"]}'>Lire la suite</a>";
           }
        echo "<div class='divider'></div>";}
}?>

</div></div>
    <dialog id='addArticle' class='edit-dialog' open='false'>
        <form method='post'>
            <input type='text' name='title' placeholder='Titre' required>
            <textarea name='content' placeholder='Votre texte' required></textarea>   
            <div class='radio-dialog display-flex'>
                <input type='radio' name='event' value='Article'>
                <label for='article'>Article</label>
                <input type='radio' name='event' value='event'>
                <label for='event'>Évenement</label>
            </div>
            <div class='display-flex button-dialog'>
                <div class='container-dialog-button'>
                    <input class='dialog-button' type='submit' value='Valider' formaction=<?php echo "$url"; ?>>
                    <button class='dialog-button' type='button' onclick='cancelChange()'>Annuler</button>
                </div>
            </div>
        </form>
    </dialog>


<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'/views/template.php'); ?>