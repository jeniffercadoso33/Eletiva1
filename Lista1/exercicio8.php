<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <h1>Exercício de Exemplo</h1>
    <form method="post" action="exercicio8.php">
        <label for="raio"> Informe o raio do círculo:</label>
        <input type="number" id="raio" name="raio">		
        <button type="submit">Enviar</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $raio = $_POST["raio"];
                $pi = 3.14159
                $areacirculo = $pi * ($raio ** 2);
                echo "A área do círculo é: $areacirculo";
            }
    ?>
</body>
</html>

