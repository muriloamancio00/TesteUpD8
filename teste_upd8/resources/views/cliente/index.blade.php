@extends('templates.template')

@section('conteudo')

<div class="shadow p-3 mb-4 border border-5">
    <h2 class="text-center mt-2">Tabela de Clientes </h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2">
            <a class="nav-link disabled">Pesquisa Clientes : </a>
        </div>
        <div class="col-6">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <hr />
    </div>
    <div class="row py-center">
        <div class="col-12 ">
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <table class="table table-dark table-striped-columns">
                            <thead">
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
                                    @foreach($table as $clientes)
                                    <tr>
                                        <th scope="row">{{$clientes->id}}</th>
                                        <td>
                                            <a href="{{url("cliente/$clientes->id/edit")}}">
                                                <button class="btn btn-primary">Editar</button>
                                            </a>
                                        </td>
                                        <td>
                                            <button nohref style="cursor:pointer"
                                                onclick="showRemoveModal('{{ $clientes['id'] }}', '{{$clientes['nome'] }}')"
                                                class="btn btn-danger">
                                                Excluir
                                            </button>
                                        </td>
                                        <td>{{$clientes->nome}}</td>
                                        <td>{{$clientes->cpf}}</td>
                                        <td>{{$clientes->data_nascimento}}</td>
                                        <td>{{$clientes->estado}}</td>
                                        <td>{{$clientes->cidade}}</td>
                                        <td>{{$clientes->sexo}}</td>
                                        <form action="{{ route('cliente.destroy', $clientes['id']) }}" method="POST" id="form{{$clientes['id']}}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection