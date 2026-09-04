<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio5.php">
        <label for="temp1"> Informe a temperatura em Celsius:</label>
        <input type="number" id="temp1" name="temp1">
        <button type="submit">Enviar</button>
    </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        $temp1 = $_POST["temp1"];
        $conversao = ($temp1 * 1.8) + 32;
        echo "A Temperatura em Graus Fahrenheit é: $conversao";
        }
        ?>
        
</body>
</html>

	
    