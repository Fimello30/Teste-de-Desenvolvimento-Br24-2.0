@extends('layout.site')

@section('Titulo','Cadastro')

@section('conteudo')
<div class="form-signin">

    <h2>Seleção - Br24</h2>
    <form class="form-signin" method="post" action="/cadastro">
        {{ csrf_field() }}
        @include('cadastro._form')

        <div class="btn-toolbar justify-content-between">
            <div>
                <a class="btn btn-primary" href="/" role="button">Voltar</a>
            </div>
            <div>
                <input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
@endsection
