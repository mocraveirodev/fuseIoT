<?php
    $rotas = key($_GET)?key($_GET):"home";

    switch($rotas){
        case "home":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "academy":
            include "controllers/AcademyController.php";
            $controller = new AcademyController();
            $controller->acao($rotas);
        break;
    }
?>