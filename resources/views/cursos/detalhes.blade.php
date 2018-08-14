@extends('layouts.template')
@section('conteudo')
<<<<<<< HEAD
<h3>Detalhes do curso: {{$curso->nome}} </h3>
<ul>
  <li>
    <b>Descrição:</b> {{$curso->descricao}}
  </li>
  <li>
    <b>Coordenador:</b> {{$curso->coordenador}}
  </li>
  <li>
    <b>CargaHoraria:</b> {{$curso->cargaHoraria}}
  </li>
</ul>
<div>
=======
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
>>>>>>> 1ccd6f4748404727ca8707b653f6247327958ebb
  <a href="{{action('CursoController@lista')}}">Listar Cursos</a>
</div>
<div>
  <a href="{{action('CursoController@cadastro')}}">Página de Cadastro</a>
<<<<<<< HEAD
</div>
=======
</div> -->


>>>>>>> 1ccd6f4748404727ca8707b653f6247327958ebb
@endsection
