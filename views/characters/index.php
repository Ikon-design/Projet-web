<?php $title = 'Overwatch | Personnages';?>

<?php ob_start();?>
    <div class="characters-content display-flex flex-direction-column">
        <div class="main-characters-mobile display-flex flex-direction-column globale-padding">
            <select id="selectCharacter" class="selectCharacter" onchange="setUrl()">
                <?php
                if (isset($characters)) {
                    foreach ($characters as $Allcharacter){
                        echo "<option value='${Allcharacter['CharacterID']}'>${Allcharacter['Name']}</option>";
                    }
                }
                ?>
            </select>
            <?php
            $image = $character["Img"];
            $style = "background-image: url($image)";
            echo "<div class='character-info display-flex flex-direction-column' style='$style'; >";
            ?>
                <h2 class="h2-character"><?php echo "${character['Name']}"?></h2>
                <img src="" class="h3-charac-icon">
                <p class="p-character">
                    <?php echo "${character['Description']}"?>
                </p>
                </div>
        </div>

        <div class="skills-container">
            <div class="liste-skills display-flex globale-padding">
                <?php
                echo '<img id="skillIcon" class="skillIcon" src="" /> <select onchange="setSkill()" id="selectSkill">';
                $i = 0;
                if (isset($getSkills)) {
                    foreach ($getSkills as $skill) {
                        echo "
                        <script>
                            localStorage.setItem($i, '${skill['Video']}')
                            sessionStorage.setItem($i, '${skill['Description']}')
                            sessionStorage.setItem('skillIcon' + $i, '${skill['Icon']}')
                        </script>
                        <option value='$i'>${skill['Name']}</option>";
                        $i = $i+ 1;
                    }
                }
                
                ?>
                </select>
            </div>
          
            <div class="div-skill" id="skill">
                <p class="p-skill globale-margin globale-padding" id="description">
                </p>
                <video id="Video" muted="muted" autoplay loop class="video">
                    <source type="video/webm" src=''>
                </video>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'/views/template.php');
