<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - BMVIX</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div>
                <a class="navbar-brand" href="#"><img src="/img/logo.png" alt=""></a>
            </div>


            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" id="voltar" aria-current="page" href="#">Voltar</a>
                </li>
            </ul>

        </div>
    </nav>

    <main class="container-fluid">

        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-cliente-tab" data-bs-toggle="tab" data-bs-target="#nav-cliente" type="button" role="tab" aria-controls="nav-cliente" aria-selected="true" href="#">Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-sistema-tab" data-bs-toggle="tab" data-bs-target="#nav-sistema" type="button" role="tab" aria-controls="nav-sistema" aria-selected="false">Sistema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-equipamento-tab" data-bs-toggle="tab" data-bs-target="#nav-equipamento" type="button" role="tab" aria-controls="nav-equipamento" aria-selected="false">Equipamento</a>
                    </li>
                </ul>
            </div>
            <div class="card-body tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-cliente" role="tabpanel" aria-labelledby="nav-cliente-tab" tabindex="0">
                    <form class="row g-3" id="cliente">
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Raz??o Social</label>
                            <input type="text" class="form-control" id="inputNsocial" placeholder="Digite aqui">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Nome Fantasia</label>
                            <input type="text" class="form-control" id="inputNfantasia" placeholder="Digite aqui">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">C??digo BomControle</label>
                            <input type="text" class="form-control" id="inputCodigo">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Documento</label>
                            <select id="inputState" class="form-select">
                                <option selected>CNPJ</option>
                                <option>CPF</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Digite aqui</label>
                            <input type="text" class="form-control" id="inputnumber">
                        </div>

                    </form>
                </div>

                <div class="tab-pane fade" id="nav-sistema" role="tabpanel" aria-labelledby="nav-sistema-tab" tabindex="0">
                    <form class="row g-3">
                        <div class="col-md-3">
                            <label for="validationDefault04" class="form-label">Fabricante</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option selected value="">Secullum</option>
                                <option>ControlId</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault04" class="form-label">Vers??o</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option selected value="">Ponto WEB</option>
                                <option>Ponto 4</option>
                                <option>Secullum Offline</option>
                                <option>RhId</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault04" class="form-label">Licen??a</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option selected value="">PRO</option>
                                <option>ULTIMATE</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault04" class="form-label">Adicional?</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option selected value="">Sim</option>
                                <option>N??o</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Ad. Qtas pessoas?</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Quantos CNPJ/CPF</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Qtd Pessoas Licen??a</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault04" class="form-label">Usa APP?</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option selected value="">Sim</option>
                                <option>N??o</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Qtd Pessoas APP</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Qtd Pessoas Facial</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault04" class="form-label">Tipo do Banco</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option selected value="">SQL</option>
                                <option>Acess</option>
                                <option>WEB</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Nome do Banco</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">IP Servidor</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Nome do servidor</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Nome da Inst??ncia</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Local do banco</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Qtd Pessoas Facial</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Pasta backup</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Usu??rio banco</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Senha Banco</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault04" class="form-label">Backup WEB Ativo?</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option selected value="">Sim</option>
                                <option>N??o</option>
                            </select>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="nav-equipamento" role="tabpanel" aria-labelledby="nav-equipamento-tab" tabindex="0">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">Fabricante</label>
                            <select class="form-select" id="validationCustom04" required>

                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">Modelo</label>
                            <select class="form-select" id="validationCustom04" required>

                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">N?? de S??rie</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">C??digo Hash</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">IP Local</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">IP Externo</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Porta Interna</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Porta Externa</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">DDNS</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Usu??rio</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Senha</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Empresa Principal</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">PC Comunicador</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>