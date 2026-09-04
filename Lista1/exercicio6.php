<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio6.php">
        <label for="temp2"> Informe a temperatura em Fahrenheit:</label>
        <input type="number" id="temp2" name="temp2">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $temp2 = $_POST["temp2"];
        $converter = ($temp2 - 32) / 1.8;
        echo "A Temperatura em Graus Celsius é: $converter";
    }
    ?>
</body>
</html>


    