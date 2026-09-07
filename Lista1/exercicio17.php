<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio17.php">
        <label for="capital"> Informe o capital :</label>
        <input type="number" id="capital" name="capital" step="0.01" min="0">
	<label for="taxa"> Informe a taxa de juros:</label>
        <input type="number" id="taxa" name="taxa">
        <label for="periodo"> Informe o período em meses:</label>
        <input type="number" id="periodo" name="periodo">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
    		$capital = $_POST["capital"];
    		$taxa = $_POST["taxa"];
    		$periodo = $_POST["periodo"];
    		$montante = $capital *(1+($taxa / 100)) ** $periodo;
		    $juros = $montante - $capital ;
		    echo "O montante do capital será de: $montante";
            echo "<p>O resultado dos juros compostos sobre o capital é: $juros </p>"; 
	    }
?>