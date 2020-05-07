<div id="menu">
    <div class="menu-lateral">
        <figure>
                <div class="thumb"><img src="views/img/foto01.png"></div>
                <figcaption>
                    <strong><?=$_SESSION['usuario']->nome." ".$sobrenome[0]?></strong>
                    <small>Em andamento</small>
                </figcaption>
        </figure>
        <ul>
                <li><a href="/?homecurso"><i class="ico home"></i>HOME</a></li>
                <li><a href="/?homecurso=1"><i class="ico curso"></i>MEUS CURSOS</a></li>
                <li><a href="/?homecurso=4"><i class="ico perfil"></i>MEU PERFIL</a></li>
                <li><a href="/?homecurso=5"><i class="ico duvida"></i>COMENTÁRIOS</a></li>
                <li><a href="/?logout"><i class="ico sair"></i>SAIR</a></li>
        </ul>
    </div>
</div>