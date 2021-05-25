<?php $title = "Overwatch | Evenements"; ?>

<?php ob_start(); ?>

<?="
    <div class='article-block display-flex margin-destock'>
        <div class='article-container display-flex flex-direction-column'>
            <div class='header-article display-flex globale-margin'>
                <h2>Articles</h2>
                <img src='public/img/menu-down.svg'>
            </div>
            <div class='divider'></div>
"?>
<?php if (isset($getArticle)) {
    foreach ($getArticle as $article){
        $date = $article['Date'];
        $formatedDate = date('d m Y', strtotime($date));
        if (strlen($article['Content']) > 200){
            $content = substr($article['Content'], 0, 200)."...";
            $endPoint = strrpos($content, ' ');
        }else {
            $content = $article['Content'];
        }
        echo "
            <div class='display-flex globale-margin author-article'>
                <h3 class='article-title'>${article['Title']}</h3>
                <h4 class='article-author'>De ${article['Pseudo']} le $formatedDate.</h4>
            </div>
            <p class=''>$content</p>";
        if (strlen($article['Content']) > 200){
            echo"<a class='more' methods='post' href='/articles/read/${article['ArticleID']}'>Lire la suite</a>";
        }
        echo "<div class='divider'></div>";}
}?>
<?="</div>
    <div class='article-container display-flex flex-direction-column'>
        <div class='header-article display-flex globale-margin'>
            <h2>Événements</h2>
            <a><img src='public/img/menu-down.svg'></a>
        </div>
        <div class='divider'></div>
    "?>
<?php if (isset($getEvent)) {
    foreach ($getEvent as $article){
        $date = $article['Date'];
        $formatedDate = date('d m Y', strtotime($date));
        if (strlen($article['Content']) > 200){
            $content = substr($article['Content'], 0, 200)."...";
            $endPoint = strrpos($content, ' ');
        }else {
            $content = $article['Content'];
        }
        echo "
            <div class='display-flex globale-margin author-article'>
                <h3 class='article-title'>${article['Title']}</h3>
                <h4 class='article-author'>De ${article['Pseudo']} le $formatedDate.</h4>
            </div>
            <p>$content</p>";
        if (strlen($article['Content']) > 200){
            echo"<a class='more' href='/'>Lire la suite</a>";
        }
        echo "<div class='divider'></div>";}
}?>

<?="</div>
    </div>
"?>

<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'/views/template.php');