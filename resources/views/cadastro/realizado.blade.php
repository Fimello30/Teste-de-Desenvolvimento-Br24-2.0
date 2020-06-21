@extends('layout.site')

@section('Titulo','Cadastro realizado')

@section('conteudo')
    <div class="form-signin">

        <h2>Seleção - Br24</h2><br><br><br>
        <div class="alert alert-success" role="alert">
            Cadastro realizado com sucesso
        </div>
        <br><br><br>

        <div class="btn-toolbar justify-content-between">
            <div>
                <a class="btn btn-primary" href="cadastro" role="button">Novo cadastro</a>
            </div>
            <div>
                <a class="btn btn-primary" href="/" role="button">Home</a>
            </div>
        </div>
    </div>
@endsection
