@extends('layouts.template')
@section('conteudo')
<h3>listagem dos Professores</h3>
<div class="row">
  <body>
    <table class="table table-striped">
      <tr>
        <th>Nome</th>
        <th>Formação</th>
        <th>Titulação</th>
        <th>Ação</th>
      </tr>
      @foreach ($professores as $professor)
      <tr>
        <td>{{$professor->nome}}</td>
        <td>{{$professor->formacao}}</td>
        <td>{{$professor->titulacao}}</td>
        <td>
          <a href="/professores/{{ $professor->id }}"><button type=button  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button></a>
          <a href="professores/{{ $professor->id }}/destroy">
            <button type=button  class="btn btn-danger">
              <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </button>
          </a>
          <a href="/professores/{{ $professor->id }}/edita"><button type=button  class="btn btn-info"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
        </td>
        @endforeach
      </table>
    </body>
  </div>
  @endsection
