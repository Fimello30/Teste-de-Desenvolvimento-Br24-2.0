@extends('layout.site')

@section('Titulo','Lista de contatos')

@section('conteudo')
    <h2>Lista de contatos</h2><br><br><br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">CPF</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
        </tr>

        @for ($i = 0; $i < $result['total']; $i++)
            <tr>
                <td>{{$result['result'][$i]['NAME']}}</td>
                <td>{{$result['result'][$i]['UF_CRM_1592106833']}}</td>
                <td>
                    @for ($j = 0; $j < count($result['result'][$i]['EMAIL']); $j++)
                        {{$result['result'][$i]['EMAIL'][$j]['VALUE']}}<br>
                    @endfor
                </td>
                <td>
                    @for ($j = 0; $j < count($result['result'][$i]['PHONE']); $j++)
                        {{$result['result'][$i]['PHONE'][$j]['VALUE']}}<br>
                    @endfor
                </td>
            </tr>
        @endfor
    </table>
    <br><br><br>

        <a class="btn btn-primary" href="/" role="button">Voltar</a>
@endsection
