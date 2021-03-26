<?php
foreach ($articles as $article){
    echo "<h2>${article['ArticleID']}</h2>";
}
$title = "Overwatch | Evenements";
$content = "<p>yes</p>";

include ROOT."views/template.php";
