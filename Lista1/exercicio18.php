<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio18.php">
        <label for="dia"> Informe o valor em dias:</label>
        <input type="number" id="dia" name="dia">		
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
    		$dia = $_POST["dia"];
    		$horas = $dia * 24;
    		$minutos = $horas * 60;
    		$segundo = $minutos * 60;

    		echo "<p>O valor de dias informados tem em horas: $horas</p>";
    		echo "<p>O valor de dias informados tem em minutos: $minutos</p>";
    		echo "<p>O valor de dias informados tem em segundos: $segundos</p>";
		    echo "<p> Apresentação em Formato Convencional </p>";
		    echo "<p>$horas:$minutos:$segundos</p>";
         }
?>