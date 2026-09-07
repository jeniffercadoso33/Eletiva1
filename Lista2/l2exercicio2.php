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
<form method="post" action="l2exercicio2.php">
<div class="mb-3">
              <label for="valora" class="form-label">Informe o valor de A</label>
              <input type="number" id="valora" name="valora" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valorb" class="form-label">Informe o valor de B</label>
              <input type="number" id="valorb" name="valorb" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<?php
            
   if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $valora = $_POST['valora'];
            $valorb = $_POST['valorb'];

            $contador = 0;
            if ($valora < $valorb)
                {
                    echo "$valora  $valorb";
                }
            elseif ($valora > $valorb)
                {
                    echo "$valorb $valora";
                }
            do{
                    echo "<p>$contador</p>";
                    $contador++;
                }while($contador == $valora && $contador == $valorb );


}

?>
</div>
</body>
</html>