@extends('layout.site')

@section('Titulo','Seleção Br24')

@section('conteudo')
    <div class="form-signin">

        <h2>Seleção - Br24</h2><br><br><br>

        <div class="btn-toolbar justify-content-between">
            <div>
                <a class="btn btn-primary" href="cadastro" role="button">Novo cadastro</a>
            </div>

            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Lista cadastro
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="btn dropdown-item" href="contato" role="button">Lista de contatos</a>
                    <a class="btn dropdown-item" href="companhia" role="button">Lista de companhias</a>
                </div>
            </div>
        </div>
    </div>
@endsection
