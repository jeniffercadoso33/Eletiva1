<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista-Bootstrap-formulário 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
<div class="container py-3">  
  <form method="post" action="Formulario1.php">
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="prim_nome" class="form-label">Primeiro Nome</label>
        <input type="text" id="prim_nome" name="prim_nome" class="form-control" required>
      </div>
      <div class="col-md-3">
        <label for="ult_nome" class="form-label">Sobrenome</label>
        <input type="text" id="ult_nome" name="ult_nome" class="form-control" required>
      </div>
      <div class="col-md-3">
        <label for="username" class="form-label">Usuário</label>
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="text" id="username" name="username" class="form-control" placeholder="usuario" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" id="cidade" name="cidade" class="form-control" required>
      </div>
      <div class="col-md-3">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" id="estado" name="estado" class="form-control" required>
      </div>
      <div class="col-md-3">
        <label for="cod_postal" class="form-label">CEP</label>
        <input type="text" id="cod_postal" name="cod_postal" class="form-control" required>
      </div>
    </div>

    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" id="tc" name="tc" class="form-check-input" required>
        <label for="tc" class="form-check-label">Concordo com os Termos e Condições</label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>