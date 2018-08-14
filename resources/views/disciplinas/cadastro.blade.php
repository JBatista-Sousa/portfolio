@extends('layouts.template')
@section('conteudo')
<h3 class="title-pg">Cadastro de Disciplina</h3>
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
    <form method="post" action="/disciplinas">
      @csrf
      <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" type="text" name="nome" placeholder="Nome da Disciplina">
      </div>
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" name="descricao"></textarea>
      </div>
      <div class="control-group">
        <label for="Carga">Carga Horária da Disciplina</label>
        <div class="controls">
          <input class="form-control" name="cargaHoraria" placeholder="Informe a carga horária" type="text">
        </div>
      </div>
      <input type="submit" class="btn btn-primary" name="" value="Cadastrar">
      <input type="reset" class="btn btn-secondary"  name="" value="Limpar">
    </form>
  </div>
</div>
<div>
  <a href="{{action('DisciplinaController@lista')}}">Listar Disciplinas</a>
</div>
@endsection
