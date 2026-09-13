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
<h1></h1>
<form method="post"  action="l3exercicio8.php">
<div class="mb-3">
              <label for="frase" class="form-label">Informe uma frase</label>
              <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
           $frase = trim(filter_input(INPUT_POST, 'frase', FILTER_DEFAULT) ?? '');

            // Esta função irá verificar se a variável não está vazia após o trim
            // utilizado funções que podem receber qualquer tipo de escrita do usuário
            if ($frase !== '') 
                {
                    echo "<p>Encontrando vogais</p>";

                    // Utilizado Expressão regular que busca todas as vogais (maiúsculas, minúsculas e acentuadas)
                    // O modificador 'u' no final garante o suporte a caracteres UTF-8
                    $qtdvogais = preg_match_all('/[aáàâãeéêiíoóôõuú]/ui', $frase);
                    echo "<p>Quantidade de vogais na frase: $qtdvogais</p>";
                   
                } 
            else 
                {
                    echo "<p>Por favor, digite uma frase válida.</p>";
                }
        }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>