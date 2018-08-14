@extends('layouts.template')
@section('conteudo')
<h3>Detalhes do professor: {{$professor->nome}} </h3>
<ul>
  <li>
    <b>Formação:</b> {{$professor->formacao}}
  </li>
  <li>
    <b>Titulação:</b> {{$professor->titulacao}}
  </li>
</ul>
<div>
  <a href="{{action('ProfessorController@lista')}}">Listar Professores</a>
</div>
<div>
  <a href="{{action('ProfessorController@cadastro')}}">Página de Cadastro</a>
</div>
@endsection
