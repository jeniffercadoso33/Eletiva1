<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista-Bootstrap-Formulário 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    
    .col-form-label {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container py-3">
    <h1 class="text-center mb-4">Formulário de Exemplo</h1>
    
    <form method="post" action="formulario3.php">
   
      <div class="row mb-3">
        <div class="col-md-6">
          <div class="row">
            <label for="nome_parceiro" class="col-sm-4 col-form-label col-form-label-sm text-sm-end">Nome do Parceiro</label>
            <div class="col-sm-8">
              <input type="text" id="nome_parceiro" name="nome_parceiro" class="form-control form-control-sm">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <label for="email_parceiro" class="col-sm-4 col-form-label col-form-label-sm text-sm-end">E-mail do Parceiro</label>
            <div class="col-sm-8">
              <input type="email" id="email_parceiro" name="email_parceiro" class="form-control form-control-sm">
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <div class="row">
            <label for="razao_social" class="col-sm-4 col-form-label col-form-label-sm text-sm-end">Razão Social</label>
            <div class="col-sm-8">
              <input type="text" id="razao_social" name="razao_social" class="form-control form-control-sm">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <label for="celular" class="col-sm-4 col-form-label col-form-label-sm text-sm-end">Celular</label>
            <div class="col-sm-8">
              <input type="text" id="celular" name="celular" class="form-control form-control-sm">
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-12">
          <div class="row">
            <label for="endereco" class="col-sm-2 col-form-label col-form-label-sm text-sm-end">Endereço</label>
            <div class="col-sm-10">
              <textarea id="endereco" name="endereco" class="form-control form-control-sm" rows="2"></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <div class="row">
            <label for="data_inicio" class="col-sm-4 col-form-label col-form-label-sm text-sm-end">Início do Contrato</label>
            <div class="col-sm-8">
              <input type="text" id="data_inicio" name="data_inicio" class="form-control form-control-sm" placeholder="Data de Início">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <label for="data_termino" class="col-sm-4 col-form-label col-form-label-sm text-sm-end">Término do Contrato</label>
            <div class="col-sm-8">
              <input type="text" id="data_termino" name="data_termino" class="form-control form-control-sm" placeholder="Data de Término">
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <div class="row">
            <label for="valor_minimo" class="col-sm-4 col-form-label col-form-label-sm text-sm-end">Valor Mínimo do Empréstimo</label>
            <div class="col-sm-8">
              <input type="text" id="valor_minimo" name="valor_minimo" class="form-control form-control-sm">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <label for="valor_maximo" class="col-sm-4 col-form-label col-form-label-sm text-sm-end">Valor Máximo do Empréstimo</label>
            <div class="col-sm-8">
              <input type="text" id="valor_maximo" name="valor_maximo" class="form-control form-control-sm">
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <div class="row">
            <label for="taxa_juros" class="col-sm-4 col-form-label col-form-label-sm text-sm-end">Taxa de Juros</label>
            <div class="col-sm-8">
              <input type="text" id="taxa_juros" name="taxa_juros" class="form-control form-control-sm">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <label for="valor_deposito" class="col-sm-4 col-form-label col-form-label-sm text-sm-end">Valor Depósito</label>
            <div class="col-sm-8">
              <input type="text" id="valor_deposito" name="valor_deposito" class="form-control form-control-sm">
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary btn-sm px-4">Salvar</button>
      </div>
    </form>
  </div>
</body>
</html>