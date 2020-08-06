<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Fuse IoT é uma StartUp especializada em soluções IoT, que fornece transformação digital para empresas e pessoas que querem melhorar seus indicativos, controlar seus ativos e obter melhores resultados com tecnologias baseadas em IoT e Inteligência Artificial.">
    <meta name="keywords" content="IoT,Internet of Things,Internet das Coisas,Inteligência artificial,Big Data,Analytics,Hardware,Conectividade,Segurança">
    <meta name="author" content="Monica Craveiro">
    <title><?= $_SESSION['title'] ?></title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="views/img/favicon.ico" type="image/x-icon">
    <!-- RESET CSS -->
    <link rel="stylesheet" href="views/css/reset.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS PERSONALIZADO-->
    <link rel="stylesheet" href="views/css/academy.css">
    <link rel="stylesheet" href="views/css/m-academy.css">
</head>
<body>
    <header id="header-academy">
        <nav data-scroll-header class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container">
                <a data-scroll class="navbar-brand" href="#header-academy"><img class="header-logo" src="views/img/Logo Fuse IoT Academy.png" alt="Logo Fuse IoT Academy"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarAcademy" aria-controls="navbarAcademy" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarAcademy">
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class=" nav-link btn" href="/?carrinho" role="button">
                                <img src="views/img/01 carrinho de compra.png" class="carrinho" alt="Carrinho de Compras">
                            </a>
                        </li>
                        <?php if(!isset($_SESSION['usuario'])): ?>
                            <li class="nav-item">
                                <a data-scroll class="nav-link btn btn-academy" href="/?login">Entrar</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a data-scroll class="nav-link btn btn-academy" href="/?perfil">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a data-scroll class="nav-link btn btn-academy" href="/?logout">Sair</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <nav aria-label="breadcrumb" class="nav-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="/?curso">Home</a></li>
                </ol>
            </div>
        </nav>
    </header>

    <main>
        <section id="banner">
            <div class="text-banner">
                <div class="container">
                    <h1 class="titulo-banner">Olá <?= $_SESSION['usuario']->nome ?>,</h1>
                    <p class="sub-banner">
                        <?php if($_SESSION['qtdlogin'] <= 1): ?>
                            Bem-vindo ao curso
                        <?php else: ?>
                            Bem-vindo de volta ao curso
                        <?php endif; ?>
                    </p>
                    <p class="curso text-uppercase"><?= $_SESSION['progresso']->progresso ?></p>
                </div>
                <!-- <h1 class="titulo-banner">Bem-vindo a <span class="logofuse">fuse | <span class="logoiot">IoT</span></span> Academy</h1>
                <p class="sub-banner">Queremos habilitar o aluno para entender toda a cadeia de valor de IoT, fornecendo uma base sólida de conhecimento para a entrega de um produto final com qualidade e competitividade.</p>
                <a data-scroll class="btn btn-banner" href="#cursos">NOSSOS CURSOS</a>
                <a data-scroll class="btn btn-banner" href="#especializacoes">ESPECIALIZAÇÕES</a> -->
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
    <script src="./views/js/tab.js"></script>
    <script src="./views/js/youtubescriptLP.js"></script>
</body>
</html>