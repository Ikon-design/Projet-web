<?php
 define("ROOT", str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
 date_default_timezone_set("Europe/Paris");
 include(ROOT.'app/Controller.php');
 include(ROOT.'app/Model.php');

 //Sépare les parametre de l'url a partir des '/'
 $params = explode('/', $_GET['p']);

 if($params[0] != ""){
     // Met un maj sur la premiere lettre du premier parametre
     $controller = ucfirst($params[0]);
     // Test si un deuxieme parametre existe sinon renvoie index
     $action = isset($params[1]) ? $params[1] : 'index';
     // Import le fichier php appelé avec l'url
     include (ROOT.'controllers/'.$controller.'.php');

     $controller = new $controller();
     $controller->$action();
     if (method_exists($controller, $action)){
         $controller->action();
     }else{
         http_response_code(404);
         echo "La page demandée n'existe pas";
     }
 }else{
    include (ROOT.'controllers/Main.php');
    $controller = new Main();
    $controller->index();
 }

 // indexView();
