@extends('layouts.template')

@section('conteudo')
<h3>Detalhes do curso: {{$disciplina->nome}} </h3>
<ul>
  <li>
    <b>Descrição:</b> {{$disciplina->descricao}}
  </li>
  <li>
    <b>CargaHoraria:</b> {{$disciplina->cargaHoraria}}
  </li>
</ul>

<div>
  <a href="{{action('DisciplinaController@lista')}}">Listar Disciplinas</a>
</div>

<div>
  <a href="{{action('DisciplinaController@cadastro')}}">Página de Cadastro</a>
</div>


@endsection
