<?php $title = "Overwatch | Evenements"; ?>

<?php ob_start(); ?>
<?php

if (isset($readArticle)) {
    echo "<div class='display-flex globale-margin'>
            <a href='/articles'><img src='/public/img/arrow-left.svg'></a>
            <h3>${readArticle["Title"]}</h3>
            <h4>Par ${readArticle["Pseudo"]} le ${readArticle["Date"]}</h4>
          </div>
          <p class='globale-margin'>${readArticle["Content"]}</p>
";
}
if (isset($commentsArticle)) {
    foreach ($commentsArticle as $comment){
        echo"
            <div class='display-flex globale-margin'>
                <h3>${comment['Pseudo']}</h3>
                <h4>Posté le ${comment['Date']}</h4>
            </div>
            <p class='globale-margin'>${comment['Content']}</p>
    ";}
}

?>
<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'/views/template.php');