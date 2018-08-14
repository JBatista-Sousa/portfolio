@extends('layouts.template')
@section('conteudo')
<h3>Listagem de Cursos</h3>
<input type="submit" class="btn btn-primary" name="" value="Cadastrar">
<div class="row">
  <body>
    <table class="table table-striped">
      <tr>
        <th>Nome</th>
        <th>Descricao</th>
        <th>Coordenador</th>
        <th>CargaHoraria</th>
        <th>Ação</th>
      </tr>
      @foreach ($cursos as $curso)
      <tr>
        <td>{{$curso->nome}}</td>
        <td>{{$curso->descricao}}</td>
        <td>{{$curso->coordenador}}</td>
        <td>{{$curso->cargaHoraria}}</td>
        <td>
          <a href="/cursos/{{ $curso->id }}"><button type=button  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button></a>
          <a href="/cursos/{{ $curso->id }}/destroy">
            <button type=button  class="btn btn-danger">
              <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </button>
          </a>
          <a href="/cursos/{{ $curso->id }}/edita"><button type=button  class="btn btn-info"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
        </td>
        @endforeach
      </table>
    </body>
  </div>
  @endsection
