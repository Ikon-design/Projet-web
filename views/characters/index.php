<?php $title = 'Overwatch | Personnages';?>

<?php ob_start();?>
    <div class="characters-content">
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
            <div class="info-characters">
                <h2 class="h2-character"><?php echo "${character['Name']}"?></h2>
                <img src="" class="h3-charac-icon">
                <p class="p-character">
                    <?php echo "${character['Description']}"?>
                </p>
            </div>
            <?php
            if (isset($character)) {
                //echo"<img src=${character['Img']} alt='image of the character Ana from Overwatch' class='img-character'>";
            } ?>
        </div>

        <div class="skills-container">
            <div class="liste-skills">
                <?php
                echo '<select onchange="setSkill()" id="selectSkill">';
                $i = 0;
                if (isset($getSkills)) {
                    foreach ($getSkills as $skill) {
                        echo "<script>sessionStorage.setItem(${skill['SkillID']}, '${skill['Video']}')</script>";
                        echo "<option value='${skill['SkillID']}'>${skill['Name']}</option>";}
                }
                $i++;
                ?>
                </select>
            </div>
            <div class="div-skill">
                <video muted="muted" autoplay loop>
                    <source id="Video" type="video/webm" src='selectedSkill'>
                </video>
                <p class="p-skill globale-margin">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cupiditate exercitationem, doloribus delectus quasi laboriosam totam cum nesciunt recusandae, nostrum corporis iure nam, ea odio. Ut nesciunt rem possimus natus.
                </p>
            </div>
        </div>
        <!--
        <main class="main-characters-desktop">
            <div class="div-liste-charac">
            </div>
            <div class="div-characters">
                <div class="div-img-charac">
                    <img  alt="icon ana character overwatch" class="img-character-2">
                    <h2 class="h2-character-2">Ana</h2>
                    <p class="p-character-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, amet. Veritatis quam praesentium sapiente nisi animi. Maiores illum qui impedit nostrum totam, voluptates itaque ipsam porro consectetur ab quasi repellendus?
                    </p>
                </div>
            </div>
            </main
          -->
    </div>
<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'/views/template.php');
