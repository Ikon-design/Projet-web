<?php $title = 'Overwatch | Login'; ?>

<?php ob_start(); ?>
<main class="display-flex flex-direction-column center main-login">
    <h1 class="article-title login-title">Connexion</h1>
    <form action='' method='post' class="display-flex flex-direction-column center">
        <input name='matricule' value=''></input>
        <input type='password' name='psw' value=''></input>
        <input class="button" type='submit'/>
    </form>
</main>

<?php $content = ob_get_clean(); ?>

<?php require (ROOT.'views/template.php');