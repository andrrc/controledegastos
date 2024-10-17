<?php
include_once("../includes/conexao.php");
include_once("../includes/header.html");

if(isset($_GET['submit'])){
    $nome = $_GET['nome'];
    $telefone = $_GET['telefone'];
    $sql = "INSERT into socios(nome,telefone) VALUES('$nome','$telefone')";
    $resultado = mysqli_query($conexao,$sql);
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socio</title>
    <link rel="stylesheet" href="../media/style/header.css">
    <link rel="stylesheet" href="../media/style/adicionarSocio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<body>
    <section class="socio-section">
    <form action="adicionarSocio.php" method="GET">
        <label for="">Nome:</label>
        <input type="text" name="nome" id="">
        <label for="">Telefone</label>
        <input type="text" name="telefone">
        <input type="submit" value="Cadastrar Socio" name="submit">
    </form>
    </section>
</body>
</html>