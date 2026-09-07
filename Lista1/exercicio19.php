<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio19.php">
        <label for="distancia"> Informe a distância em km :</label>
        <input type="numero" id="distancia" name="distancia">
	<label for="tempo"> Informe o tempo percorrido em horas:</label>
        <input type="number" id="tempo" name="tempo">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
    		$distancia = $_POST["distancia"];
    		$tempo = $_POST["tempo"];
   		    $velocidademedia = $distancia / $tempo;
    		echo "O resultado da velocidade média é: $velocidademedia km/h";
        }
?>