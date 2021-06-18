<?php $title = 'Team - Cube'; ?>

<?php ob_start();?>

    <div class="display-flex news-container">
        <div class="left-news display-flex flex-direction-column">
            <?php echo "<h1 class='news-articles'>${lastArticle['Title']}</h1>
        <div class='content-news-articles'>
        <div class='line'></div>
        <p>${lastArticle['Content']}</p>";
            if (isset($lastArticle['oversize']) == true ){
                echo "<a class='more' href='/articles/read/${lastArticle['ArticleID']}'>Lire la suite</a>";
            }
            ?>
        </div>
    </div>
    <div class="display-flex flex-direction-column right-news-container">
        <div class="right-news display-flex flex-direction-column">
            <?php echo "<h3 class='news-articles'>${llastArticle['Title']}</h3>
            <div class='content-news-articles-right'>
            <div class='line'></div>
            <p class='left-news-article'>${llastArticle['Content']}</p>";
              if (isset($llastArticle['oversize']) == true ){
                echo "<a class='more' href='/articles/read/${llastArticle['ArticleID']}'>Lire la suite</a>";
            }
            ?>
            </div>
        </div>
        <div class="right-news1 display-flex flex-direction-column">
            <?php echo "<h3 class='news-articles'>${lllastArticle['Title']}</h3>
            <div class='content-news-articles-right'>
            <div class='line'></div>
            <p class='left-news-article'>${lllastArticle['Content']}</p>";
              if (isset($lllastArticle['oversize']) == true ){
                echo "<a class='more' href='/articles/read/${lllastArticle['ArticleID']}'>Lire la suite</a>";
            }
            ?>
            </div>
        </div>
    </div>
    </div>

    <div class="align-items-center display-flex flex-direction-column about globale-padding">
        <h2 class="team">À propos</h2>
        <div class="display-flex aboutt">
            <div class="display-flex flex-direction-column align-items-center about-container">
                <img class="img-about" src="/public/img/4d8548e66003682a1fa5918ecc0516eecc4e4dbd_hq.jpeg">
                <h3 class="team">Lorem Ipsum</h3>
                <p>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                    impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500
                </p>
            </div>
            <div class="display-flex flex-direction-column align-items-center about-container">
                <img class="img-about" src="/public/img/79c274de90275ed54741f8dad91d7c5ea2dedf5e_hq.jpeg">
                <h3 class="team">Lorem Ipsum</h3>
                <p>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                    impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500
                </p>
            </div>
            <div class="display-flex flex-direction-column align-items-center about-container">
                <img class="img-about" src="/public/img/c898bd6c0eeed5a6d077e30f7161f3c5d6a1060e_hq.jpeg">
                <h3 class="team">Lorem Ipsum</h3>
                <p>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                    impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500
                </p>
            </div>
        </div>
    </div>

    <div class="team display-flex flex-direction-column align-items-center globale-margin">
        <h2 class="team">L'équipe</h2>
        <div class="display-flex align-items-center container-team-class globale-margin">
            <?php
            foreach ($getTank as $tank) {
                if ($tank['id'] % 2 == 0){
                    echo "
    <div class='list-user-div team-mate display-flex '>
        <img class='team-mate-pics' src='${tank['Image']}' alt='icon profil pic' class='iconprofilpic'>
        <div class='team-mate-info'>
            <h4>${tank['Lname']} ${tank['Fname']}</h4>
            <h3>${tank['Pseudo']}</h3>
        </div>
        <div class='team-mate-character display-flex'>
            <img class='iconCharacter' src='${tank['Icon']}'>
            <div class='display-flex flex-direction-column'>
                <h3>${tank['Name']}</h3>
                <h6 class='${tank['Type']}'>${tank['Type']}</h6>
            </div>

        </div>
    </div>";}}
            echo "<h2 class='TANK'>Tank</h2>";
            foreach ($getTank as $tank) {
                if ($tank['id'] % 2 !== 0){
                    echo "
    <div class='list-user-div team-mate display-flex'>
    <div class='team-mate-character display-flex justify-content-flex-end'>
            <div class='display-flex align-items-flex-end flex-direction-column'>
                <h3>${tank['Name']}</h3>
                <h6 class='${tank['Type']}'>${tank['Type']}</h6>
            </div>
            <img class='iconCharacter' src='${tank['Icon']}'>
        </div>
        <div class='team-mate-info align-items-flex-end display-flex flex-direction-column'>
            <h4>${tank['Lname']} ${tank['Fname']}</h4>
            <h3>${tank['Pseudo']}</h3>
        </div>
        <img class='team-mate-pics' src='${tank['Image']}' alt='icon profil pic' class='iconprofilpic'>
    </div>";}}
            echo "</div><div class='display-flex align-items-center container-team-class globale-margin'>";
            foreach ($getDps as $dps) {
                if ($dps['id'] % 2 == 0) {
                    echo"
    <div class='list-user-div team-mate display-flex '>
        <img class='team-mate-pics' src='${dps['Image']}' alt='icon profil pic' class='iconprofilpic'>
        <div class='team-mate-info'>
            <h4>${dps['Lname']} ${dps['Fname']}</h4>
            <h3>${dps['Pseudo']}</h3>
        </div>
        <div class='team-mate-character display-flex'>
            <img class='iconCharacter' src='${dps['Icon']}'>
            <div class='display-flex flex-direction-column'>
                <h3>${dps['Name']}</h3>
                <h6 class='${dps['Type']}'>${dps['Type']}</h6>
            </div>

        </div>
    </div>";}}
            echo "<h2 class='DPS'>DPS</h2>";
            foreach ($getDps as $dps) {
                if ($dps['id'] % 2 !== 0) {
                    echo"
<div class='list-user-div team-mate display-flex'>
    <div class='team-mate-character display-flex justify-content-flex-end'>
            <div class='display-flex align-items-flex-end flex-direction-column'>
                <h3>${dps['Name']}</h3>
                <h6 class='${dps['Type']}'>${dps['Type']}</h6>
            </div>
            <img class='iconCharacter' src='${dps['Icon']}'>
        </div>
        <div class='team-mate-info align-items-flex-end display-flex flex-direction-column'>
            <h4>${dps['Lname']} ${dps['Fname']}</h4>
            <h3>${dps['Pseudo']}</h3>
        </div>
        <img class='team-mate-pics' src='${dps['Image']}' alt='icon profil pic' class='iconprofilpic'>
    </div>";}}
            echo "</div><div class='display-flex align-items-center container-team-class globale-margin'>";
            foreach ($getHeal as $heal) {
                if ($heal['id'] % 2 == 0) {
                    echo"
    <div class='list-user-div team-mate display-flex'>
        <img class='team-mate-pics' src='${heal['Image']}' alt='icon profil pic' class='iconprofilpic'>
        <div class='team-mate-info'>
            <h4>${heal['Lname']} ${heal['Fname']}</h4>
            <h3>${heal['Pseudo']}</h3>
        </div>
        <div class='team-mate-character display-flex'>
            <img class='iconCharacter' src='${heal['Icon']}'>
            <div class='display-flex flex-direction-column'>
                <h3>${heal['Name']}</h3>
                <h6 class='${heal['Type']}'>${heal['Type']}</h6>
            </div>
        </div>
    </div>";}}
            echo "<h2 class='HEAL'>Heal</h2>";
            foreach ($getHeal as $heal) {
                if ($heal['id'] % 2 !== 0) {
                    echo"
<div class='list-user-div team-mate display-flex'>
    <div class='team-mate-character display-flex justify-content-flex-end'>
            <div class='display-flex align-items-flex-end flex-direction-column'>
                <h3>${heal['Name']}</h3>
                <h6 class='${heal['Type']}'>${heal['Type']}</h6>
            </div>
            <img class='iconCharacter' src='${heal['Icon']}'>
        </div>
        <div class='team-mate-info align-items-flex-end display-flex flex-direction-column'>
            <h4>${heal['Lname']} ${heal['Fname']}</h4>
            <h3>${heal['Pseudo']}</h3>
        </div>
        <img class='team-mate-pics' src='${heal['Image']}' alt='icon profil pic' class='iconprofilpic'>
    </div>";}}?>
        </div>
    </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'views/template.php'); ?>