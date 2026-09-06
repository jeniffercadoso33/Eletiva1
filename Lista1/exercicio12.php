<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio12.php">
        <label for="valor"> Informe um valor em metros:</label>
        <input type="number" id="valor" name="valor">		
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $valor = $_POST["valor"];
            $conversormedida = $valor * 100;
            echo "O $valor em centímetros é: $conversormedida";
        }