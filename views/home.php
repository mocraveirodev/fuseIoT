<?php include_once 'views/includes/top.php'; ?>
    <header id="header">
        <nav data-scroll-header class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a data-scroll class="navbar-brand" href="#header"><img class="header-logo" src="views/img/LogoFusenav.svg" alt="Logo Fuse IoT"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a data-scroll class="nav-link" href="#iot">IoT</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll class="nav-link" href="#solucoes">Soluções</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll class="nav-link" href="#academy">Academy</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll class="nav-link" href="#contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="banner">
            <div class="container">
                <div class="banner-lead">
                    <h1 class="banner-titulo titulo">Vamos fazer seu negócio gerar ainda mais resultados</h1>
                    <p class="banner-texto">A <span>fuse | IoT</span> é uma StartUp focada em tecnologias de IoT e Inteligência Artificial, que gera resultados com aprimoramento de processos visando a melhoria contínua do seu negócio.</p>
                    <a data-scroll href="#contato" class="btn btn-padrao banner-btn btn-outline-success">Me ajude agora</a>
                </div>
            </div>
        </section>
        <section id="iot">
            <div class="container">
                <h3 class="titulo text-center">Você está preparado para a evolução digital?</h3>
                <h3 class="titulo text-center">A fuse | <span>IoT</span> te ajuda nessa!</h3>
                <p class="iot text-justify">Com ecossistemas completos, entregamos uma solução única para sua necessidade. Ajudamos a controlar e monitorar ambientes remotos, evitando desperdícios, aumentando a segurança com dados relevantes que agilizam a tomada de decisões. Use a tecnologia como sua aliada, e tenha redução de perdas e aumento de receita.</p>
                <div class="row justify-content-between">
                    <div class="col-md-6 order-md-1">
                        <h5 class="titulo">Smartcities</h5>
                        <p class="verticais">Soluções para cidades conectadas. Monitore e controle a iluminação pública, lixeiras inteligentes, smart parking e muito mais.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-success">Quero saber mais</a>
                    </div>
                    <div class="col-md-6 order-md-2">
                        <img class="bg-verticais" src="views/img/cities.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-4">
                        <h5 class="titulo">Agrobusiness</h5>
                        <p class="verticais">Aumente sua produtividade com monitoração climática e de solo, controle de temperatura e umidade, localização de ativos, rastreamento de bovino numa plataforma de gestão de fazendas.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-success">Quero saber mais</a>
                    </div>
                    <div class="col-md-6 order-md-3">
                        <img class="bg-verticais" src="views/img/boi.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-5">
                        <h5 class="titulo">Health</h5>
                        <p class="verticais">Evite desperdícios, reduza custos e riscos controlando a temperatura e o funcionamento de geladeiras de vacinas e medicamentos, tecidos e amostras, bolsas de sangue e plasma, para ambientes hospitalares, clínicas, medicina diagnóstica e centros de pesquisa.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-success">Quero saber mais</a>
                    </div>
                    <div class="col-md-6 order-md-6">
                        <img class="bg-verticais" src="views/img/health.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-8">
                        <h5 class="titulo">Indústria 4.0</h5>
                        <p class="verticais">Aumente a competitividade do seu negócio com melhora de eficiência operacional. Monitoração do funcionamento de máquinas e serviços otimizando manutenções preventivas, com controle de consumo elétrico, de água e gás.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-success">Quero saber mais</a>
                    </div>
                    <div class="col-md-6 order-md-7">
                        <img class="bg-verticais" src="views/img/ind.svg" alt="">
                    </div>
                </div>
            </div>            
        </section>
        <section id="solucoes">
            <div id="carouselSolucoes" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselSolucoes" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselSolucoes" data-slide-to="1"></li>
                    <li data-target="#carouselSolucoes" data-slide-to="2"></li>
                    <li data-target="#carouselSolucoes" data-slide-to="3"></li>
                    <li data-target="#carouselSolucoes" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item bov active">
                        <h4 class="carousel-titulo">SOLUÇÕES</h4>
                        <h5 class="titulo-solucao">Fuse Bov</h5>
                        <p class="texto-solucao">Solução para monitoramento e rastreamento de gado de corte gerando informações de localização, comportamento e comparativo com dados históricos compeltos de cada animal.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                    <div class="carousel-item utilities">
                        <h4 class="carousel-titulo">SOLUÇÕES</h4>
                        <h5 class="titulo-solucao">Fuse Utilities</h5>
                        <p class="texto-solucao">Monitore o consumo de água, gás e energia elétrica e evite desperdícios, identifique vazamentos, aumente a segurança no trabalho e reduza custos.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                    <div class="carousel-item temp">
                        <h4 class="carousel-titulo">SOLUÇÕES</h4>
                        <h5 class="titulo-solucao">Fuse Temp</h5>
                        <p class="texto-solucao">Solução completa para acompanhamento de temperatura, umidade, e contato binário (ligado/desligado, aberto/fechado), totalmente validável para hospitais e Inmetro.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                    <div class="carousel-item track">
                        <h4 class="carousel-titulo">SOLUÇÕES</h4>
                        <h5 class="titulo-solucao">Fuse Track</h5>
                        <p class="texto-solucao">Saiba tudo sobre sua frota, rastreie seus ativos, otimize rotas, ganhe agilidade, reduza custos e tenha mais segurança sobre seus bens e serviços.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                    <div class="carousel-item parking">
                        <h4 class="carousel-titulo">SOLUÇÕES</h4>
                        <h5 class="titulo-solucao">Fuse Parking</h5>
                        <p class="texto-solucao">Monitore vagas de estacionamento ou locais de parada proibida, receba alertas em tempo real em caso de infração e controle o tráfego de veículos em locais de estudo.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselSolucoes" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselSolucoes" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section id="academy">
            <img src="views/img/Logo Cima Letras Branco.png" class="academy" alt="Logo Fuse IoT Academy">
            <p>Dare the status. Innovate with us.</p>
            <a href="/?fuseiotacademy" class="btn btn-padrao btn-academy btn-success">Conheça a fuse | Academy</a>
        </section>
        <section id="naoEncontrou">
            <div class="naoEncontrou">
                <h3 class="naoEncontrou-titulo">Não encontrou o que você procurava?</h3>
                <p class="naoEncontrou-texto">Customizamos soluções sob medida para sua necessidade. Entre em contato e te ajudaremos a tornar a sua imaginação o limite para resolver problemas com IoT!</p>
                <a data-scroll href="#contato" class="btn btn-padrao btn-naoEncontrou btn-secondary">Quero uma solução customizada</a>
            </div>
        </section>
        <section id="contato">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 formulario">
                        <h3 class="titulo">Contate-nos agora mesmo</h3>
                        <form action="/?email" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input value="Contato Site - fuse | IoT" name="subject" type="text" hidden />
                            </div>
                            <div class="form-group">
                                <input value="contato@fuseiot.io" name="from" type="text" hidden />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Seu telefone com DDD" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Sua empresa" required/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Sua mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn btn-padrao btn-success"><img class="btn-ctt mr-3" src="views/img/paper_plane-512.svg" alt="Enviar"></img> Enviar contato</button>
                        </form>
                    </div>
                    <div class="col-md-4 localizacao">
                        <h3 class="titulo">Onde estamos</h3>
                        <p>SÃO PAULO</p>
                        <br>
                        <p>Av. Roque Petroni Jr., 850</p>
                        <p>10º andar, Torre Jaceru</p>
                        <p>Jd. das Acácias - 04707-000</p>
                        <br>
                        <p>Infos de contato</p>
                        <p>contato@fuseiot.io</p>
                        <p>+55 11 4200 - 8282</p>
                        <br>
                    </div>
                </div>
            </div>
        </section>
        <section id="modal">
            <div class="modal fade" id="modalOk" tabindex="-1" role="dialog" aria-labelledby="modalOkTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3>Pronto!</h3>
                            <p><?= $_SESSION['mailresult'] ?></p>
                            <a class="btn btn-padrao btn-success text-white" data-dismiss="modal" aria-label="Fechar">OK</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="modalErroTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3>Erro!</h3>
                            <p><?= $_SESSION['ErrorInfo'] ?></p>
                            <a class="btn btn-padrao btn-success text-white" data-dismiss="modal" aria-label="Fechar">OK</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <img src="views/img/bannerwebinar.jpeg" class="img-fluid" alt="Banner Webinar">
                        <div class="buttons">
                            <button type="button" class="btn btn-padrao btn-outline-success" data-dismiss="modal">Continue no site</button>
                            <button type="button" class="btn btn-padrao btn-success" data-toggle="modal" data-target="#modalForm" data-dismiss="modal">Inscreva-se no IoT Talks</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalFormLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3>IoT Talks</h3>
                        <p>Preencha o formulário abaixo para inscrição:</p>
                        <form action="/?email" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input value="Inscrição Webinar | IoT Talks" name="subject" type="text" hidden />
                            </div>
                            <div class="form-group">
                                <input value="iottalks@fuseiot.io" name="from" type="text" hidden />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome*" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail*" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Seu telefone com DDD*" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Sua empresa*" required/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Sua mensagem" hidden>Inscrição Webinar | IoT Talks</textarea>
                            </div>
                            <button type="submit" class="btn btn-padrao btn-success">Quero participar do IoT Talks!</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <img class="footer-logo" src="views/img/LogoFusefooter.svg" alt="Logo Fuse IoT"></img>
                <ul class="footer-politica">
                    <li class=""><a data-scroll href="#">Política de Privacidade</a></li>
                    <li class=""><a data-scroll href="#">Informações Legais</a></li>
                </ul>
            </div>
            <hr>
            <div class="footer-direitos">2020 FUSEIOT® | Todos os direitos reservados.</div>
        </div>
    </footer>

    <?php 
        include_once 'views/includes/redessociais.php';
        include_once 'views/includes/bottom.php';        
    ?>