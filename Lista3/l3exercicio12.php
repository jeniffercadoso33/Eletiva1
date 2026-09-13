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
<form method="post" action="l3exercicio12.php">
<div class="mb-3">
              <label for="resposta" class="form-label">Deseja criar uma senha ( digite sim ou não)</label>
              <input type="text" id="resposta" name="resposta" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
      {
        $resposta = mb_strtolower(trim(filter_input(INPUT_POST, 'resposta', FILTER_DEFAULT) ?? ''));
        if ($resposta === 'sim') 
          {    
            $letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $numeros = '0123456789';

        
            $sorteioLetras = '';
            for ($i = 0; $i < 4; $i++) 
              {
                $sorteioLetras .= $letras[rand(0, strlen($letras) - 1)];
              }
            $sorteioNumeros = '';
            for ($i = 0; $i < 4; $i++) 
              {
                $sorteioNumeros .= $numeros[rand(0, strlen($numeros) - 1)];
              }
            $senha = $sorteioLetras . $sorteioNumeros;

            echo "<div class='alert alert-success mt-3'>";
            echo "Senha gerada: " . htmlspecialchars($senha, ENT_QUOTES, 'UTF-8');
            echo "</div>";
          }
          else 
            {
              echo "<div class='alert alert-secondary mt-3'>";
              echo "Nenhuma senha foi gerada.";
              echo "</div>";
            }
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>