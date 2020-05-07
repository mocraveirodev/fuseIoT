<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>fuse | IoT Academy</title>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/auxiliar.css">
		<link rel="stylesheet" type="text/css" href="css/grade.css">
		<link rel="stylesheet" type="text/css" href="css/m-style.css">		
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/js.js"></script>		
	</head>
	<body>
		<?php include "cabeçalho.php"; ?>

		<div class="site">
			<?php include "menu.php"; ?>

			<div class="base-geral">
				<?php
						$link = isset($_GET["link"]) ? $_GET["link"] : 0;
						$pag = ["home.php","meus_cursos.php","curso.php","aula.php","perfil.php","comentario.php"];
						if(file_exists($pag[$link])){
							include $pag[$link];
						}else{
							include "home.php"; // ou criar um arquivo pra erro 404
						}
				?>

				<?php include "rodapé.php"; ?>		
			</div>
		</div>
	</body>
</html>