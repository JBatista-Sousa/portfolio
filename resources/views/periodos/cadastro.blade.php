@extends('layouts.template')
@section('conteudo')
<h3 class="title-pg">Cadastro de Periodos</h3>
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
    <form method="post" action="/periodos">
      @csrf
      <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" type="text" name="nome" placeholder="Nome do Período">
      </div>
      <input type="submit" class="btn btn-primary" name="" value="Cadastrar">
      <input type="reset" class="btn btn-secondary"  name="" value="Limpar">
    </form>
  </div>
</div>
@endsection
