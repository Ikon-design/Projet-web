<?php $title = "Page de profil" ?>

<?php ob_start(); var_dump($getArticlesUser, $data);?>
<main class="main-backoffice">
    <div class="container">
        <div class="infouser">
            <h2>*username*</h2>
            <a href="#">change my informations</a>
        </div>
        <div class="infoperso">
            <div>
                <img src="" alt="profil picture of user" class="profilpic">
            </div>
            <div>
                <div>
                    <h3>*name* - *firstname*</h3>
                    <h3>*pseudo*</h3>
                </div>
                <div>
                    <h3>*Mail*</h3>
                    <h3>*Password*</h3>
                </div>

            </div>
        </div>
        <div>
            <h3>*role*</h3>
            <h3>*favorite character*</h3>
        </div>
        <div class="team-members">
            <h2>Team members</h2>
            <i class="fas fa-plus"></i>
        </div>

        <div class="list-user-div">
            <!--put function select user table here-->
            <div class="list-user-pic">
                <img src="src/profilpic.jpg" alt="icon profil pic" class="iconprofilpic">
            </div>
            <div class="user-info">
                <div>
                    <h4>Clément Legrix</h4>
                    <h3>CLEMENTLEBG</h3>
                    <h4>Legrix.clement@gmail.com</h4>
                </div>
                <div class="favcharacter">
                    <img src="src/iconperso.png">
                    <h3>Mei</h3>
                </div>
                <div class="edit-delete">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-ban"></i>
                </div>
            </div>
        </div>
        <div class="list-user-div">

            <div class="list-user-pic">
                <img src="src/profilpic.jpg" alt="icon profil pic" class="iconprofilpic">
            </div>
            <div class="user-info">
                <div>
                    <h4>Clément Legrix</h4>
                    <h3>CLEMENTLEBG</h3>
                    <h4>Legrix.clement@gmail.com</h4>
                </div>
                <div class="favcharacter">
                    <img src="src/iconperso.png">
                    <h3>Mei</h3>
                </div>
                <div class="edit-delete">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-ban"></i>
                </div>
            </div>
        </div>
        <div class="list-user-div">

            <div class="list-user-pic">
                <img src="src/profilpic.jpg" alt="icon profil pic" class="iconprofilpic">
            </div>
            <div class="user-info">
                <div>
                    <h4>Clément Legrix</h4>
                    <h3>CLEMENTLEBG</h3>
                    <h4>Legrix.clement@gmail.com</h4>
                </div>
                <div class="favcharacter">
                    <img src="src/iconperso.png">
                    <h3>Mei</h3>
                </div>
                <div class="edit-delete">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-ban"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="post-container">
        <h2>Postes</h2>

        <?php
        foreach ($getArticlesUser as $articles){
            $date = $articles['Date'];
            $formatedDate = date('d/m/Y', strtotime($date));
            echo"
            <div class='post display-flex flex-direction-column'>
            <div class='display-flex author-article'>
                <h3 class='article-title'>${articles["Title"]}</h3>
                <h4 class='article-author'>De ${articles["Pseudo"]}, le $formatedDate</h4>
            </div>
            <div class='post-date'>
                <p>Derniere réponse de : </p>
            </div>
            <div class='post-edit-delete'>
                <i class='fas fa-edit'></i>
                <i class='fas fa-ban'></i>
            </div>
            </div>
        ";
        }
        ?>

    </div>
</main>

<?php
 $content = ob_get_clean();
 include (ROOT.'views/template.php')
?>
