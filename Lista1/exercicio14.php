<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio14.php">
        <label for="peso"> Informe o peso em kg:</label>
        <input type="number" id="peso" name="peso">
	<label for="altura"> Informe a altura em metros:</label>
        <input type="number" id="altura" name="altura">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];
            $imc = $peso / ($altura ** 2);
            echo "O resultado do IMC é: $imc";
        }
?>