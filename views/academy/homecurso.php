<?php
    include_once('views/includes/phpmailer.php');
    include_once('views/includes/smtp.php');
    include_once('views/includes/envio.php');
    $sobrenome = explode(" ", $_SESSION['usuario']->sobrenome);
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
    <link rel="stylesheet" type="text/css" href="views/css/styleCurso.css">
    <link rel="stylesheet" type="text/css" href="views/css/auxiliar.css">
    <link rel="stylesheet" type="text/css" href="views/css/grade.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">
    <?php include "views/includes/cabeçalho.php"; ?>

    <div class="site">
        <?php include "views/includes/menu.php"; ?>

        <div class="base-geral">
            <?php
                $link = is_numeric($_GET["homecurso"]) ? $_GET["homecurso"] : 0;
                $pag = ["views/includes/home_curso.php","views/includes/meus_cursos.php","views/includes/curso.php","views/includes/aula.php","views/includes/perfil.php","views/includes/comentario.php"];
                if(file_exists($pag[$link])){
                    include $pag[$link];
                }else{
                    include "views/includes/home_curso.php"; // ou criar um arquivo pra erro 404
                }
            ?>

            <?php include "views/includes/rodapé.php"; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
    <script type="text/javascript" src="./views/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./views/js/js.js"></script>	
</body>
</html>