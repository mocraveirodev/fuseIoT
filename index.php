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
        case "goacademy":
            include "controllers/AcademyController.php";
            $controller = new AcademyController();
            $controller->acao($rotas);
        break;
        case "homecurso":
            include "controllers/AcademyController.php";
            $controller = new AcademyController();
            $controller->acao($rotas);
        break;
        case "conceitosbasicos":
            include "controllers/AcademyController.php";
            $controller = new AcademyController();
            $controller->acao($rotas);
        break;
        case "login":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        case "logar":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        case "logout":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        case "alterasenha":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        case "novasenha":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
    }
?>