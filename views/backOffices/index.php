<?php $title = "Page de profil" ?>

<?php ob_start(); var_dump($me);?>
<main class="main-backoffice display-flex">
    <div class="left-block-container">
        <div class="display-flex flex-direction-column globale-padding">
        <div class="container-info-user display-flex ">
            <div class="img-user">
                <img src="<?php if($getUser['Image'] == NULL){ echo "/public/img/account.svg";} else { echo "${getUser['Image']}";} ?>" alt="profil picture of user" class="profilpic">
            </div>
            <div class="info-user display-flex flex-direction-column">
                <div>
                    <?php echo "<h3 class='name'>${getUser['Lname']} ${getUser['Fname']}</h3>
                    <h2>${getUser['Pseudo']}</h2>";?>
                </div>
                <?php echo "<h3>${getUser['Mail']}</h3>"; ?>
            </div>
            <div class="container-character-user display-flex flex-direction-column">
                <?php echo "
                <img src=${getUser['Icon']}>
                <h3>${getUser['Name']}</h3>
                <h4 class='${getUser['Type']}'>${getUser['Type']}</h4>
                "?>
            </div>
        </div>
        <a class="button" onclick='ChangeInformation()'>Modifier</a>
        </div>
        <div class="divider"></div>
        <?php if($getUser['Admin'] == 1 || $getUser['Player'] == 1 || $getUser['Player'] == 1){
            echo "      
                <div class='team-members-container display-flex globale-padding'>
                        <h2>Membres de l'équipe</h2>";
                        if($me['admin'] == 1 || $me['manager'] == 1){
                        echo "<a class='circulare-button display-flex' onclick='addmember()' class='fas fa-plus'><img src='/public/img/plus.svg'></a>";
                        }
                 echo "</div>
                 <div class='divider'></div>";
            foreach ($getTeam as $usersTeam){
                $url2 = "/users/edit/${usersTeam['UserID']}";
                echo "
            <div class='list-user-div display-flex globale-padding'>
                <img class='team-mate-pics' src='${usersTeam['Image']}' alt='icon profil pic' class='iconprofilpic'>
                <div class='team-mate-info'>
                    <h4>${usersTeam['Lname']} ${usersTeam['Fname']}</h4>
                    <h3>${usersTeam['Pseudo']}</h3>
                    <h4>${usersTeam['Mail']}</h4>
                </div>
                 <div class='team-mate-character display-flex'>
                    <img class='iconCharacter' src='${usersTeam['Icon']}'>
                    <div class='display-flex flex-direction-column'>
                        <h3>${usersTeam['Name']}</h3>
                        <h6 class='${usersTeam['Type']}'>${usersTeam['Type']}</h6>
                    </div>
                   
                </div>
                <div class='edit-delete display-flex'>
                    <a class='circulare-button display-flex' onclick='editUser( ${usersTeam['UserID']} )'><img src='/public/img/pencil.svg' class='fas fa-edit'></a>
                    <a class='circulare-button display-flex' href='/teams/delete/${usersTeam['UserID']}'><img src='/public/img/delete.svg' class='fas fa-ban'></a>
               </div>   
            <dialog id='edit-dialog${usersTeam['UserID']}' class='edit-dialog'>
                <form method='post'>
                <select name='CharacterID'>";
                    foreach ($getCharacters as $characters){
                        echo "<option value='${characters['CharacterID']}'>${characters['Name']}</option>";
                    }
                    echo "</select>
                    <div class='radio-dialog display-flex'>
                        <label for='ad'>Joueur</label>
                        <input type='checkbox' name='player' value='1'>";
                        if($me['manager'] == 1 || $me['admin']){
                            echo "<label for='ad'>Manager</label>
                            <input type='checkbox' name='manager' value='1'>";}
                        if($me['admin'] == 1){
                            echo "<label for='ad'>Admin</label>
                            <input type='checkbox' name='admin' value='1'>";
                        }
                        echo "
                    </div>
                    <div class='button-dialog container-dialog-button'>
                        <input class='dialog-button' type='submit' value='Valider' formaction=${url2}>
                        <button class='dialog-button' type='button' onclick='cancelEditUser(${usersTeam['UserID']})'>Annuler</button>
                    </div>
                </form>
            </dialog>
        </div>
        <div class='divider'></div>
        ";}}?>
    </div>
    <div class="right-block-container ">
        <h2 class="my-messages globale-padding">Mes messages</h2>
        <div class="divider"></div>
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
            <div class='post display-flex flex-direction-column globale-padding'>
            <div class='display-flex author-article'>
            <div class='display-flex author-article-items'>
                <h3 class='article-title'>${articles["Title"]}</h3>
                <h4 class='article-author'>De ${articles["Pseudo"]}, le $formatedDate</h4>
            </div>

                <div class='circulare-button-container display-flex'>
                    <a class='edit-button circulare-button display-flex' href='/articles/edit/${articles["ArticleID"]}'><img src='/public/img/pencil.svg'></a>
                    <a class='delete-button circulare-button display-flex' href='/articles/delete/${articles["ArticleID"]}'><img src='/public/img/delete.svg'></a>
                </div>
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
            <div class='divider'></div>
        ";}
        $url = "/backOffices/edit/${getUser['UserID']}";
        $urlForAdd = "/teams/edit";
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
                <div class='button-dialog container-dialog-button'>
                  <input class='dialog-button' type='submit' value='Valider' formaction=${url}>
                  <button class='dialog-button' type='button' onclick='cancelChange()'>Annuler</button>
                </div>
                </form>
            </dialog>
            
            <dialog id='addMember'>
                <form method='post'>
                    <select name='UserID'>";
                        foreach ($getUsers as $user){
                            echo "<option value='${user['UserID']}'>${user['Pseudo']}</option>";
                        }
                    echo "</select>
                    <select name='CharacterID'>";
                        foreach ($getCharacters as $characters){
                            echo "<option value='${characters['CharacterID']}'>${characters['Name']}</option>";
                        }
                    echo "</select>";
                    if ($me["admin"] == 1){
                            echo "<div class='radio-dialog display-flex'>
                                    <input type='checkbox' name='player' value='1' checked='false'>
                                    <label for='Joueur'>Joueur</label>
                                    <input type='checkbox' name='manager' value='1'>
                                    <label for='Manager'>Manager</label>
                                    <input type='checkbox' name='admin' value='1' >
                                    <label for='Admin'>Admin</label>
                            </div>";
                        }
                    echo " <div class='button-dialog container-dialog-button display-flex'>
                                <input class='dialog-button' type='submit' value='Valider' formaction=$urlForAdd>
                                <button class='dialog-button' type='button' onclick='cancelChange()'>Annuler</button>
                        </div>
                </form>
            </dialog>
            ";?>
</main>

<?php
$content = ob_get_clean();
include (ROOT.'views/template.php');
?>