<?php $title = 'Team - Cube'; ?>

<?php ob_start(); var_dump($getTank);?>

<div class="display-flex news-container">
    <div class="left-news">
        <?php echo "<h1>${lastArticle['Title']}</h1>
        <p>${lastArticle['Content']}</p>"?>
    </div>
    <div class="display-flex flex-direction-column right-news-container">
        <div class="right-news">
            <?php echo "<h3>${llastArticle['Title']}</h3>
            <p>${llastArticle['Content']}</p>"?>
        </div>
        <div class="right-news1">
            <?php echo "<h3>${lllastArticle['Title']}</h3>
            <p>${lllastArticle['Content']}</p>"?>
        </div>
    </div>
</div>

<div class="align-items-center display-flex flex-direction-column about">
    <h2>À propos</h2>
    <div class="display-flex">
        <div class="display-flex flex-direction-column align-items-center about-container">
            <img class="img-about" src="">
            <h3>Prochain evenenement</h3>
            <p>
                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500
            </p>
        </div>
        <div class="display-flex flex-direction-column align-items-center about-container">
            <img class="img-about" src="">
            <h3>Prochain evenenement</h3>
            <p>
                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500
            </p>
        </div>
        <div class="display-flex flex-direction-column align-items-center about-container">
            <img class="img-about" src="">
            <h3>Prochain evenenement</h3>
            <p>
                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500
            </p>
        </div>
    </div>
</div>

<div class="team display-flex flex-direction-column align-items-center">
    <h2>L'équipe</h2>
    <?php
    foreach ($getTank as $getTank)
        echo "
    <div class='list-user-div team-mate display-flex globale-padding'>
        <img class='team-mate-pics' src=";if ($getTank['Image'] == NULL){ echo "/public/img/account.svg";} else { echo "${$getTank['Image']}";} echo" alt='icon profil pic' class='iconprofilpic'>
        <div class='team-mate-info'>
            <h4>${getTank['Lname']} ${getTank['Fname']}</h4>
            <h3>${getTank['Pseudo']}</h3>
            <h4>${getTank['Mail']}</h4>
        </div>
        <div class='team-mate-character display-flex'>
            <img class='iconCharacter' src='${getTank['Icon']}'>
            <div class='display-flex flex-direction-column'>
                <h3>${getTank['Name']}</h3>
                <h6 class='${getTank['Type']}'>${getTank['Type']}</h6>
            </div>

        </div>
    </div>
    ";?>
</div>
    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'views/template.php'); ?>