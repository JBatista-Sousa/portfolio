@extends('layouts.template')

@section('conteudo')

<h3 class="title-pg">Cadastro de Curso</h3>

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
    <form method="post" action="/cursos">
      @csrf

      <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" type="text" name="nome" placeholder="Nome do curso">
      </div>

      <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" name="descricao"></textarea>
      </div>

      <div class="form-group">
        <label for="coordenador">Informe o nome do coordenador</label>
        <input class="form-control" type="text" name="coordenador" placeholder="Nome do coordenador">
      </div>

      <div class="control-group">
        <label for="Carga">Carga Horária do curso</label>
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
  <a href="{{action('CursoController@lista')}}">Listar Cursos</a>
</div>


@endsection
