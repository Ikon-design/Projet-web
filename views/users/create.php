<?php $title = "Page de profil" ?>

<?php ob_start();?>
<dialog id='addMember'>
    <form>
        <input type='text' name='Pseudo' placeholder='Pseudo'>
        <input type='text' name='Lname' placeholder='Nom'>
        <input type='text' name='Fname' placeholder='Prénom' >
        <input type='email' name='Mail' placeholder='Mail' >
        <select name='CharacterID'>";
            foreach ($getCharacters as $characters){
            echo "<option value='${characters['CharacterID']}'>${characters['Name']}</option>";
            }
            echo "
            <input type='submit' value='Valider' formaction=${url}>
            <button onclick='cancelChange()'>Annuler</button>
    </form>
</dialog>
<?php
$content = ob_get_clean();
include (ROOT.'views/template.php')
?>
