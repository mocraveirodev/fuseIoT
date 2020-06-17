<div class="base-topo">
    <div class="conteudo">
        <a href="" class="menu-m">menu mobile esquerdo</a>
        <a href="" class="menu-grade">menu mobile direito</a>
        <a href="/?" class="logo"></a>
        <div id="grade">
        <ul class="menu-topo">
            <li class="sub"><a href=""><i class="ico cursos"></i>Cursos</a>
                <ul>
                    <?php
                        foreach($_SESSION['cursos'] as $curso){
                            echo "<li><a href='/?homecurso=2'>$curso->nome_curso</a></li>";
                        }
                    ?>
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

<!-- <header>
    <nav class="navbar navbar-light bg-light d-flex justify-content-between">
        <a class="navbar-brand logo" href="/?"></a>
        <div class="">
            <i class="fas fa-shopping-cart"></i>
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Perfil</button>
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Sair</button>
        </div>
    </nav>
</header> -->