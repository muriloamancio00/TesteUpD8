@extends('templates.template')

@section('conteudo')


<div class="col-8 m-auto">
    <table class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <th scope="col">ID #</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Data Nasc.</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Sexo</th>
            </tr>
        </thead>
        <tbody>

            @foreach($cliente as $clientes)
            <tr>
                <th scope="row">{{$clientes->id}}</th>
                <td>
                    <a href="">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                </td>
                <td>
                    <a href="">
                        <button class="btn btn-danger">Excluir</button>
                    </a>
                </td>
                <td>{{$clientes->nome}}</td>
                <td>{{$clientes->cpf}}</td>
                <td>{{$clientes->data_nascimento}}</td>
                <td>{{$clientes->estado}}</td>
                <td>{{$clientes->cidade}}</td>
                <td>{{$clientes->sexo}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection