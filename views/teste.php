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
                <h1 class="titulo-banner">Bem-vindo a <span class="logofuse">fuse | <span class="logoiot">IoT</span></span> Academy</h1>
                <p class="sub-banner">Queremos habilitar o aluno para entender toda a cadeia de valor de IoT, fornecendo uma base sólida de conhecimento para a entrega de um produto final com qualidade e competitividade.</p>
                <a data-scroll class="btn btn-banner" href="#cursos">NOSSOS CURSOS</a>
                <a data-scroll class="btn btn-banner" href="#especializacoes">ESPECIALIZAÇÕES</a>
            </div>
        </section>
        <section id="sobre">
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

                <div class="sobre">
                    <h3 class="titulo-sobre">SOBRE NÓS</h3>
                    <p class="texto-sobre">Queremos habilitar o aluno para entender toda a cadeia de valor de IoT, fornecendo uma base sólida de conhecimento para a entrega de um produto final com qualidade e competitividade. Queremos habilitar o aluno para entender toda a cadeia de valor de IoT, fornecendo uma base sólida de conhecimento para a entrega de um produto final com qualidade e competitividade.</p>
                    <div id="player"></div>
                </div>
            </div>
        </section>
        <section id="tema">
            <div class="container">
                <h2 class="titulo-tema">TEMA</h2>
                <p class="texto-tema">Queremos habilitar o aluno para entender toda a cadeia de valor de IoT, fornecendo uma base sólida de conhecimento para a entrega de um produto final com qualidade e competitividade.</p>
                <div class="tematabs">
                    <ul>
                        <li onclick="showTab('ideacao')">
                            <img class="imgtabbtn" src="views/img/Escopo Projeto.png" alt="Imagen tab Botão">
                            <span>P&D</span>
                            <span>Definição de Escopo</span>
                        </li>
                        <li onclick="showTab('escopo')">
                        <img class="imgtabbtn" src="views/img/idealização.png" alt="Imagen tab Botão">
                        <span>Ideação Arquitetura</span>
                        <span>Ecossistema</span>
                        </li>
                        <li onclick="showTab('prototipo')">
                            <img class="imgtabbtn" src="views/img/prototipo.png" alt="Imagen tab Botão">
                            <span>Prototipagem</span>
                            <span>MVP POC</span>
                        </li>
                        <li onclick="showTab('producao')">
                            <img class="imgtabbtn" src="views/img/produção.png" alt="Imagen tab Botão">
                            <span>Produção Fabricação Entrega</span>
                            <span>Modelo de Negocio</span>
                        </li>
                    </ul>
                
                    <div id="ideacao" class="temacontent">
                        <div class="borda">
                            <div class="seta top">
                                <div class="arrow down"></div>
                                <div class="arrow down-b"></div>
                            </div>
                            <div class="seta"></div>
                            <div class="seta"></div>
                            <div class="seta"></div>
                        </div>
                        <div class="content">
                            <div class="temaimg">
                                <img class="imgtab" src="views/img/tabs.jpg" alt="Imagem Tabs">
                            </div>
                            <div class="tematexto">
                                <p class="titulotab">Cada curso é um livro interativo, com vídeos, questionários e projetos com fio pré-selecionados.</p>
                                <p class="textotab">Acelere o desempenho de sua equipe atribuindo tarefas, comunicando e acompanhando o progresso em um só lugar. Você sabia qe somos uma das primeiras empresas a oferecer uma opção de hospedagem a UE para nossos clientes europeus.</p>
                            </div>
                        </div>
                    </div>
                    <div id="escopo" class="temacontent">
                        <div class="borda">
                            <div class="seta"></div>
                            <div class="seta top">
                                <div class="arrow down"></div>
                                <div class="arrow down-b"></div>
                            </div>
                            <div class="seta"></div>
                            <div class="seta"></div>
                        </div>
                        <div class="content">
                            <div class="temaimg">
                                <img class="imgtab" src="views/img/tabs.jpg" alt="Imagem Tabs">
                            </div>
                            <div class="tematexto">
                                <p class="titulotab">Cada curso é um livro interativo, com vídeos, questionários e projetos com fio pré-selecionados.</p>
                                <p class="textotab">Acelere o desempenho de sua equipe atribuindo tarefas, comunicando e acompanhando o progresso em um só lugar. Você sabia qe somos uma das primeiras empresas a oferecer uma opção de hospedagem a UE para nossos clientes europeus.</p>
                            </div>
                        </div>
                    </div>
                    <div id="prototipo" class="temacontent">
                        <div class="borda">
                            <div class="seta"></div>
                            <div class="seta"></div>
                            <div class="seta top">
                                <div class="arrow down"></div>
                                <div class="arrow down-b"></div>
                            </div>
                            <div class="seta"></div>
                        </div>
                        <div class="content">
                            <div class="temaimg">
                                <img class="imgtab" src="views/img/tabs.jpg" alt="Imagem Tabs">
                            </div>
                            <div class="tematexto">
                                <p class="titulotab">Cada curso é um livro interativo, com vídeos, questionários e projetos com fio pré-selecionados.</p>
                                <p class="textotab">Acelere o desempenho de sua equipe atribuindo tarefas, comunicando e acompanhando o progresso em um só lugar. Você sabia qe somos uma das primeiras empresas a oferecer uma opção de hospedagem a UE para nossos clientes europeus.</p>
                            </div>
                        </div>
                    </div>
                    <div id="producao" class="temacontent">
                        <div class="borda">
                            <div class="seta"></div>
                            <div class="seta"></div>
                            <div class="seta"></div>
                            <div class="seta top">
                                <div class="arrow down"></div>
                                <div class="arrow down-b"></div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="temaimg">
                                <img class="imgtab" src="views/img/tabs.jpg" alt="Imagem Tabs">
                            </div>
                            <div class="tematexto">
                                <p class="titulotab">Cada curso é um livro interativo, com vídeos, questionários e projetos com fio pré-selecionados.</p>
                                <p class="textotab">Acelere o desempenho de sua equipe atribuindo tarefas, comunicando e acompanhando o progresso em um só lugar. Você sabia qe somos uma das primeiras empresas a oferecer uma opção de hospedagem a UE para nossos clientes europeus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cursos">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1 d-flex justify-content-start align-items-center p-0">
                        <div class="azul"></div>
                    </div>
                    <div class="col-10">
                        <h2 class="titulo-cursos">CURSOS</h2>
                        <p class="texto-cursos">Queremos habilitar o aluno para entender toda a cadeia de valor de IoT, fornecendo uma base sólida de conhecimento para a entrega de um produto final com qualidade e competitividade.</p>
                        <div class="cursos">
                            <div class="row row-cols-1 row-cols-md-4">
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/conceitosbasicos.jpg" class="card-img-top" alt="Curso Conceitos Básicos">
                                        <div class="card-body">
                                            <small class="text-primary">Módulo 1</small>
                                            <h5 class="card-title">Conceitos Básicos</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn" href="#cursos"><img src="views/img/Olgo verde ícon.png" alt="Ver Curso"></a>
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/conceitohw.jpg" class="card-img-top" alt="Curso Conceitos de Hardware">
                                        <div class="card-body">
                                            <small class="text-primary">Módulo 2</small>
                                            <h5 class="card-title">Conceitos de Hardware</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn" href="#cursos"><img src="views/img/Olgo verde ícon.png" alt="Ver Curso"></a>
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/conceitosw.jpg" class="card-img-top" alt="Curso Conceitos de Software">
                                        <div class="card-body">
                                            <small class="text-primary">Módulo 3</small>
                                            <h5 class="card-title">Conceitos de Software</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn" href="#cursos"><img src="views/img/Olgo verde ícon.png" alt="Ver Curso"></a>
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/conectividade.jpg" class="card-img-top" alt="Curso Conectividade">
                                        <div class="card-body">
                                            <small class="text-primary">Módulo 4</small>
                                            <h5 class="card-title">Conectividade</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn" href="#cursos"><img src="views/img/Olgo verde ícon.png" alt="Ver Curso"></a>
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/segurança.jpg" class="card-img-top" alt="Curso Segurança">
                                        <div class="card-body">
                                            <small class="text-primary">Módulo 5</small>
                                            <h5 class="card-title">Segurança</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn" href="#cursos"><img src="views/img/Olgo verde ícon.png" alt="Ver Curso"></a>
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/arquitetura.jpeg" class="card-img-top" alt="Curso Arquitetura - Cases">
                                        <div class="card-body">
                                            <small class="text-primary">Módulo 6</small>
                                            <h5 class="card-title">Arquitetura - Cases</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn" href="#cursos"><img src="views/img/Olgo verde ícon.png" alt="Ver Curso"></a>
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/legilação.jpg" class="card-img-top" alt="Curso Legislação">
                                        <div class="card-body">
                                            <small class="text-primary">Módulo 7</small>
                                            <h5 class="card-title">Legislação</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn" href="#cursos"><img src="views/img/Olgo verde ícon.png" alt="Ver Curso"></a>
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/negocios.jpg" class="card-img-top" alt="Curso Negócios">
                                        <div class="card-body">
                                            <small class="text-primary">Módulo 7</small>
                                            <h5 class="card-title">Negócios</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn" href="#cursos"><img src="views/img/Olgo verde ícon.png" alt="Ver Curso"></a>
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 d-flex justify-content-end align-items-center p-0">
                        <div class="azul"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="especializacoes">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h2 class="titulo-especializacao">ESPECIALIZAÇÕES</h2>
                        <p class="texto-especializacao">Queremos habilitar o aluno para entender toda a cadeia de valor de IoT, fornecendo uma base sólida de conhecimento para a entrega de um produto final com qualidade e competitividade.</p>
                        <div class="cursos">
                            <div class="row row-cols-1 row-cols-md-4">
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/conceitosbasicos.jpg" class="card-img-top" alt="Curso Especialização Smartcities">
                                        <div class="card-body">
                                            <small class="text-primary">Especialização</small>
                                            <h5 class="card-title">Smartcities</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">CONHEÇA</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/agro.jpg" class="card-img-top" alt="Curso Especialização Agronegócio">
                                        <div class="card-body">
                                            <small class="text-primary">Especialização</small>
                                            <h5 class="card-title">Agronegócio</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">CONHEÇA</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/saude.png" class="card-img-top" alt="Curso Especialização Saúde">
                                        <div class="card-body">
                                            <small class="text-primary">Especialização</small>
                                            <h5 class="card-title">Saúde</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">CONHEÇA</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                        <img src="views/img/industria.jpg" class="card-img-top" alt="Curso Especialização Indústria 4.0">
                                        <div class="card-body">
                                            <small class="text-primary">Especialização</small>
                                            <h5 class="card-title">Indústria 4.0</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a data-scroll class="btn btn-success text-white" href="#cursos">CONHEÇA</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
    <script src="./views/js/tab.js"></script>
    <script src="./views/js/youtubescriptLP.js"></script>
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