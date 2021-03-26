<?php $title = 'Overwatch | Personnages'; ?>

<?php ob_start(); ?>
    <div class="display-flex">
        <div class="display-flex characters-container">
            <?php foreach ($characters as $character){
               echo "<div class='item-characters'>
                        <img class='img-characters' src=${character['Icon']}>
                        <h1>${character['Name']}</h1>
                    </div>";
            }?>
        </div>
        <div>
            <h2>Roles</h2>
        </div>
    </div>

    <div>
        <?= "<img src=${character['Img']}>" ?>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'views/template.php');
