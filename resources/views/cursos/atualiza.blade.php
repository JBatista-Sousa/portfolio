@extends('layouts.template')

@section('conteudo')

<h3 class="title-pg">Atualização de Curso</h3>

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
    <form method="post" action="/cursos/{{$curso->id}}">
      @csrf

      <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" value="{{$curso->nome or old('nome')}}" type="text" name="nome" placeholder="Nome do curso">
      </div>

      <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" name="descricao">{{$curso->descricao or old('descricao')}}</textarea>
      </div>

      

      <!--<div class="form-group">
        <label for="modulo">Informe a quantidade de módulos do curso</label>
        <select class="form-control" name="modulo">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>-->

      <div class="control-group">
        <label for="modulo">Módulo</label>
        <div class="controls">
          <input class="form-control" value="{{$curso->modulo or old('modulo')}}" name="modulo" placeholder="Informe a quantidade de módulos" type="text">
        </div>
      </div>


      <div class="form-group">
        <label for="coordenador">Informe o nome do coordenador</label>
        <input class="form-control" value="{{$curso->coordenador or old('coordenador')}}" type="text" name="coordenador" placeholder="Nome do coordenador">
      </div>

      <div class="control-group">
        <label for="Carga">Carga Horária do curso</label>
        <div class="controls">
          <input class="form-control" value="{{$curso->cargaHoraria or old('cargaHoraria')}}" name="cargaHoraria" placeholder="Informe a carga horária" type="text">
        </div>
      </div>

      <input type="submit" class="btn btn-primary" name="" value="Atualizar">
      <input type="reset" class="btn btn-secondary"  name="" value="Limpar">
    </form>
  </div>
</div>





<div>
  <a href="{{action('CursoController@lista')}}">Listar Cursos</a>
</div>


@endsection