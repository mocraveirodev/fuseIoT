<?php
    $rotas = key($_GET)?key($_GET):"home";

    switch($rotas){
        case "home": //Direciona para pagina com todos os posts
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
    }
?>