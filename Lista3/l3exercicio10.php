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
<form method="post"  action="l3exercicio10.php">
<div class="mb-3">
              <label for="nome" class="form-label">Informe nome completo</label>
              <input type="text" id="nome" name="nome" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
           $nome = trim(filter_input(INPUT_POST, 'nome', FILTER_DEFAULT) ?? '');
            if ($nome !== '') 
                {
                    // aqui irá separar as palavras considerando um ou mais espaços consecutivos
                    $palavras = preg_split('/\s+/', $nome);
                    $iniciais = [];

            foreach ($palavras as $palavra) 
                {
                    // Aqui pega apenas a primeira letra de cada palavra em maiúsculo (suporta UTF-8)
                    $iniciais[] = mb_strtoupper(mb_substr($palavra, 0, 1, 'UTF-8'), 'UTF-8');
                }

            // Aqui irá juntar todas as iniciais separadas por ponto
            $resultadoIniciais = implode('.', $iniciais) . '.';

            echo "<p>Nome informado: " . htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>Iniciais: " . htmlspecialchars($resultadoIniciais, ENT_QUOTES, 'UTF-8') . "</p>";
                } 
            else 
                {
                    echo "<p class='text-danger'>Por favor, digite um nome válido.</p>";
                 }
        }
        
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>