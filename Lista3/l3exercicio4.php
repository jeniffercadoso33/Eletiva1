<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Funções PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3" action="l4exercicio4.php">
<h1>Funções PHP</h1>
<form method="post">
<div class="mb-3">
              <label for="dia" class="form-label">Informe o dia</label>
              <input type="number" id="dia" name="dia" class="form-control" required="">
            </div><div class="mb-3">
              <label for="mes" class="form-label">Informe o mês</label>
              <input type="number" id="mes" name="mes" class="form-control" required="">
            </div><div class="mb-3">
              <label for="ano" class="form-label">Informe o ano</label>
              <input type="number" id="ano" name="ano" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $dia = $_POST['dia'] ?? 0;
            $mes = $_POST['mes'] ?? 0;
            $ano = $_POST['ano'] ?? 0;
             if ($dia > 0 && $mes > 0 && $ano > 0 ) 
                {
                echo "<p> Verificando a validade da data: </p>";
                    {
                        echo  checkdate($mes , $dia , $ano);
                    }
                echo "<p> Formatando a data </p>";
                $dia = date("d");
                echo "<p>Dia: $dia </p>";
                $mes = date("m");
                echo "<p>Mes: $mes </p>";
                $tempo = date("d/m/Y H:i:s");
                echo "<p> $tempo </p>";    
                    
                    }
                }

        

    

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>