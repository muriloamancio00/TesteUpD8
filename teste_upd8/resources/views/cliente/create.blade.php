@extends('templates.template')

@section('conteudo')
<h1 class="text-center">Cadastro de Clientes</h1>

<div class="col-7 m-auto">
    <form name="formCadastro" id="formCadastro" method="post" action="{{url('cliente')}}">
        <div class="mb-2">
            @csrf
            <input class="form-control" aria-label="default input example" type="text" name="nome" id="nome"
                placeholder="Nome do Cliente">
            <br />
            <input class="form-control" aria-label="default input example" type="text" name="cpf" id="cpf"
                placeholder="CPF do Cliente">
            <br />
            <input class="form-control" aria-label="default input example" type="text" name="email" id="email"
                placeholder="Email do Cliente">
            <br />
            <input class="form-control" aria-label="default input example" type="text" name="endereco" id="endereco"
                placeholder="Endereco completo">
            <br />
            <input class="form-control" aria-label="default input example" type="date" name="data_nascimento"
                id="data_nascimento" placeholder="data de nascimento">
            <br />
            <input class="form-control" aria-label="default input example" type="text" name="estado" id="estado"
                placeholder="ESTADO">
            <br />
            <input class="form-control" aria-label="default input example" type="text" name="cidade" id="cidade"
                placeholder="CIDADE">
            <br />
            <input class="form-control" aria-label="default input example" type="text" name="sexo" id="sexo"
                placeholder="sexo">
            <br />
            <div class="text-center">
                <input class="btn btn-primary col-4" type="submit" value="Cadastrar">
            </div>
        </div>
    </form>
</div>

@endsection