<?php
    include "views/pagseguro/configuracao.php";
?>

<!DOCTYPE html>
<html lang="pt-br   ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PagSeguro</title>
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/m-style.css">
</head>
<body>
    <!-- <button onclick="pagamento()">Pagar</button> -->
    <span class="endereco" data-endereco="<?= URL ?>"></span>
    <span id="msg"></span>

    <form action="" method="post">
        <label for="numcartao">Numero do Cartão</label>
        <input type="text" name="numcartao" id="numcartao">
        <select name="qtdParcelas" id="qtdParcelas" class="select-qtdParcelas">
            <option value="">Selecione</option>
        </select>
    </form>
    <div class="band-cartao"></div>

    <div class="meio-pag"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= SCRIPT_PAGSEGURO?>"></script>
    <script src="views/js/pagseguro.js"></script>
</body>
</html>