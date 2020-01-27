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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/style.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/fuseIoT"><object class="header-logo" data="views/img/LogoFusenav.svg" type="image/svg+xml"></object></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav flex-row justify-content-center">
                    <a class="nav-item nav-link text-body" href="#">IoT</a>
                    <a class="nav-item nav-link text-body" href="#">Soluções</a>
                    <a class="nav-item nav-link text-body" href="#">Contato</a>
                </div>
            </div>
        </div>
    </nav>
    </header>
    <main>
        <section id="banner">
            <div class="container">
                <div class="banner-lead">
                    <h1 class="banner-titulo titulo">Vamos fazer seu negócio gerar ainda mais resultados</h1>
                    <p class="banner-texto">A Fuse IoT é uma StartUp focada em tecnologias de IoT e Inteligência Artificial, que gera resultados com aprimoramento de processos visando a melhoria contínua do seu negócio.</p>
                    <a href="" class="btn btn-padrao banner-btn btn-outline-success">Me ajude agora</a>
                </div>
            </div>
        </section>
        <section id="iot">
            <div class="container text-center">
                <h3 class="titulo">Você está preparado para a evolução digital?</h3>
                <h3 class="titulo">A FuseIoT te ajuda nessa!</h3>
                <p class="iot">Com ecossistemas completos, entregamos uma solução única para sua necessidade. Ajudamos a controlar e monitorar ambientes remotos, evitando desperdícios, aumentando a segurança com dados relevantes que agilizam a tomada de decisões. Use a tecnologia como sua aliada, e tenha redução de perdas e aumento de receita.</p>
                <div class="row text-left justify-content-between">
                    <div class="col-md-6 order-md-1">
                        <h5 class="titulo">Smartcities</h5>
                        <p class="verticais">Soluções para cidades conectadas. Monitore e controle a iluminação pública, lixeiras inteligentes, smart parking e muito mais.</p>
                        <a href="" class="btn btn-padrao btn-success">Quero saber mais</a>
                    </div>
                    <div class="col-md-6 direita order-md-2">
                        <img class="bg-verticais" src="views/img/cities.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-4">
                        <h5 class="titulo">Agrobusiness</h5>
                        <p class="verticais">Aumente sua produtividade com monitoração climática e de solo, controle de temperatura e umidade, localização de ativos, rastreamento de bovino numa plataforma de gestão de fazendas.</p>
                        <a href="" class="btn btn-padrao btn-success">Quero saber mais</a>
                    </div>
                    <div class="col-md-6 esquerda order-md-3">
                        <img class="bg-verticais" src="views/img/boi.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-5">
                        <h5 class="titulo">Health</h5>
                        <p class="verticais">Evite desperdícios, reduza custos e riscos controlando a temperatura e o funcionamento de geladeiras de vacinas e medicamentos, tecidos e amostras, bolsas de sangue e plasma, para ambientes hospitalares, clínicas, medicina diagnóstica e centros de pesquisa.</p>
                        <a href="" class="btn btn-padrao btn-success">Quero saber mais</a>
                    </div>
                    <div class="col-md-6 direita order-md-6">
                        <img class="bg-verticais" src="views/img/health.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-8">
                        <h5 class="titulo">Indústria 4.0</h5>
                        <p class="verticais">Aumente a competitividade do seu negócio com melhora de eficiência operacional. Monitoração do funcionamento de máquinas e serviços otimizando manutenções preventivas, com controle de consumo elétrico, de água e gás.</p>
                        <a href="" class="btn btn-padrao btn-success">Quero saber mais</a>
                    </div>
                    <div class="col-md-6 esquerda order-md-7">
                        <img class="bg-verticais" src="views/img/ind.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="solucoes">
            <div class="carousel-solucoes">
                <div class="solucao efeito bov">
                    <h6 class="carousel-titulo">SOLUÇÕES</h6>
                    <div class="carousel-texto">
                        <h4 class="titulo-solucao">Fuse Bov</h4>
                        <p class="texto-solucao">Solução para monitoramento e rastreamento de gado de corte gerando informações de localização, comportamento e comparativo com dados históricos compeltos de cada animal.</p>
                        <a href="" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                </div>
                <div class="solucao efeito utilities">
                    <h6 class="carousel-titulo">SOLUÇÕES</h6>
                    <div class="carousel-texto">
                        <h4 class="titulo-solucao">Fuse Utilities</h4>
                        <p class="texto-solucao mt-4 mb-4">Monitore o consumo de água, gás e <br>energia elétrica e evite desperdícios, identifique vazamentos, aumente a segurança no trabalho e reduza custos.<br></p>
                        <a href="" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                </div>
                <div class="solucao efeito temp">
                    <h6 class="carousel-titulo">SOLUÇÕES</h6>
                    <div class="carousel-texto">
                        <h4 class="titulo-solucao">Fuse Temp</h4>
                        <p class="texto-solucao">Solução completa para acompanhamento de temperatura, umidade, e contato binário (ligado/desligado, aberto/fechado), totalmente validável para hospitais e Inmetro.</p>
                        <a href="" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                </div>
                <div class="solucao efeito track">
                    <h6 class="carousel-titulo">SOLUÇÕES</h6>
                    <div class="carousel-texto">
                        <h4 class="titulo-solucao">Fuse Track</h4>
                        <p class="texto-solucao mt-4 mb-4">Saiba tudo sobre sua frota, rastreie seus ativos, otimize rotas, ganhe agilidade, reduza custos e tenha mais segurança sobre seus bens e serviços.</p>
                        <a href="" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                </div>
                <div class="solucao efeito parking">
                    <h6 class="carousel-titulo">SOLUÇÕES</h6>
                    <div class="carousel-texto">
                        <h4 class="titulo-solucao">Fuse Parking</h4>
                        <p class="texto-solucao">Monitore vagas de estacionamento ou locais de parada proibida, receba alertas em tempo real em caso de infração e controle o tráfego de veículos em locais de estudo.</p>
                        <a href="" class="btn btn-padrao btn-outline-success">Quero saber mais</a>
                    </div>
                </div>
            </div>
            <div class="carousel-controles">
                <span class="controle"></span>
                <span class="controle"></span>
                <span class="controle"></span>
                <span class="controle"></span>
                <span class="controle"></span>
            </div>
        </section>
            <div class="naoEncontrou">
                <h4 class="naoEncontrou-titulo">Não encontrou o que você procurava?</h4>
                <p class="naoEncontrou-texto">Customizamos soluções sob medida para sua necessidade. Entre em contato e te ajudaremos a tornar a sua imaginação o limite para resolver problemas com IoT!</p>
                <a href="" class="btn btn-padrao btn-naoEncontrou btn-outline-success">Quero saber mais</a>
            </div>
        <!-- <img src="views/img/logo-fuse.svg" class="logo" alt="Logo Fuse IoT">
        <h1 class="title">SITE EM CONSTRUÇÃO</h1>
        <p class="sub d-none d-md-block">Enquanto preparamos nosso  site, saiba mais sobre a Fuse IoT, uma StartUp especializada em soluções IoT, que fornece transformação digital para empresas e pessoas que querem melhorar seus indicativos!</P>
        <button class="btn" data-toggle="modal" data-target="#modalContact">Entre em contato</button>
        <div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="modalContactTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h3>Quer saber mais?</h3>
                        <p>Envie-nos seu contato pelo formulário abaixo:</p>
                        <form id="mailform" name="mailform">
                            <div class="form-group">
                                <input value="msilva@nuveto.com.br" name="toemail" type="text" hidden />
                            </div>
                            <div class="form-group">
                                <input value="contato@fuseiot.io" name="from" type="text" hidden />
                            </div>
                            <div class="form-group">
                                <input value="Contato Site Fuse | IoT" name="subject" type="text" hidden />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Sua mensagem"></textarea>
                            </div>
                            <button type="button" id="sendemail" class="btn" onclick="GoSend();" data-dismiss="modal" aria-label="Fechar" >Enviar</button>
                            <div class="form-group">
                                <select class="form-control" name="sendmethod" hidden >
                                    <option value="smtp" selected >SMTP</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalOk" tabindex="-1" role="dialog" aria-labelledby="modalOkTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h3>Pronto!</h3>
                        <p>Em breve nossos especialistas irão entrar em contato para dar mais informações.</p>
                        <a class="btn" data-dismiss="modal" aria-label="Fechar">OK</a>
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
                        <a class="btn" data-dismiss="modal" aria-label="Fechar">OK</a>
                    </div>
                </div>
            </div>
        </div>

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
        </table> -->

    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="views/js/carousel.js"></script>
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