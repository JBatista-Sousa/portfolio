@extends('layouts.template')

@section('conteudo')

<!--<div>
  <a href="{{action('CursoController@cadastro')}}"><button type=button  class="btn btn-default">Página de Cadastro</button></a>
</div>-->

<h3>listagem dos cursos</h3>
<div class="row">
  <body>
    <table class="table table-striped">
      <tr>
        <th>Nome</th>
        <th>Descricao</th>
        <th>Coordenador</th>
        <th>CargaHoraria</th>
        <th>Ação</th>
      </tr>
      @foreach ($cursos as $curso)
      <tr>
        <td>{{$curso->nome}}</td>
        <td>{{$curso->descricao}}</td>
        <td>{{$curso->coordenador}}</td>
        <td>{{$curso->cargaHoraria}}</td>

        <!--<td>
          <a href="/cursos/{{ $curso->id }}"><button type=button  class="btn btn-primary">Visualizar</button></a>
          <a href="/cursos/{{ $curso->id }}/destroy"><button type=button  class="btn btn-xs btn-danger">Deletar</button></a>
          <a href="/cursos/{{ $curso->id }}/edita"><button type=button  class="btn btn-info">Editar</button></a>


          <a href="/cursos/{{ $curso->id }}/edita"><button type=button  class="btn btn-xs btn-info"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
        </td>-->

        <td>
         <!--<button type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
          </button>-->

           <a href="/cursos/{{ $curso->id }}"><button type=button  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button></a>

           <!--<button type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
          </button>-->

           <a href="/cursos/{{ $curso->id }}/destroy">
            <button type=button  class="btn btn-danger">
              <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </button>
           </a>


          <!--<button type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
          </button>-->

           <a href="/cursos/{{ $curso->id }}/edita"><button type=button  class="btn btn-info"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>

        <!--<button class="btn btn-info">
          <i class="fa fa-lock"></i>
        </button>

        <button class="btn btn-info">
        <i class="fa fa-address-book" aria-hidden="true"></i>
        </button>-->
        </td>

        <!--<button type="button" class="btn btn-default btn-sm">
          <span class="glyphicons glyphicons-bin"></span>
        </button>-->

        <!--<td>
          <form action="{{url('/cursos/destroy')}}" method="post">
              <input type="hidden" name="id" value="{{$curso->id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <button type="submit" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash">Deletar</span>
              </button>
          </form>
        </td>-->

        <!--<td><a href="/cursos/{{ $curso->id }}"><button type=button  class="btn btn-primary">Visualizar</button></a></td>-->
        <!--<td><a href=""><button type=button  class="btn btn-xs btn-Warning">Editar</button></a></td>-->
        <!--<td><a href="/cursos/{{ $curso->id }}"><button type=button  class="btn btn-xs btn-danger">Apagar</button></a></td>-->
        @endforeach
      </table>
    </body>
  </div>
  @endsection
