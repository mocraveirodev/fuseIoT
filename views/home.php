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
    <title>fuse | IoT</title>
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/style.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">
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
                <h3 class="titulo text-center">A <span>fuse | IoT</span> te ajuda nessa!</h3>
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
                        <h4 class="carousel-titulo d-block d-sm-none">SOLUÇÕES</h4>
                        <h5 class="titulo-solucao d-block d-sm-none">Fuse Bov</h5>
                        <p class="texto-solucao d-block d-sm-none">Solução para monitoramento e rastreamento de gado de corte gerando informações de localização, comportamento e comparativo com dados históricos compeltos de cada animal.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                    <div class="carousel-item utilities">
                        <h4 class="carousel-titulo d-block d-sm-none">SOLUÇÕES</h4>
                        <h5 class="titulo-solucao d-block d-sm-none">Fuse Utilities</h5>
                        <p class="texto-solucao d-block d-sm-none">Monitore o consumo de água, gás e energia elétrica e evite desperdícios, identifique vazamentos, aumente a segurança no trabalho e reduza custos.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                    <div class="carousel-item temp">
                        <h4 class="carousel-titulo d-block d-sm-none">SOLUÇÕES</h4>
                        <h5 class="titulo-solucao d-block d-sm-none">Fuse Temp</h5>
                        <p class="texto-solucao d-block d-sm-none">Solução completa para acompanhamento de temperatura, umidade, e contato binário (ligado/desligado, aberto/fechado), totalmente validável para hospitais e Inmetro.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                    <div class="carousel-item track">
                        <h4 class="carousel-titulo d-block d-sm-none">SOLUÇÕES</h4>
                        <h5 class="titulo-solucao d-block d-sm-none">Fuse Track</h5>
                        <p class="texto-solucao d-block d-sm-none">Saiba tudo sobre sua frota, rastreie seus ativos, otimize rotas, ganhe agilidade, reduza custos e tenha mais segurança sobre seus bens e serviços.</p>
                        <a data-scroll href="#contato" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                    <div class="carousel-item parking">
                        <h4 class="carousel-titulo d-block d-sm-none">SOLUÇÕES</h4>
                        <h5 class="titulo-solucao d-block d-sm-none">Fuse Parking</h5>
                        <p class="texto-solucao d-block d-sm-none">Monitore vagas de estacionamento ou locais de parada proibida, receba alertas em tempo real em caso de infração e controle o tráfego de veículos em locais de estudo.</p>
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
        <section id="academy" class="d-flex justify-content-center align-items-end">
            <a href="/?goacademy" class="btn btn-padrao btn-academy btn-warning mb-5">Conheça a fuse | Academy</a>
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
                        <form id="mailform" name="mailform">
                            <div class="form-group">
                                <input value="murilo.silva@fuseiot.io" name="toemail" type="text" hidden />
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
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Seu telefone" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Sua empresa" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto do contato" required/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Sua mensagem"></textarea>
                            </div>
                            <button type="button" id="sendemail" class="btn btn-padrao btn-success" onclick="GoSend();"><img class="btn-ctt mr-3" src="views/img/paper_plane-512.svg" alt="Enviar"></img> Enviar contato</button>
                            <div class="form-group">
                                <select class="form-control" name="sendmethod" hidden >
                                    <option value="smtp" selected >SMTP</option>
                                </select>
                            </div>
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
        <section>
            <div class="modal fade" id="modalOk" tabindex="-1" role="dialog" aria-labelledby="modalOkTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3>Pronto!</h3>
                            <p>Em breve nossos especialistas irão entrar em contato para dar mais informações.</p>
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
                            <p><?= "Houve um erro enviando o email. Tente de novo mais tarde!" ?></p>
                            <a class="btn btn-padrao btn-success text-white" data-dismiss="modal" aria-label="Fechar">OK</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <table hidden id="msglog" border="1" bordercolor="#FFCC00" style="background-color:#FFFFCC" width="100%" cellpadding="3" cellspacing="3">
            <tr>
                <td>#</td>
                <td>TIME</td>
                <td>TO</td>
                <td>FROM</td>
                <td>SUBJECT</td>
                <td>MESSAGE</td>
                <td>METHOD</td>
                <td>NODE</td>
                <td>RESULT</td>
            </tr>
        </table>
    </main>
    <footer>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <img class="footer-logo" src="views/img/LogoFusefooter.svg" alt="Logo Fuse IoT"></img>
                <ul class="footer-politica">
                    <li class=""><a data-scroll href="#">Política de Privacidade<#a></li>
                    <li class=""><a data-scroll href="#">Informações Legais</a></li>
                </ul>
            </div>
            <hr>
            <div class="footer-direitos">2020 FUSEIOT® | Todos os direitos reservados.</div>
        </div>
    </footer>

    <div id="redesSociais" class="social">
        <a href="https://www.linkedin.com/company/fuseiot/" id="linkedin" target="_blank">LinkedIn <img class="social-logo" src="views/img/linkedin.svg" alt="Logo LinkedIn"></img></a>
        <a href="https://www.youtube.com/c/fuseiotacademy" id="youtube" target="_blank">YouTube <img class="social-logo" src="views/img/youtube.svg" alt="Logo YouTube"></img></a>
        <a href="https://www.instagram.com/fuseiotacademy/" id="instagram" target="_blank">Instagram <img class="social-logo" src="views/img/instagram.svg" alt="Logo Instagram"></img></a>
        <a href="https://www.facebook.com/fuseiotacademy/" id="facebook" target="_blank">Facebook <img class="social-logo" src="views/img/facebook.svg" alt="Logo Facebook"></img></a>
        <a href="https://www.tiktok.com/@fuseiotacademy" id="tiktok" target="_blank">TikTok <img class="social-logo" src="views/img/tiktok.svg" alt="Logo TikTok"></img></a>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
    <script>
        var msgid = 1;
        function GoSend() {
            var table=document.getElementById("msglog");
            var row = table.insertRow(1);
            
            var NUMcell = row.insertCell(0);
            NUMcell.innerHTML=msgid++;
            
            var DATEcell = row.insertCell(1);
            var d = new Date();
            DATEcell.innerHTML=d.toLocaleTimeString();
            
            var TOcell = row.insertCell(2);
            TOcell.innerHTML=document.mailform.toemail.value;
            
            var FROMcell = row.insertCell(3);
            FROMcell.innerHTML=document.mailform.from.value;
            
            var SUBJECTcell = row.insertCell(4);
            SUBJECTcell.innerHTML=document.mailform.subject.value;
            
            var MESSAGEcell = row.insertCell(5);
            MESSAGEcell.innerHTML=document.mailform.message.value;
            
            var METHODcell = row.insertCell(6);
            METHODcell.innerHTML=document.mailform.sendmethod.value;
            
            var NODEcell = row.insertCell(7);
            
            var RESULTcell = row.insertCell(8);
            RESULTcell.innerHTML="<img height=\"24\" src=\"data:image/gif;base64,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\">";

            var postdata= "sendemail=1&toemail="+document.mailform.toemail.value;
                postdata+="&from="+document.mailform.from.value;
                postdata+="&subject="+document.mailform.subject.value;
                postdata+="&sendmethod="+document.mailform.sendmethod.value;
                postdata+="&nome="+document.mailform.nome.value;
                postdata+="&email="+document.mailform.email.value;
                postdata+="&telefone="+document.mailform.telefone.value;
                postdata+="&empresa="+document.mailform.empresa.value;
                postdata+="&message="+encodeURIComponent(document.mailform.message.value).replace("%20", "+");
            var url="<?=$_SERVER['PHP_SELF']; ?>";
            var request=new XMLHttpRequest();
            request.open("POST",url,true);
            request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            request.overrideMimeType("text/plain");
            request.onreadystatechange=function() { 
                if ( request.readyState==4 ) {
                    NODEcell.innerHTML=request.getResponseHeader("X-Node");
                    if ( request.responseText == "OK" || request.responseText == "FAIL" ) {
                        RESULTcell.innerHTML=request.responseText;
                    } else {
                        if ( request.status == 0 ) {
                            RESULTcell.innerHTML="ERR_EMPTY_RESPONSE";
                        } else {
                            RESULTcell.innerHTML="HTTP/1.1 "+request.status+" "+request.statusText+"<br /><br />"+request.responseText;
                            if(request.status == 200){
                                $('#modalOk').modal('show');
                            }else{
                                $('#modalErro').modal('show');
                            }
                        }
                    }
                }
            }
            request.send(postdata);
        }
    </script>
</body>
</html>