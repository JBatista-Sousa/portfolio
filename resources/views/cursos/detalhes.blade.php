@extends('layouts.template')

@section('conteudo')
<h3>Detalhes do curso: {{$curso->nome}}</h3>

<table class="table table-striped">
      <tr>
        <th>Descricao</th>
        <th>Coordenador</th>
        <th>CargaHoraria</th>
      </tr>

      <tr>
        <td>{{$curso->descricao}}</td>
        <td>{{$curso->coordenador}}</td>
        <td>{{$curso->cargaHoraria}}</td>
      </tr>

      </table>

        <!--/////////////////////////////////////////-->
    <h4>Períodos do Curso: {{$curso->nome}}</h4>

    <table class="table table-striped">
      <tr>
        <th>Nome</th>
        <th>Ação</th>
      </tr>
      @foreach ($periodos as $periodo)
      <tr>
        <td>{{$periodos->nome}}</td>
        <td>
           <a href="/cursos/{{ $curso->id }}"><button type=button  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button></a>

    
           <a href="/cursos/{{ $curso->id }}/destroy">
            <button type=button  class="btn btn-danger">
              <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </button>
           </a>

           <a href="/cursos/{{ $curso->id }}/edita"><button type=button  class="btn btn-info"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>

        </td>
      </tr>
      @endforeach
    </table>
    <a href="{{action('PeriodoController@cadastro')}}">Adicionar Periodo</a>
<!-- <div>
  <a href="{{action('CursoController@lista')}}">Listar Cursos</a>
</div>

<div>
  <a href="{{action('CursoController@cadastro')}}">Página de Cadastro</a>
</div> -->


@endsection
