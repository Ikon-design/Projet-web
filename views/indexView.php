<?php $title = 'Team - Cube'; ?>

<?php ob_start();?>

<div class="display-flex news-container">
    <div class="left-news">
        <h1></h1>
        <p></p>
    </div>
    <div class="display-flex flex-direction-column right-news-container">
        <div class="right-news">
            <h3></h3>
            <p></p>
        </div>
        <div class="right-news1">
            <h3></h3>
            <p></p>
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

    <div class="team-container">
        <div class="team-item display-flex">
            <div class="team-item-left">
                <img src="" class="team-img-left">
            </div>
            <h3>Tank</h3>
            <div class="team-item-right">
                <img src="">
            </div>
        </div>

        <div class="team-item display-flex">
            <div class="team-item-left">
                <img src="">
            </div>
            <h3>Dps</h3>
            <div class="team-item-right">
                <img src="">
            </div>
        </div>

        <div class="team-item display-flex">
            <div class="team-item-left">
                <img src="">
            </div>
            <h3>Heal</h3>
            <div class="team-item-right">
                <img src="">
            </div>
        </div>
    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
