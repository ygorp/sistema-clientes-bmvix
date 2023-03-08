<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - BMVIX</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="CNPJ OU CPF" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="content">
        <form class="row g-3">
            <div class="col-12">
                <label for="inputAddress" class="form-label">Razão Social</label>
                <input type="text" class="form-control" id="inputNsocial" placeholder="Digite aqui">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Nome Fantasia</label>
                <input type="text" class="form-control" id="inputNfantasia" placeholder="Digite aqui">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Código BomControle</label>
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
                <label for="inputZip" class="form-label">Digite o número</label>
                <input type="text" class="form-control" id="inputnumber">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>