<?php $title = "Overwatch | Evenements"; ?>

<?php ob_start(); ?>

<?="
    <div class='article-block display-flex margin-destock'>
        <div class='article-container display-flex flex-direction-column'>
            <div class='header-article display-flex globale-margin'>
                <h2>Articles</h2>
                <img src='../../public/img/menu-down.svg'>
            </div>
"?>
<?php if (isset($getArticle)) {
    foreach ($getArticle as $article){
        $date = $article['Date'];
        $formatedDate = date('d m Y', strtotime($date));
        echo "
            <div class='display-flex globale-margin author-article'>
                <h3 class='article-title'>${article[Title]}</h3>
                <h4 class='article-author'>${article[Pseudo]} le $formatedDate</h4>
            </div>
            <p class='globale-margin'>${article[Content]}</p>
    ";}
}?>
<?="</div>
    <div class='article-container display-flex flex-direction-column'>
        <div class='display-flex header-article'>
            <h2>Événements</h2>
            <img src='../../public/img/menu-down.svg'>
        </div>
    "?>
<?php if (isset($getEvent)) {
    foreach ($getEvent as $article){
        $date = $article['Date'];
        $formatedDate = date('d m Y', strtotime($date));
        echo "
            <div class='display-flex'>
                <h3 class='article-title'>${article[Title]}</h3>
                <h4 class='article-author'>${article[Pseudo]} le $formatedDate</h4>
            </div>
            <p>${article[Content]}</p>
    ";}
}?>

<?="</div>
    </div>
"?>

<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'/views/template.php');