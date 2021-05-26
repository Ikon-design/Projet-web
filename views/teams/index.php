<?php $title = 'OverWatch | Team Cube'; ?>

<?php ob_start(); ?>
<main class="main-team">
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
    } ?>
</main>
<?php
 $content = ob_get_clean();
 include (ROOT.'views/template.php');
?>