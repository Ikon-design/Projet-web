<?php $title = 'OverWatch | Team Cube'; ?>

<?php ob_start();?>
<main class="main-team display-flex flex-direction-column">
        <div class="team-members-container display-flex globale-padding">
            <h2>Membres de l'équipe</h2>
            <?php
            if($me['admin'] == 1 || $me['manager'] == 1) {
                echo '<a class="circulare-button display-flex" onclick = "addmember()" class="fas fa-plus" ><img src = "/public/img/plus.svg" ></a>';
            }?>
        </div>
        <?php
        foreach ($getTeam as $usersTeam){
            $url = '/users/edit/'.$usersTeam['UserID'];
            echo "
             <div class='list-user-div team-mate display-flex globale-padding'>
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
                </div>";
                if($me['admin'] == 1 || $me['manager'] == 1) {
                    echo"<div class='edit-delete display-flex' >
                    <a class='circulare-button display-flex' onclick = 'editUser( ${usersTeam['UserID']} )' ><img src = '/public/img/pencil.svg' class='fas fa-edit' ></a >
                    <a class='circulare-button display-flex' href = '/teams/delete/${usersTeam['UserID']}' ><img src = '/public/img/delete.svg' class='fas fa-ban' ></a >
               </div> ";}
                echo "
            </div>
        </div>
        <dialog id='edit-dialog${usersTeam['UserID']}'>
            <form method='post'>
                <div class='select-input-container display-flex'>
                    <select name='CharacterID'>
                        <option value='${usersTeam['CharacterID']}' selected>${usersTeam['Name']}</option>";
                foreach ($getcharacters as $character){
                        echo "<option value='${character['CharacterID']}'>${character['Name']}</option>";
                    }
                echo"</select>
                </div>
                <div class='display-flex radio-dialog'>";
                    if ($me['admin'] == 1){
                        echo"<label for='Admin'>Admin</label>
                        <input type='checkbox' name='admin' value='1' >";
                    }
                    echo"<label for='ad'>Joueur</label>
                    <input type='checkbox' name='player' value='1'>
                    <label for='ad'>Manager</label>
                    <input type='checkbox' name='manager' value='1'>
                </div>
                <div class='button-dialog container-dialog-button'>
                    <input class='dialog-button' type='submit' value='Valider' formaction=${url}>
                    <button class='dialog-button' type='button' onclick='cancelEditUser(${usersTeam['UserID']})'>Annuler</button>
                </div>
            </form>
        </dialog>";}?>
    <dialog id='addMember' class='edit-dialog'>
        <form method='post'>
            <div class="display-flex">
                <select name='UserID'>";
                    <?php
                    foreach ($getUsers as $users){
                        echo "<option value='${users['UserID']}'>${users['Pseudo']}</option>";
                    }
                    ?>
                </select>
                <select name='CharacterID'>";
                    <?php foreach ($getcharacters as $characters){
                    echo "<option value='${characters['CharacterID']}'>${characters['Name']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class='display-flex radio-dialog'>
                <label for='Admin'>Admin</label>
                <input type='checkbox' name='admin' value='1' >
                <label for='ad'>Joueur</label>
                <input type='checkbox' name='player' value='1'>
                <label for='ad'>Manager</label>
                <input type='checkbox' name='manager' value='1'>
            </div>
            <div class="button-dialog container-dialog-button">
                <input class='dialog-button' type='submit' value='Valider' formaction='/teams/edit/cocucou'>
                <button class='dialog-button' type="button" onclick="cancelChange()">Annuler</button>
            </div>
        </form>
    </dialog>
</main>
<?php
$content = ob_get_clean();
include (ROOT.'views/template.php');
?>

