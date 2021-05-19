<?php $title = 'Overwatch | Personnages'; ?>

<?php ob_start(); ?>
    <div class="display-flex">
        <div class="display-flex characters-container">
            <?php if (isset($characters)) {
                foreach ($characters as $character){
                   echo "<div class='item-characters'>
                            <img class='img-characters' alt='portrait du personnage ${character['Name']}' src=${character['Icon']}>
                            <h1>${character['Name']}</h1>
                        </div>";
                }
            } ?>
        </div>
<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'/views/template.php');
