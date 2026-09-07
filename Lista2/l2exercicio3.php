<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Estrutura Condicional IF e SWITCH</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Estrutura Condicional IF e SWITCH</h1>
<form method="post" action="l2exercicio3.php">
<div class="mb-3">
              <label for="valorproduto" class="form-label">Informe o valor do produto</label>
              <input type="number" id="valorproduto" name="valorproduto" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
          
            $valorproduto = $_POST['valorproduto'];
                     
            if($valorproduto > 100)
                {
                    $novovalor = $valorproduto - ($valorproduto * (15/100));
                    echo " <p> O valor do produto com desconto é: $novovalor <p>";         
                }

            else
                echo "<p> Produtos com valor menor que 100 não possui desconto <p>";

        }
?>

</div>
</body>
</html>