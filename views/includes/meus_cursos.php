<div class="caixa">
	<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Meus Cursos</span> Lista de Cursos</h2>
</div>
<div class="base-home">
	<div class="rows cursos py-3">
		<?php
			foreach($_SESSION['cursos'] as $curso){
				echo "<div class='col-3'>
					<div class='caixa'>
						<img src='img/frontend.jpg'>
						<div class='del-curso'>
							<p>$curso->nome_curso</p>
							<small>Desempenho <b>50%</b></small>
							<progress value='4' max='7'></progress>
							<a href='/?homecurso=2' class='btn'>Ir para o curso</a>
						</div>
					</div>
				</div>";
			}
		?>
	</div>
</div>