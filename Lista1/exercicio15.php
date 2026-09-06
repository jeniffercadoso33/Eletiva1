<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio15.php">
        <label for="preco"> Informe o preço :</label>
        <input type="number" id="preco" name="preco" step="0.01" min="0">
	<label for="percentual"> Informe o percentual de desconto:</label>
        <input type="number" id="percentual" name="percentual">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
    $preco = $_POST["preco"];
    $percentual = $_POST["percentual"];
    $desconto = $preco -($preco * ($percentual / 100));
    echo "O resultado do preço com o desconto é: $desconto";
        }
?>