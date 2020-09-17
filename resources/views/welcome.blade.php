<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Laboratorio - Escuela de Diseño Gráfico UBB</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="../../vendor/img/LOGOH.png" alt="Logo" height="70px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="/">INICIO</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/solicitud">SOLICITUD DE PRÉSTAMO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">HORARIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CATÁLOGO</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  @if(Session::has('Mensaje')){{
  Session::get('Mensaje')
}}
@endif
<div class="jumbotron my-3">
  <h3 class="display-4">Laboratorio de Computación y Multimedia</h3>
  <h4 >Escuela de Diseño Gráfico</h4>
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>