<?php
include_once("../includes/conexao.php");
if (isset($_POST['submit'])) {
    $item = $_POST['item'];
    $preco = $_POST['preco'];
    $observacao = $_POST['observacao'];
    $pago = $_POST['pago'];
    $quemPagou = $_POST['quemPagou'];
    $quemPagouSegundo = $_POST['quemPagouSegundo'];
    $quemPagouTerceiro = $_POST['quemPagouTerceiro'];
    $result = mysqli_query($conexao, "INSERT INTO Terreno42(item,preco,observacoes,pago,quem_pagou,quemPagouSegundo,quemPagouTerceiro) VALUES('$item','$preco','$observacao','$pago','$quemPagou','$quemPagouSegundo','$quemPagouTerceiro')");
}
;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Gastos</title>
    <link rel="stylesheet" href="../media/style/adicionarGasto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../media/style/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    include_once('../includes/header.html')
        ?>
    <section class="section-formulario">
        <form method="POST" action="adicionarGasto.php">
            <div id="div-form-atributos">
                <label for="Item">Item:</label>
                <input type="text" name="item" id="item">
                <label for="preco">Preço:</label>
                <input type="number" name="preco" id="preco">
                <label for="observacao">Observação:</label>
                <input type="text" name="observacao" id="observacao">
                <label for="pago">Pago?</label>
                <select name="pago" id="pago">
                    <option value="1">
                        Pago
                    </option>
                    <option value="0">
                        Não Pago
                    </option>
                </select>
                <label for="quemPagou">Quem Pagou?</label>
                <select name="quemPagou" id="quemPagou">
                    <option value="Gustavo">
                        Gustavo
                    </option>
                    <option value="Kleiton">
                        Kleiton
                    </option>
                    <option value="Adriano">
                        Adriano
                    </option>
                    <option value="Rafael">
                        Rafael
                    </option>
                    <option value="Todos">
                        Todos
                    </option>
                </select>
                <select name="quemPagouSegundo" id="quemPagouSegundo">
                    <option value="Ninguem">
                        Ninguem
                    </option>
                    <option value="Gustavo">
                        Gustavo
                    </option>
                    <option value="Kleiton">
                        Kleiton
                    </option>
                    <option value="Adriano">
                        Adriano
                    </option>
                    <option value="Rafael">
                        Rafael
                    </option>
                    <option value="Todos">
                        Todos
                    </option>
                </select>
                <select name="quemPagouTerceiro" id="quemPagouTerceiro">
                    <option value="Ninguem">
                        Ninguem
                    </option>
                    <option value="Gustavo">
                        Gustavo
                    </option>
                    <option value="Kleiton">
                        Kleiton
                    </option>
                    <option value="Adriano">
                        Adriano
                    </option>
                    <option value="Rafael">
                        Rafael
                    </option>
                    <option value="Todos">
                        Todos
                    </option>
                </select>
                <input type="submit" name="submit">
            </div>
        </form>
    </section>
</body>

</html>