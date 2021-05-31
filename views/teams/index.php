<?php $title = 'OverWatch | Team Cube'; ?>

<?php ob_start(); ?>
    <main class="main-team desktop-margin">
        <?php
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
                    <a onclick='editUser(${usersTeam['UserID']})'><img src='/public/img/pencil.svg' class='fas fa-edit'></a>
                    <a href='/teams/delete/${usersTeam['UserID']}'><img src='/public/img/delete.svg' class='fas fa-ban'></a>
                </div>
            </div>
            <div class='display-flex'>";
            if ($usersTeam["Player"] == 1 ){
                echo "<div class='user-type'>Joueur</div>";
            } else if ($usersTeam["Manager"] == 1){
                echo "<div class='user-type'>Manageur</div>";
            }
            $url = "/teams/edit/${usersTeam['UserID']}";
            echo "
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