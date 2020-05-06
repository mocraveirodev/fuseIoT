<?php
    include_once('views/includes/phpmailer.php');
    include_once('views/includes/smtp.php');
    include_once('views/includes/envio.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Fuse IoT é uma StartUp especializada em soluções IoT, que fornece transformação digital para empresas e pessoas que querem melhorar seus indicativos, controlar seus ativos e obter melhores resultados com tecnologias baseadas em IoT e Inteligência Artificial.">
    <meta name="keywords" content="IoT,Internet of Things,Internet das Coisas,Inteligência artificial,Big Data,Analytics,Hardware,Conectividade,Segurança">
    <meta name="author" content="Monica Craveiro">
    <title>fuse | IoT Academy</title>
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/styleCurso.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">
    <main>
        <section id="cursos">
            <div class="top">
                <h3 class="titulo-trilhas">
                    <img src="views/img/logofuse.png" class="logotrilha" alt="Logo Fuse IoT"> 
                    Trilhas de Aprendizagem
                </h3>
    
                <div class="dropdown">
                    <a href="" class="btn btn-success btn-user dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Olá, <?=$_SESSION['usuario']->nome?>!
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/?">fuse | IoT</a>
                        <a class="dropdown-item" href="/?goacademy">fuse | Academy</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/?logout">Logout</a>
                    </div>
                </div>
            </div>

            <div class="cursos">
                <a href="/?conceitosbasicos" class="btn btn-primary">Conceitos Básicos</a>
                <a class="btn btn-secondary disabled" aria-disabled="true">Conceitos de Hardware</a>
                <a class="btn btn-secondary disabled" aria-disabled="true">Conceitos de Software</a>
                <a class="btn btn-secondary disabled" aria-disabled="true">Conectividade</a>
                <a class="btn btn-secondary disabled" aria-disabled="true">Segurança</a>
                <a class="btn btn-secondary disabled" aria-disabled="true">Arquitetura - Cases</a>
                <a class="btn btn-secondary disabled" aria-disabled="true">Legislação</a>
                <a class="btn btn-secondary disabled" aria-disabled="true">Negócios</a>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
</body>
</html>