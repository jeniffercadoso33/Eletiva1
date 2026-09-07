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
<form method="post">
<div class="mb-3">
              <label for="valor" class="form-label">Informe o valor</label>
              <input type="number" id="valor" name="valor" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor2" class="form-label">Informe outro valor</label>
              <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<?php
            
    if($_POST)
        {

            $valor = $_POST['valor'];
            $valor2 = $_POST['valor2'];

                if($valor == $valor2)
                    {
                         $triplo = ($valor + $valor2) * 3;
                         echo " <p> O triplo da soma dos números é: $triplo <p>";         
                    }

                else
                    echo "<p> Valores são diferentes <p>";

        }

?>
</div>
</body>
</html>