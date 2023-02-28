<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid my-3">
            <a href="/cliente" class="navbar-brand px-4 h1">Menu de Inicio</a>
            <button type="button" class="btn btn-secondary" disabled>Candidato : Murilo Amancio da Silva</button>
            <a href="/cliente/create" class="navbar-brand px-4 h1">Cadastro de Clientes</a>
        </div>
    </nav>

    @yield('conteudo')
</body>

</html>