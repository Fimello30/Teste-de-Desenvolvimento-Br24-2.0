@extends('layout.site')

@section('Titulo','Lista de companhia')

@section('conteudo')
    <h2>Lista de contatos</h2><br><br><br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Saldo</th>
        </tr>

        @for ($i = 0; $i < $result['total']; $i++)
            <tr>
                <td>{{$result['result'][$i]['TITLE']}}</td>
                <td>{{$result['result'][$i]['UF_CRM_1592106903']}}</td>
                <td>{{$result['result'][$i]['UF_CRM_1592205695']}}</td>
            </tr>
        @endfor
    </table>
    <br><br><br>

    <a class="btn btn-primary" href="/" role="button">Voltar</a>
@endsection
