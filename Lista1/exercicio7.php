<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio7.php">
        <label for="largura"> Informe a largura do retângulo:</label>
        <input type="number" id="largura" name="largura">
	<label for="altura"> Informe a altura do retângulo:</label>
        <input type="number" id="altura" name="altura">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $largura = $_POST["largura"];
            $altura = $_POST["altura"];
            $arearetangulo = $largura * $altura;
            echo "A área do retângulo é: $arearetangulo";
        }
    ?>
</body>
</html>

