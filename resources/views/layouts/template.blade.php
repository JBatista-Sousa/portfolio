<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->
  <!--<link href="assets/css/bootstrap.min.css" rel="stylesheet">--> 

  <!--////////////////////////////////////////////////////////////////////////////////////////-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


   <!--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">-->

  <!--////////////////////////////////////////////////////////////////////////////////////////-->
   
  <!--<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">-->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>

<div class="container">

  <div class="row">
    <header class="page-header">
      <h1> Portfólio | IFPI-CAPAU </h1>
    </header>
  </div>
  
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 estilo">

          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{action('CursoController@cadastro')}}">Cursos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{action('DisciplinaController@cadastro')}}">Disciplinas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{action('PeriodoController@cadastro')}}">Periodos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{action('ProfessorController@cadastro')}}">Professores</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  

@yield('navegacao')
@yield('conteudo')
@yield('rodape')

  <div class="row">
    <footer class="page-footer">
      <p> IFPI-Campus Paulistana, BR 407. </p>
    </footer>
  </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--<script src="{{asset('js/bootstrap.min.js')}}"></script>-->
</body>
</html>
