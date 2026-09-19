<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista-Bootstrap-Formulário 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-3">
    <h1>Novo Usuário</h1>
    
    <form method="post" action="formulario4.php">
      <div class="row g-3">
        
        <div class="col-12">
          <label for="nome" class="form-label fw-bold">Nome:</label>
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Informe o nome">
        </div>

        <div class="col-md-3">
          <label for="cpf" class="form-label fw-bold">CPF:</label>
          <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Informe o cpf">
        </div>

        <div class="col-md-7">
          <label for="endereco" class="form-label fw-bold">Endereço:</label>
          <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Informe o endereço">
        </div>

        <div class="col-md-2">
          <label for="nivel" class="form-label fw-bold">Nível:</label>
          <div class="input-group">
            <select id="nivel" name="nivel" class="form-select">
              <option selected>...</option>
              <option>Administrador</option>
              <option>Usuário</option>
            </select>
            <span class="input-group-text bg-secondary-subtle">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
              </svg>
            </span>
          </div>
        </div>

        <div class="col-md-6">
          <label for="email" class="form-label fw-bold">Email:</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Informe o email">
        </div>

        <div class="col-md-4">
          <label for="senha" class="form-label fw-bold">Senha:</label>
          <input type="password" id="senha" name="senha" class="form-control" placeholder="Informe a senha">
        </div>

        <div class="col-md-2">
          <label for="status" class="form-label fw-bold">Status:</label>
          <div class="input-group">
            <select id="status" name="status" class="form-select">
              <option selected>...</option>
              <option>Ativo</option>
              <option>Inativo</option>
            </select>
            <span class="input-group-text bg-secondary-subtle">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
              </svg>
            </span>
          </div>
        </div>

      </div>

      <div class="mt-4 d-flex justify-content-end gap-2">
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-light border text-dark">Cancelar</button>
      </div>
    </form>
  </div>
</body>
</html>