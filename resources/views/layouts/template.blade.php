<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/css/sb-admin.min.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Portfolio</a>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Pesquisar ..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/cursos">
            <span>Cursos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/professores">
            <span>Professores</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/periodos">
            <span>Períodos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/disciplinas">
            <span>Disciplinas</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          @yield('conteudo')

=======
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
>>>>>>> db7dfc5d5bf4004740c16cca6277840a5978d155
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Portfolio - IFPI 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Realmente deseja sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione sair para encerrar sua sessão</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin.min.js')}}"></script>

  </body>

</html>
