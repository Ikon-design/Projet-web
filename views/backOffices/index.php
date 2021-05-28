<?php $title = "Page de profil" ?>

<?php ob_start();?>
<main class="main-backoffice">
    <div class="container">
        <div class="infouser">
            <?php echo "<h2>${getUser['Pseudo']}</h2>";?>
            <a onclick="ChangeInformation()">Modifier mes informations</a>
        </div>
        <div class="infoperso">
            <div>
                <img src="<?php if($getUser['Image'] == NULL){ echo "/public/img/account.svg";} else { echo "${getUser['Image']}";} ?>" alt="profil picture of user" class="profilpic">
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
                        <a onclick="addmember()" class="fas fa-plus"><img src="/public/img/plus.svg"></a>
                 </div>';
            foreach ($getTeam as $usersTeam){
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
                    <a onclick='editUser( ${usersTeam['UserID']} )'><img src='/public/img/pencil.svg' class='fas fa-edit'></a>
                    <a href='/teams/delete/${usersTeam['UserID']}'><img src='/public/img/delete.svg' class='fas fa-ban'></a>
                </div>
            </div>
            <div class='display-flex'>";
                if ($usersTeam["Player"] == 1 ){
                    echo "<div class='user-type'>Joueur</div>";
                } else if ($usersTeam["Manager"] == 1){
                    echo "<div class='user-type'>Manageur</div>";
                }
                $url2 = "/teams/edit/${usersTeam['UserID']}";
                echo "
            </div>
            <dialog id='edit-dialog${usersTeam['UserID']}' class='edit-dialog'>
                <form method='post'>
                    <label for='ad'>Joueur</label>
                    <input type='checkbox' name='player' value='1'>
                    <label for='ad'>Manager</label>
                    <input type='checkbox' name='manager' value='1'>
                    <label for='ad'>Admin</label>
                    <input type='checkbox' name='admin' value='1'>
                    <input type='submit' value='Valider' formaction=${url2}>
                </form>
            </dialog>
        </div>";}
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
                <a class='edit-button' href='/articles/edit/${articles["ArticleID"]}'><img src='/public/img/pencil.svg'></a>
                <a class='delete-button' href='/articles/delete/${articles["ArticleID"]}'><img src='/public/img/delete.svg'></a>
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
        $url = "/backOffices/edit/${getUser['UserID']}";
        echo "<dialog id='ChangeInformation'>
                <form method='post'>
                    <input type='text' name='Pseudo' value='${getUser["Pseudo"]}'>
                    <input type='text' name='Lname' value='${getUser["Lname"]}'>
                    <input type='text' name='Fname' placeholder='Prénom' value='${getUser["Fname"]}'>
                    <input type='email' name='Mail' value='${getUser["Mail"]}'>
                    <select name='CharacterID'>
                        <option selected value='${getUser["CharacterID"]}'>${getUser["Name"]}</option>";
        foreach ($getCharacters as $characters){
            echo "<option value='${characters['CharacterID']}'>${characters['Name']}</option>";
        }
        echo "</select>
                  <input type='submit' value='Valider' formaction=${url}>
                  <button type='button' onclick='cancelChange()'>Annuler</button>
                </form>
            </dialog>
            <dialog id='addMember'>
                <form>
                    <input type='text' name='Pseudo' placeholder='Pseudo'>
                    <input type='text' name='Lname' placeholder='Nom'>
                    <input type='text' name='Fname' placeholder='Prénom' >
                    <input type='email' name='Mail' placeholder='Mail' >
                    <select name='CharacterID'>";
        foreach ($getCharacters as $characters){
            echo "<option value='${characters['CharacterID']}'>${characters['Name']}</option>";
        }
        echo "
                    <input type='submit' value='Valider' formaction=${url}>
                    <button onclick='cancelChange()'>Annuler</button>
                </form>
            </dialog>
            ";

        ?>
</main>

<?php
$content = ob_get_clean();
include (ROOT.'views/template.php')
?>
