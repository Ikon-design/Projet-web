<?php $title = 'Overwatch | Login'; ?>

<?php ob_start(); ?>

    <h1>Connexion</h1>
    <form action='' method='post'>
        <input name='matricule' value='Kik0uDu13kl'></input>
        <input type='password' name='psw' value='Azerty1234'></input>
        <input type='submit'>J'accepte le contrat et les conditions</input>
    </form>

<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'views/template.php');