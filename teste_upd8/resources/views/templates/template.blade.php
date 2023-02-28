<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de Clientes</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
</head>

<body>
    <div class="mt-3">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Index</a>
            </li>
            <li class="nav-item">
                <button class="btn btn-outline-dark ">Cadastrar Cliente</button>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Candidato : </a>
            </li>
            <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        </ul>
        
        <hr />
    </div>

    @yield('conteudo')
</body>

</html>