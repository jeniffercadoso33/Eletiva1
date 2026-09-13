<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Funções PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Funções PHP</h1>
<form method="post"  action="l3exercicio7.php">
<div class="mb-3">
              <label for="palavra" class="form-label">Informe uma palavra</label>
              <input type="text" id="palavra" name="palavra" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
           $palavra = trim(filter_input(INPUT_POST, 'palavra', FILTER_DEFAULT) ?? '');

            // Esta função irá verificar se a variável não está vazia após o trim
            // utilizado funções que podem receber qualquer tipo de escrita do usuário
            if ($palavra !== '') 
                {
                    echo "<p>Trabalhando com inversão das letras</p>";

                    // Aqui irá inverter a palavra tratando UTF-8
                    $inv = implode('', array_reverse(mb_str_split($palavra)));

                    // aqui irá exibir com proteção contra XSS
                    echo "<p>" . htmlspecialchars($inv, ENT_QUOTES, 'UTF-8') . "</p>";
                } 
            else 
                {
                    echo "<p>Por favor, digite uma palavra válida.</p>";
                }
        }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>