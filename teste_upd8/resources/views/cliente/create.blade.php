@extends('templates.template')

@section('conteudo')

<div class="shadow p-3 mb-4 border border-5">
        <h2 class="text-center mt-2">@if(isset($clientes)) Editar Cliente @else Tela de Cadastro @endif</h2>
</div>

@if(isset($clientes))
<form name="formEditar" id="formEditar" method="post" action="{{url("cliente/$clientes->id")}}">
    @method('PUT')
@else
    <form name="formCadastro" id="formCadastro" method="post" action="{{url("cliente")}}">
@endif
    @csrf
<div class="col-7 m-auto">
        <div class="mb-2">
            @csrf
            <input class="form-control" aria-label="default input example" value="{{$clientes->nome ?? 'Nome'}} " type="text" name="nome" id="nome"
            placeholder=" {{$clientes->nome ?? 'Nome do Cliente'}} ">
            <br />
            <input class="form-control" aria-label="default input example" value="{{$clientes->cpf ?? 'CPF'}} " type="text" name="cpf" id="cpf"
            placeholder="CPF do Cliente">
            <br />
            <input class="form-control" aria-label="default input example" value="{{$clientes->email ?? 'email'}} " type="text" name="email" id="email"
                placeholder="Email do Cliente">
            <br />
            <input class="form-control" aria-label="default input example" value="{{$clientes->endereco ?? 'endereco'}} " type="text" name="endereco" id="endereco"
                placeholder="Endereco completo">
            <br />
            <input class="form-control" aria-label="default input example" value="{{$clientes->data_nascimento ?? 'data nascimento'}} " type="date" name="data_nascimento"
                id="data_nascimento" placeholder="data de nascimento">
            <br />
            <input class="form-control" aria-label="default input example" value="{{$clientes->estado ?? 'estado'}} " type="text" name="estado" id="estado"
                placeholder="ESTADO">
            <br />
            <input class="form-control" aria-label="default input example" value="{{$clientes->cidade ?? 'cidade'}} " type="text" name="cidade" id="cidade"
                placeholder="CIDADE">
            <br />
            <input class="form-control" aria-label="default input example" value="{{$clientes->sexo ?? 'sexo'}} " type="text" name="sexo" id="sexo"
                placeholder="sexo">
            <br />
            <div class="text-center">
                <input class="btn btn-primary col-4" type="submit" value="@if(isset($clientes)) Editar @else Cadastrar @endif" />
            </div>
        </div>
    </form>
</div>

@endsection
