<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $fraseOriginal = filter_input(INPUT_POST, 'frase', FILTER_DEFAULT) ?? '';

    // Aqui remove apenas os espaços do início e do final
    $fraseSemEspacosInFim = trim($fraseOriginal);

    if ($fraseSemEspacosInFim !== '') {
        // Aqui remove todos os espaços da frase
        $fraseSemNenhumEspaco = str_replace(' ', '', $fraseSemEspacosInFim);

        echo "<p>Frase original: " . htmlspecialchars($fraseOriginal, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p>Sem espaços no início e final:" . htmlspecialchars($fraseSemEspacosInFim, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p>Com todos os espaços removidos: " . htmlspecialchars($fraseSemNenhumEspaco, ENT_QUOTES, 'UTF-8') . "</p>";
    } else {
        echo "<p>Por favor, digite uma frase válida.</p>";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>