<div class="base-topo">
    <div class="conteudo">
        <a href="" class="menu-m">menu mobile esquerdo</a><!-- aqui fico icone reponsavel pelo meno da esquerda-->
        <a href="" class="menu-grade">menu mobile direito</a><!--aqui fica o menu responsavel pelo meno do topo-->
        <a href="/?" class="logo"></a>
        <div id="grade">
        <ul class="menu-topo">
            <li class="sub"><a href=""><i class="ico cursos"></i>Cursos</a>
                <ul>
                    <li><a href="/?homecurso=2">Conceitos Básicos</a></li>
                    <li><a href="/?homecurso=2">Conceitos de Hardware</a></li>
                    <li><a href="/?homecurso=2">Conceitos de Software</a></li>
                    <li><a href="/?homecurso=2">Conectividade</a></li>
                    <li><a href="/?homecurso=2">Segurança</a></li>
                    <li><a href="/?homecurso=2">Arquitetura - Cases</a></li>
                    <li><a href="/?homecurso=2">Legislação</a></li>
                    <li><a href="/?homecurso=2">Negócios</a></li>
                </ul>
            </li>
            <li class="sub user"><a href="" class="thumb"><img src="views/img/foto01.png"></a>
                <ul>
                    <li><b><?=$_SESSION['usuario']->nome." ".$sobrenome[0]?></b><small><a href="/?logout">Sair</a></small></li>
                </ul>
            </li>
        </ul>
    </div>
    </div>
</div>