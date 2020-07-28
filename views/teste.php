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
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="views/img/favicon.ico" type="image/x-icon">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/3e0edc3a21.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="views/css/teste.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-academy">
    <nav data-scroll-header class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container">
                <a data-scroll class="navbar-brand" href="#header"><img class="header-logo" src="views/img/Logo Fuse IoT Academy.png" alt="Logo Fuse IoT Academy"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class=" nav-link btn" href="/?carrinho" role="button">
                            <img src="views/img/01 carrinho de compra.png" class="carrinho" alt="Carrinho de Compras">
                        </a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll class="nav-link btn btn-academy" href="/?login">Entrar</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a data-scroll class="nav-link btn btn-academy" href="#academy">Academy</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="banner">
            <div class="text-banner">
                <h1 class="titulo-banner">Bem-vindo a fuse | IoT Academy</h1>
                <p class="sub-banner">Queremos habilitar o aluno para entender toda a cadeia de valor de IoT, fornecendo uma base sólida de conhecimento para a entrega de um produto final com qualidade e competitividade.</p>
                <a data-scroll class="btn btn-banner" href="#cursos">NOSSOS CURSOS</a>
                <a data-scroll class="btn btn-banner" href="#especializacoes">ESPECIALIZAÇÕES</a>
            </div>
        </section>
        <section id="cards">
            <div class="container">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <img src="views/img/Iconeroxo.png" class="icon-card" alt="Icone Card Roxo">
                            <h5 class="card-title">Atualizações gratuitas</h5>
                            <ul>
                                <li><i class="fas fa-check"></i> Atualizações do mercado de criptomoedas.</li>
                                <li><i class="fas fa-check"></i> Entrevistas com líderes da indústria.</li>
                                <li><i class="fas fa-check"></i> Torne-se um profissional melhor.</li>
                            </ul>
                            <a data-scroll class="btn btn-card" href="#cursos">EXPLORAR CURSOS</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="views/img/Iconeroxo.png" class="icon-card" alt="Icone Card Roxo">
                            <h5 class="card-title">Atualizações gratuitas</h5>
                            <ul>
                                <li><i class="fas fa-check"></i> Atualizações do mercado de criptomoedas.</li>
                                <li><i class="fas fa-check"></i> Entrevistas com líderes da indústria.</li>
                                <li><i class="fas fa-check"></i> Torne-se um profissional melhor.</li>
                            </ul>
                            <a data-scroll class="btn btn-card" href="#cursos">EXPLORAR CURSOS</a>    
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="views/img/Iconeroxo.png" class="icon-card" alt="Icone Card Roxo">
                            <h5 class="card-title">Atualizações gratuitas</h5>
                            <ul>
                                <li><i class="fas fa-check"></i> Atualizações do mercado de criptomoedas.</li>
                                <li><i class="fas fa-check"></i> Entrevistas com líderes da indústria.</li>
                                <li><i class="fas fa-check"></i> Torne-se um profissional melhor.</li>
                            </ul>
                            <a data-scroll class="btn btn-card" href="#cursos">EXPLORAR CURSOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
    <?php
        // if(isset($_SESSION['modalInfo'])){
        //     if(($_SESSION['mailresult'] == "") && ($_SESSION['ErrorInfo'] == "")){
        //         echo "<script>$('#modalInfo').modal('show');</script>";
        //         unset($_SESSION['modalInfo']);
        //     }else{
        //         echo "<script>$('#modalInfo').modal('hide');</script>";
        //         unset($_SESSION['modalInfo']);
        //     }
        // }

        if(isset($_SESSION['mailresult'])){
            if($_SESSION['mailresult'] != ""){
                echo "<script>$('#modalOk').modal('show');</script>";
                unset($_SESSION['mailresult']);
            }else{
                echo "<script>$('#modalInfo').modal('hide');</script>";
                unset($_SESSION['modalInfo']);
            }
        }

        if(isset($_SESSION['ErrorInfo'])){
            if($_SESSION['ErrorInfo'] != ""){
                echo "<script>$('#modalErro').modal('show');</script>";
                unset($_SESSION['ErrorInfo']);
            }else{
                echo "<script>$('#modalInfo').modal('hide');</script>";
                unset($_SESSION['modalInfo']);
            }
        }
    ?>
</body>
</html>