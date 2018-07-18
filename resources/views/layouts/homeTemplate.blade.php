
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


  <link rel="stylesheet" href="{{asset('css/styleHome.css')}}">

</head>
<body>

<div class="container">

  <div class="row">
    <header class="page-header">
      <h1> Portfólio </h1>
      <nav class="navbar navbar-default custom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 estilo">

          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{action('CursoController@cadastro')}}">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Professores</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
    </header>
  </div>
  
  <!--<nav class="navbar navbar-default navbar-static-top">-->
  <!--<nav class="navbar navbar-default" role="navigation">-->
  

  @yield('navegacao')
  @yield('conteudo')
  @yield('rodape')

  

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  
</body>
</html>