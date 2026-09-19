<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista-Bootstrap-Formulário 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-4">
    <div class="col-md-8 mx-auto">
      <div class="card bg-body-secondary border-0 p-4 rounded-3">
        <h1 class="h3 mb-4">Endereço de Cobrança</h1>
        
        <form method="post" action="formulario5.php">
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="primeiro_nome" class="form-label">Primeiro Nome</label>
              <input type="text" id="primeiro_nome" name="primeiro_nome" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="ultimo_nome" class="form-label">Sobrenome</label>
              <input type="text" id="ultimo_nome" name="ultimo_nome" class="form-control">
            </div>
          </div>

          <div class="mb-3">
            <label for="usuario" class="form-label">Usuário</label>
            <div class="input-group">
              <span class="input-group-text">@</span>
              <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuário">
            </div>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email (Opcional)</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="voce@exemplo.com">
          </div>

          <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Rua Principal 1234">
          </div>

          <div class="mb-3">
            <label for="complemento" class="form-label">Complemento (Opcional)</label>
            <input type="text" id="complemento" name="complemento" class="form-control" placeholder="Apartamento ou bloco">
          </div>

          <div class="row mb-3">
            <div class="col-md-5">
              <label for="pais" class="form-label">País</label>
              <select id="pais" name="pais" class="form-select custom-select-dupla" >
                <option selected>Escolher...</option>
                <option value="BR">Brasil</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="estado" class="form-label">Estado</label>
              <select id="estado" name="estado" class="form-select custom-select-dupla" >
                <option selected>Escolher...</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>
            </div>

            <div class="col-md-3">
              <label for="cep" class="form-label">CEP</label>
              <input type="text" id="cep" name="cep" class="form-control">
            </div>
          </div>

        </form>
      </div>

    </div>
  </div>
</body>
</html>