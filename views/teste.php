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
    <!-- <link rel="stylesheet" href="views/css/reset.css"> -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS PERSONALIZADO-->
    <link rel="stylesheet" href="views/css/teste.css">
    <link rel="stylesheet" href="views/css/m-teste.css">
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
                                            <a data-scroll class="btn btn-success text-white" href="/?carrinho">COMPRAR</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?carrinho">COMPRAR</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?carrinho">COMPRAR</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?carrinho">COMPRAR</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?carrinho">COMPRAR</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?carrinho">COMPRAR</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?carrinho">COMPRAR</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?carrinho">COMPRAR</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?embreveteste">CONHEÇA</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?embreveteste">CONHEÇA</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?embreveteste">CONHEÇA</a>
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
                                            <a data-scroll class="btn btn-success text-white" href="/?embreveteste">CONHEÇA</a>
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
        <section id="modal">
            <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between">
                            <img src="views/img/LogoFusenav.svg" class="logonav" alt="Logo Fuse IoT">
                            <h5 class="modal-title" id="modalLoginTitle">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="erro"><?php if(isset($_SESSION['errologin'])) echo $_SESSION['errologin'] ?></p>
                            <form action="/?login" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu e-mail" required>
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha:</label>
                                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira sua senha" minlength="8" required>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-sm btn-success">Login</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p class="sub">Esqueceu a senha ou é novo? <a href="/?alterasenha">Clique aqui</a>.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalAltera" tabindex="-1" role="dialog" aria-labelledby="modalAlteraTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <img src="views/img/LogoFusenav.svg" class="logonav" alt="Logo Fuse IoT">
                            <h5 class="modal-title" id="modalAlteraTitle">Alterar Senha</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="erro"><?php if(isset($_SESSION['erroemail'])) echo $_SESSION['erroemail'] ?></p>
                            <form action="/?novasenha" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="email">Informe o e-mail cadastrado:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu e-mail" required>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-sm btn-success">Alterar Senha</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <!-- <p class="sub">Lembrou a senha ou não é novo? <a href="/?logar">Clique aqui</a>.</p> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalSenha" tabindex="-1" role="dialog" aria-labelledby="modalSenhaTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <img src="views/img/LogoFusenav.svg" class="logonav" alt="Logo Fuse IoT">
                            <h5 class="modal-title" id="modalSenhaTitle">Alterar Senha</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="erro"><?php if(isset($_SESSION['errosenha'])) echo $_SESSION['errosenha'] ?></p>
                            <form action="/?login" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="senha">Nova Senha:</label>
                                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira a nova senha" minlength="8" required>
                                </div>
                                <div class="form-group">
                                    <label for="confsenha">Confirme a Senha:</label>
                                    <input type="password" class="form-control" id="confsenha" name="confsenha" placeholder="Confirme a nova senha" minlength="8" required>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-sm btn-success">Alterar Senha</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <!-- <p class="sub">Lembrou a senha ou não é novo? <a href="/?logar">Clique aqui</a>.</p> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalEmBreve" tabindex="-1" role="dialog" aria-labelledby="modalEmBreveTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between">
                            <img src="views/img/LogoFusenav.svg" class="logonav" alt="Logo Fuse IoT">
                            <h5 class="modal-title" id="modalEmBreveTitle">Em breve <span class="logofuse">fuse | <span class="logoiot">IoT</span></span> Academy</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img class="logo-footer" src="views/img/Logo Fuse IoT Academy_branco.png" alt="Logo Fuse IoT Academy">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+551142008282">
                                <i class="fas fa-phone-alt mr-2"></i>
                                +55 11 4200 - 8282
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:contato@fuseiot.io">
                                <i class="far fa-envelope mr-2"></i>
                                contato@fuseiot.io
                            </a>
                        </li>
                    </ul>
                    <nav class="nav">
                        <a class="nav-link" href="https://www.linkedin.com/company/fuseiot/" target="_blank"><img class="social-logo" src="views/img/linkedin.svg" alt="Logo LinkedIn"></img></a>
                        <a class="nav-link" href="https://www.youtube.com/c/fuseiotacademy" target="_blank"><img class="social-logo" src="views/img/youtube.svg" alt="Logo YouTube"></img></a>
                        <a class="nav-link" href="https://www.instagram.com/fuseiotacademy/" target="_blank"><img class="social-logo" src="views/img/instagram.svg" alt="Logo Instagram"></img></a>
                        <a class="nav-link" href="https://www.facebook.com/fuseiotacademy/" target="_blank"><img class="social-logo" src="views/img/facebook.svg" alt="Logo Facebook"></img></a>
                        <a class="nav-link" href="https://www.tiktok.com/@fuseiotacademy" target="_blank"><img class="social-logo" src="views/img/tiktok.svg" alt="Logo TikTok"></img></a>
                    </nav>
                </div>
                <div class="col">
                    <a class="titulo-footer" href="#">COMPANHIA</a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Torne-se Professor</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <a class="titulo-footer" href="#">LIGAÇÕES</a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Perguntas Frequentes</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <a class="titulo-footer" href="#">APOIO, SUPORTE</a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Documentação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fóruns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pacotes de Idiomas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Status da Versão</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <a class="titulo-footer" href="#">RECOMENDAR</a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">WordPress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">LearnPress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">WooCommerce</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">bbPres</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
    <script src="./views/js/tab.js"></script>
    <script src="./views/js/youtubescriptLP.js"></script>

    <?php
        if($_SESSION['errologin'] != ""){
            if($_SESSION['errologin'] == "logar"){
                $_SESSION['errologin'] = "";
                echo "<script>$('#modalLogin').modal('show');</script>";
            }else{
                echo "<script>$('#modalLogin').modal('show');</script>";
            }
        }
        if(isset($_SESSION['alterasenha'])){
            if($_SESSION['alterasenha'] == "email"){
                echo "<script>$('#modalAltera').modal('show');</script>";
                unset($_SESSION['alterasenha']);
            }
            if($_SESSION['alterasenha'] == "senha"){
                echo "<script>$('#modalSenha').modal('show');</script>";
                unset($_SESSION['alterasenha']);
            }
        }
        if(isset($_SESSION['abreLogin'])){
            if($_SESSION['abreLogin'] == "login"){
                echo "<script>$('#modalLogin').modal('show');</script>";
                unset($_SESSION['abreLogin']);
            }
        }

        if(isset($_SESSION['emBreve'])){
            if($_SESSION['emBreve'] == "abre"){
                echo "<script>$('#modalEmBreve').modal('show');</script>";
                unset($_SESSION['emBreve']);
            }
        }
    ?>
</body>
</html>