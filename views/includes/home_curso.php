<div class="caixa">
    <h2 class="titulo"><span class="case"><i class="ico duvida"></i>Home</span> Olá, <?=$_SESSION['usuario']->nome." ".$sobrenome[0]?>!</h2>
</div>
<div class="base-home">
    <div class="rows detalhes py-3">
        <div class="col-4">
            <figure class="caixa">
                <div class="thumb"><img src="views/img/foto01.png"></div>
                <figcaption>
                        <strong><?=$_SESSION['usuario']->nome." ".$sobrenome[0]?></strong>
                        <!-- <small><b>Seu tutor nos cursos</b></small> -->
                        <small><?=$_SESSION['usuario']->email?></small>
                </figcaption>
            </figure>
        </div>
        <div class="col">
            <div class="caixa">
                <i class="ico video"></i>
                <small>Aulas assistidas</small>
                <h3>200</h3>
            </div>
        </div>
        <div class="col">
            <div class="caixa">
                <i class="ico curso"></i>
                <small>Cursos assisitidos</small>
                <h3>20</h3>
            </div>
        </div>
        <div class="col">
            <div class="caixa">
                <i class="ico exercicio"></i>
                <small>Exrcicios concluídos</small>
                <h3>200</h3>
            </div>
        </div>
    </div>


    <div class="rows listagem">
            <div class="col-6 matriculados d-flex mb-3">
                <div class="caixa">
                    <span class="titulo2">CURSOS MATRICULADOS</span>
                    <div class="rolagem">
                        <div class="lista"> 
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            <thead>
                                <tr>
                                    <th align="left">CURSOS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td><a href="/?homecurso=2">Conceitos Básicos</a></td></tr>
                                <tr><td><a href="/?homecurso=2">Conceitos de Hardware</a></td></tr>
                                <tr><td><a href="/?homecurso=2">Conceitos de Software</a></td></tr>
                                <tr><td><a href="/?homecurso=2">Conectividade</a></td></tr>
                                <tr><td><a href="/?homecurso=2">Segurança</a></td></tr>
                                <tr><td><a href="/?homecurso=2">Arquitetura - Cases</a></td></tr>
                                <tr><td><a href="/?homecurso=2">Legislação</a></td></tr>
                                <tr><td><a href="/?homecurso=2">Negócios</a></td></tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!--
                    <div class="naoativo">
                        <img src="img/nao-matriculado.png"><h2>Nenhum curso matriculado</h2>
                    </div>
                    -->
                </div>
            </div>
            <div class="col-6 assistidos d-flex mb-3">						
                    <div class="caixa">						
                        <span class="titulo2">ÚLTIMAS AULAS ASSISITIDAS</span>
                            <div class="rolagem mb-3">
                                <div class="lista">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                            <tr>
                                                <th align="left">CURSO</th>
                                                <th>DATA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td><i></i>História do IoT</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Casos de uso</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Eletrônica básica - I</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Telecom - Conectividade</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Eletrônica básica – II</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Processadores e Controladores</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Tipos de transmissão sem fio</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Kits de Desenvolvimento</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Arquitetura</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Noções de programação</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Principais linguagens utilizadas</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Software Embarcado</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>EdgeComputing</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Cloud e Blockchain</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Plataformas</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Conceitos de: LoRa, SigFox, NB-IoT, 2G, 3G, 4G e 5G, Zigbee, WiFi, BLE, NFC, RFiD, Satélite, UHF, Ultrasom</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Protocolos</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Codecs</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>LGPD</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>CiberSegurança</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Criptografia</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Avaliação de cenários</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Criação de ecossistemas</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Infraestrutura</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Propriedade Intelectual</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Homologação Anatel, Everynet, Inmetro, ONA, JCI, ANVISA e etc.</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Frequências Licenciadas e Não-Licenciadas</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Modelo CAPEX e OPEX</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>Modelo SaaS e PaaS</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>CX e UX</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i>ROI</td>
                                                    <td align="center">01/05/2020</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="/?homecurso=1" class="btn btn-curso d-table">VER MEUS CURSOS</a>
                            
                        <!-- <div class="naoativo">
                            <img src="views/img/nao-matriculado.png"><h2>Nenhuma aula assistida</h2>
                        </div> -->
                    </div>
            </div>
    </div>
</div>