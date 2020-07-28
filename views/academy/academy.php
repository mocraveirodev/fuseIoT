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
    <link rel="stylesheet" href="views/css/styleAcademy.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="100">
    <header>
        <nav data-scroll-header class="navbar navbar-expand-lg navbar-dark navbarChange fixed-top">
            <div class="container">
                <a data-scroll class="navbar-brand" href="/?"><img src="views/img/LogoFusefooter.svg" class="logonav" alt="Logo Fuse IoT"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a data-scroll class="nav-link" href="#inicio">Início</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll class="nav-link" href="#objetivo">Objetivo</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll class="nav-link" href="#habilidades">Habilidades</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll class="nav-link" href="#trilhas">Trilhas</a>
                        </li>
                    </ul>
                    <!-- <a href="/?login" class="btn btn-outline-light">Entrar</a> -->
                    <a href="/?embreve" class="btn btn-outline-light">Entrar</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="inicio">
            <h1 class="bemvindo d-none d-md-block">Bem-vindo a fuse | IoT Academy</h1>
            <h1 class="bemvindo d-block d-md-none">Bem-vindo a</h1>
            <h1 class="bemvindo d-block d-md-none">fuse | IoT Academy</h1>
            <img src="views/img/logofusebranco.png" class="logofuse d-none d-md-block" alt="Logo Fuse IoT">
            <p class="brand">Dare the status. Innovate with us.</p>
        </section>
        <section id="objetivo">
            <h2 class="objetivo"><i class="fas fa-fw fa-quote-left text-secondary"></i> Queremos habilitar o aluno para entender toda a cadeia de valor de IoT, fornecendo uma base sólida de conhecimento para a entrega de um produto final com qualidade e competitividade. <i class="fas fa-fw fa-quote-right text-secondary"></i></h2>
        </section>
        <section id="habilidades">
            <img src="views/img/habilidades.png" class="habilidades" alt="Habilidades Academy">
        </section>
        <section id="trilhas">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-5">
                        <h3 class="titulo-trilhas">
                            <img src="views/img/logofuse.png" class="logotrilha" alt="Logo Fuse IoT"> 
                            Trilhas de Aprendizagem
                        </h3>
                        <div class="trilhas">
                            <button class="btn btn-primary btn-sm btn-block" type="button" data-toggle="collapse" data-target="#basicos" aria-expanded="false" aria-controls="basicos">1 - Conceitos Básicos</button>
                            <div class="collapse" id="basicos">
                                <div class="card card-body">
                                    <ul>
                                        <li>História do IoT</li>
                                        <li>Casos de uso</li>
                                        <li>Eletrônica básica - I</li>
                                        <li>Telecom - Conectividade</li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-warning btn-sm btn-block" type="button" data-toggle="collapse" data-target="#hardware" aria-expanded="false" aria-controls="hardware">2 - Conceitos de Hardware</button>
                            <div class="collapse" id="hardware">
                                <div class="card card-body">
                                    <ul>
                                        <li>Eletrônica básica – II</li>
                                        <li>Processadores e Controladores</li>
                                        <li>Tipos de transmissão sem fio</li>
                                        <li>Kits de Desenvolvimento</li>
                                        <li>Arquitetura</li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-success btn-sm btn-block" type="button" data-toggle="collapse" data-target="#software" aria-expanded="false" aria-controls="software">3 - Conceitos de Software</button>
                            <div class="collapse" id="software">
                                <div class="card card-body">
                                    <ul>
                                        <li>Noções de programação</li>
                                        <li>Principais linguagens utilizadas</li>
                                        <li>Software Embarcado</li>
                                        <li>EdgeComputing</li>
                                        <li>Cloud e Blockchain</li>
                                        <li>Plataformas</li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-sm btn-block" type="button" data-toggle="collapse" data-target="#conectividade" aria-expanded="false" aria-controls="conectividade">4 - Conectividade</button>
                            <div class="collapse" id="conectividade">
                                <div class="card card-body">
                                    <ul>
                                        <li>Conceitos de: LoRa, SigFox, NB-IoT, 2G, 3G, 4G e 5G, Zigbee, WiFi, BLE, NFC, RFiD, Satélite, UHF, Ultrasom</li>
                                        <li>Protocolos</li>
                                        <li>Codecs</li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm btn-block" type="button" data-toggle="collapse" data-target="#seguranca" aria-expanded="false" aria-controls="seguranca">5 - Segurança</button>
                            <div class="collapse" id="seguranca">
                                <div class="card card-body">
                                    <ul>
                                        <li>LGPD</li>
                                        <li>CiberSegurança</li>
                                        <li>Criptografia</li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-sm btn-block" type="button" data-toggle="collapse" data-target="#arquitetura" aria-expanded="false" aria-controls="arquitetura">6 - Arquitetura - Cases</button>
                            <div class="collapse" id="arquitetura">
                                <div class="card card-body">
                                    <ul>
                                        <li>Avaliação de cenários</li>
                                        <li>Criação de ecossistemas</li>
                                        <li>Infraestrutura</li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-success btn-sm btn-block" type="button" data-toggle="collapse" data-target="#legislacao" aria-expanded="false" aria-controls="legislacao">7 - Legislação</button>
                            <div class="collapse" id="legislacao">
                                <div class="card card-body">
                                    <ul>
                                        <li>Propriedade Intelectual</li>
                                        <li>Homologação Anatel, Everynet, Inmetro, ONA, JCI, ANVISA e etc.</li>
                                        <li>Frequências Licenciadas e Não-Licenciadas</li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-warning btn-sm btn-block" type="button" data-toggle="collapse" data-target="#negocios" aria-expanded="false" aria-controls="negocios">8 - Negócios</button>
                            <div class="collapse" id="negocios">
                                <div class="card card-body">
                                    <ul>
                                        <li>Modelo CAPEX e OPEX</li>
                                        <li>Modelo SaaS e PaaS</li>
                                        <li>CX e UX</li>
                                        <li>ROI</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-5">
                        <h3 class="titulo-trilhas">
                            <img src="views/img/logofuse.png" class="logotrilha" alt="Logo Fuse IoT"> 
                            Especializações
                        </h3>
                        <div class="row">
                            <div class="col-md-6 offset-md-6 text-center">
                                <img src="views/img/smartcities.png" class="verticais" alt="Smartcities">
                                <p class="verticais-texto text-white">Smartcities</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <img src="views/img/agro.png" class="verticais" alt="Agrobusiness">
                                <p class="verticais-texto text-white">Agrobusiness</p>
                            </div>
                            <div class="col-md-6 offset-md-6 text-center">
                                <img src="views/img/health.png" class="verticais" alt="Health">
                                <p class="verticais-texto text-white">Health</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <img src="views/img/industria.png" class="verticais" alt="Indústria 4.0">
                                <p class="verticais-texto text-white">Indústria 4.0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="modal fade" id="modalEmBreve" tabindex="-1" role="dialog" aria-labelledby="modalEmBreveTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <img src="views/img/LogoFusenav.svg" class="logonav" alt="Logo Fuse IoT">
                    <h5 class="modal-title" id="modalEmBreveTitle">Em breve fuse | IoT Academy</h5>
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

    <?php include_once 'views/includes/redessociais.php'; ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
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