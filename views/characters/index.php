<?php $title = 'Overwatch | Personnages';?>

<?php ob_start(); $image = $character["Img"]; $style = "background-image: url($image)";?>
<main class='main-character'>
    <div class="characters-content display-flex ">
        <select id="selectCharacter" class="selectCharacter globale-margin" onchange="setUrl()">
            <?php
            if (isset($characters)) {
                foreach ($characters as $Allcharacter){
                    echo "<option value='${Allcharacter['CharacterID']}'>${Allcharacter['Name']}</option>";
                }
            }
            ?>
        </select>
        <?php echo "<div class='character-info display-flex flex-direction-column globale-padding' style='${style}'>
            <div class='container-character-info'>
            <h2 class='h2-character'>${character['Name']}</h2>
            <div class='${character['Type']} type'>${character['Type']}</div>
            </div>
            <p class='p-character globale-padding'>
                ${character['Description']}";?>
            </p>
        </div>
        <div class="right-block-character display-flex flex-direction-column">
        <div class="main-characters-mobile display-flex flex-direction-column ">
            <div class="display-flex icon-character-container globale-padding">
                <?php
                    foreach ($characters as $allCharacter){
                        echo "<a class='team-mate-character characters' href='/characters/index/${allCharacter['CharacterID']}'><img src=$allCharacter[Icon]></a>";
                    }
                ?>
            </div>
        </div>

        <div class="skills-container display-flex flex-direction-column">
            <div class="liste-skills display-flex globale-padding">
                <?php
                echo '<img id="skillIcon" class="skill-icon" src="" /> <select onchange="setSkill()" id="selectSkill" class="skill-select">';
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
                <p class="p-skill globale-padding" id="description">
                </p>
                <video id="Video" muted="muted" autoplay loop class="video">
                    <source type="video/webm" src=''>
                </video>
            </div>
        </div>
        </div>
    </div>
</main>
<?php $content = ob_get_clean(); require (ROOT.'views/template.php');?>
