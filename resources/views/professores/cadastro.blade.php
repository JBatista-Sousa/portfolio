@extends('layouts.template')
@section('conteudo')
<h3 class="title-pg">Cadastro de Professor</h3>
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="row">
  <div class="col-md-4">
    <form method="post" action="/professores">
      @csrf
      <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" type="text" name="nome" placeholder="Nome do Professor">
      </div>
      <div class="form-group">
        <label for="formacao">Formação</label>
        <textarea class="form-control" name="formacao"></textarea>
      </div>
      <div class="form-group">
        <label for="titulacao">Informe a titulação do Professor</label>
        <input class="form-control" type="text" name="coordenador" placeholder="Titulação">
      </div>
      <input type="submit" class="btn btn-primary" name="" value="Cadastrar">
      <input type="reset" class="btn btn-secondary"  name="" value="Limpar">
    </form>
  </div>
</div>
<div>
  <a href="{{action('ProfessorController@lista')}}">Listar Professores</a>
</div>
@endsection
