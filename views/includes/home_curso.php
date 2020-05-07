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
                                <tr><td><a href="curso.html">Conceitos Básicos</a></td></tr>
                                <tr><td><a href="curso.html">Conceitos de Hardware</a></td></tr>
                                <tr><td><a href="curso.html">Conceitos de Software</a></td></tr>
                                <tr><td><a href="curso.html">Conectividade</a></td></tr>
                                <tr><td><a href="curso.html">Segurança</a></td></tr>
                                <tr><td><a href="curso.html">Arquitetura - Cases</a></td></tr>
                                <tr><td><a href="curso.html">Legislação</a></td></tr>
                                <tr><td><a href="curso.html">Negócios</a></td></tr>
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
                                                    <td><i></i> Lógica de programaçao com PHP</td>
                                                    <td align="center">12/05/2018</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i> Lógica de programaçao com PHP</td>
                                                    <td align="center">12/05/2018</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i> Lógica de programaçao com PHP</td>
                                                    <td align="center">12/05/2018</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i> Lógica de programaçao com PHP</td>
                                                    <td align="center">12/05/2018</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i> Lógica de programaçao com PHP</td>
                                                    <td align="center">12/05/2018</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i> Lógica de programaçao com PHP</td>
                                                    <td align="center">12/05/2018</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i> Lógica de programaçao com PHP</td>
                                                    <td align="center">12/05/2018</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i> Lógica de programaçao com PHP</td>
                                                    <td align="center">12/05/2018</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i> Lógica de programaçao com PHP</td>
                                                    <td align="center">12/05/2018</td>
                                                </tr>
                                                <tr>
                                                    <td><i></i> Lógica de programaçao com PHP</td>
                                                    <td align="center">12/05/2018</td>
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