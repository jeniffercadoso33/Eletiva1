<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio11.php">
        <label for="base"> Informe um número base:</label>
        <input type="number" id="base" name="base">
	<label for="expoente"> Informe um expoente:</label>
        <input type="number" id="expoente" name="expoente">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $base = $_POST["base"];
            $expoente = $_POST["expoente"];
            $potencia = $base ** $expoente;
            echo "A base $base elevada ao expoente $expoente é: $potencia";
        }
?>