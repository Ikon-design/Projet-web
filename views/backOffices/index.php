<?php $title = "Page de profil" ?>

<?php ob_start();?>
<main class="main-backoffice">
    <div class="container">
        <div class="infouser">
            <?php echo "<h2>${getUser['Pseudo']}</h2>";?>
            <a href="#">change my informations</a>
        </div>
        <div class="infoperso">
            <div>
                <img src="" alt="profil picture of user" class="profilpic">
            </div>
            <div>
                <div>
                    <?php echo "<h3>${getUser['Lname']} - ${getUser['Fname']}</h3>"; ?>
                </div>
                <div>
                    <?php echo "<h3>${getUser['Mail']}</h3>"; ?>
                </div>

            </div>
        </div>
        <div>
            <?php echo "<h3>${getUser['Type']}</h3>
            <h3>${getUser['Name']}</h3>" ?>
        </div>
        <?php if($getUser['Admin'] == 1 || $getUser['Player'] == 1 || $getUser['Player'] == 1){
            echo '           
                <div class="team-members">
                        <h2>Team members</h2>
                        <i class="fas fa-plus"></i>
                 </div>';
            foreach ($getTeam as $usersTeam){
                //var_dump($getTeam);
                echo "
            <div class='list-user-div display-flex'>
            <div class='list-user-pic'>
                <img src='src/profilpic.jpg' alt='icon profil pic' class='iconprofilpic'>
            </div>
            <div class='user-info globale-padding'>   
                <div class='favcharacter display-flex flex-direction-column'>
                    <img class='iconCharacter' src='${usersTeam['Icon']}'>
                    <h3>${usersTeam['Name']}</h3>
                </div>
            
                <div>
                    <h4>${usersTeam['Fname']} ${usersTeam['Lname']}</h4>
                    <h3>${usersTeam['Pseudo']}</h3>
                    <h4>${usersTeam['Mail']}</h4>
                </div>
             
                <div class='edit-delete'>
                    <i class='fas fa-edit'></i>
                    <i class='fas fa-ban'></i>
                </div>
            </div>
            <div class='display-flex'>";
            if ($usersTeam["Player"] == 1 ){
                echo "<div class='user-type'>Joueur</div>";
            } else if ($usersTeam["Manager"] == 1){
                echo "<div class='user-type'>Manageur</div>";
            }
            echo "
            </div>
        </div>
            ";

            }
        } ?>
    </div>
        <div class="post-container">
            <h2>Postes</h2>

            <?php
            foreach ($getArticlesUser as $articles){
                $date = $articles['Date'];
                $formatedDate = date('d/m/Y', strtotime($date));
                $lastComment = $articles['lastComment'];

                if (strlen($articles['Content']) > 200){
                    $content = substr($articles['Content'], 0, 200)."...";
                    $endPoint = strrpos($content, ' ');
                }else {
                    $content = $articles['Content'];
                }

                echo"
            <div class='post display-flex flex-direction-column'>
            <div class='display-flex author-article'>
                <h3 class='article-title'>${articles["Title"]}</h3>
                <h4 class='article-author'>De ${articles["Pseudo"]}, le $formatedDate</h4>
                <a class='edit-button'></a>
            </div>
            <div class='post-date'>
            <p>$content</p>";
                if (strlen($articles['Content']) > 200){
                    echo"<a class='more' href='/articles/read/${articles["ArticleID"]}'>Lire la suite</a>";
                }
                if ($lastComment['Pseudo'] == null) {
                    echo"<p> Il n'y a pas de commentaires</p>";
                }else{
                    echo"<p> Derniere réponse de : ${lastComment['Pseudo']} </p>";
                }
                echo"
            </div>
            <div class='post-edit-delete'>
                <i class='fas fa-edit'></i>
                <i class='fas fa-ban'></i>
            </div>
            </div>
        ";}
            ?>
</main>

<?php
$content = ob_get_clean();
include (ROOT.'views/template.php')
?>
