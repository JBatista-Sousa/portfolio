@extends('layouts.template')

@section('conteudo')
<h3>Detalhes do curso: {{$curso->nome}} </h3>
<ul>
  <li>
    <b>Descrição:</b> {{$curso->descricao}}
  </li>
  <li>
    <b>Modulo:</b> {{$curso->modulo}}
  </li>
  <li>
    <b>Coordenador:</b> {{$curso->coordenador}}
  </li>
  <li>
    <b>CargaHoraria:</b> {{$curso->cargaHoraria}}
  </li>
</ul>

<div>
  <a href="{{action('CursoController@lista')}}">Listar Cursos</a>
</div>

<div>
  <a href="{{action('CursoController@cadastro')}}">Página de Cadastro</a>
</div>


@endsection
