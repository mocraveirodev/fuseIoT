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

    <form action="" method="post" id="formpagamento">
        <label for="numcartao">Numero do Cartão</label>
        <input type="text" name="numcartao" id="numcartao"> <br>
        <label for="qtdParcelas">Quantidade de Parcelas</label>
        <select name="qtdParcelas" id="qtdParcelas" class="select-qtdParcelas">
            <option value="">Selecione</option>
        </select> <br>
        <label for="numcartao">Valor da Parcela</label>
        <input type="text" name="valorparcela" id="valorparcela"> <br>
        <label for="numcartao">Token do Cartão</label>
        <input type="text" name="tokencartao" id="tokencartao"> <br>
        <label for="numcartao">Identificador com os dados do comprador</label>
        <input type="text" name="hashcartao" id="hashcartao"> <br>
        <input type="submit" value="Comprar" class="btncomprar" id="btncomprar">
    </form>
    <div class="band-cartao"></div>

    <div class="meio-pag"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= SCRIPT_PAGSEGURO?>"></script>
    <script src="views/js/pagseguro.js"></script>
</body>
</html>