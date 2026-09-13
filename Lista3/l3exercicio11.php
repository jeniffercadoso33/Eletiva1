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
<form method="post" action="l3exercicio11.php">
<div class="mb-3">
              <label for="numero" class="form-label">Informe um número </label>
              <input type="number" id="numero" name="numero" step="any" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_FLOAT);

        if ($numero !== false && $numero !== null) 
            {
                echo "<p>Trabalhando com formatos</p>";

                // Aqui irá formatar o número no padrão brasileiro
                $valorFormatado = "R$ " . number_format($numero, 2, ',', '.');

                echo "<p>Valor formatado: " . $valorFormatado . "</p>";
            } 
        else
            {
                echo "<p>Por favor, informe um número válido.</p>";
            }
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>