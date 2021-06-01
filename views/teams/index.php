<?php $title = 'OverWatch | Team Cube'; ?>

<?php ob_start(); ?>
    <main class="main-team desktop-margin display-flex flex-direction-column">
        <div class="team-members-container display-flex globale-padding">
            <h2>Membres de l'équipe</h2>
            <a class="circulare-button display-flex" onclick="addmember()" class="fas fa-plus"><img src="/public/img/plus.svg"></a>
        </div>
        <?php
        foreach ($getTeam as $usersTeam){
            //var_dump($getTeam);
            echo "
             <div class='list-user-div team-mate display-flex globale-padding'>
                <img class='team-mate-pics' src=";if ($usersTeam['Image'] == NULL){ echo "/public/img/account.svg";} else { echo "${$usersTeam['Image']}";} echo" alt='icon profil pic' class='iconprofilpic'>
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
            </div>
        </div>
        <dialog id='edit-dialog${usersTeam['UserID']}' class='edit-dialog'>
                <form method='post'>
                    <label for='ad'>Joueur</label>
                    <input type='checkbox' name='player' value='1'>
                    <label for='ad'>Manager</label>
                    <input type='checkbox' name='manager' value='1'>
                    <label for='ad'>Admin</label>
                    <input type='checkbox' name='admin' value='1'>
                    <input type='submit' value='Valider' formaction=${url}>
                </form>
            </dialog>
            ";
        }?>
    </main>
<?php
$content = ob_get_clean();
include (ROOT.'views/template.php');
?>