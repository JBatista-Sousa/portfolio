@extends('layouts.template')
@section('conteudo')
<h3>listagem das Disciplinas</h3>
<div class="row">
  <body>
    <table class="table table-striped">
      <tr>
        <th>Nome</th>
        <th>Descricao</th>
        <th>CargaHoraria</th>
        <th>Ação</th>
      </tr>
      @foreach ($disciplinas as $disciplina)
      <tr>
        <td>{{$disciplina->nome}}</td>
        <td>{{$disciplina->descricao}}</td>
        <td>{{$disciplina->cargaHoraria}}</td>
        <td>
          <a href="/disciplinas/{{ $disciplina->id }}"><button type=button  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button></a>
          <a href="/disciplinas/{{ $disciplina->id }}/destroy">
            <button type=button  class="btn btn-danger">
              <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </button>
          </a>
          <a href="/disciplinas/{{ $disciplina->id }}/edita"><button type=button  class="btn btn-info"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
        </td>
        @endforeach
      </table>
    </body>
  </div>
  @endsection
