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
<form method="post" action="l3exercicio15.php">
<div class="mb-3">
              <label for="email" class="form-label">Informe o e-mail</label>
              <input type="email" id="email" name="email" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            // Aqui vai verificar se é um e-mail válido
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if ($email) 
            {
                // Aqui vai encontrar a posição do @ e pega tudo depois dele (+1 pula o próprio @)
                $dominio = substr($email, strpos($email, '@') + 1);

                echo "<p>E-mail digitado: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
                echo "<p>Domínio do e-mail: " . htmlspecialchars($dominio, ENT_QUOTES, 'UTF-8') . "</p>";
            } 
        else 
            {
                echo "<p class='text-danger'>Por favor, informe um e-mail válido.</p>";
            }
    }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>