<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link type="text/css" rel="stylesheet" href="../public/css/reset.css">
    <link type="text/css" rel="stylesheet" href="../public/css/header.css">
    <link type="text/css" rel="stylesheet" href="../public/css/characters.css">
    <link type="text/css" rel="stylesheet" href="../public/css/main.css">

</head>
<body>
    <?php include("header.php");?>
    <?= $content ?>
    <script src="../public/script/script.js"></script>
</body>
</html>