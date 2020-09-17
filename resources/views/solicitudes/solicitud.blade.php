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
  <div class="container" style="margin-top:40px;margin-bottom:50px" >
    <div class="card">
      <div class="card-header text-center"><h4 class="card-title center">SOLICITUD DE PRÉSTAMO DE EQUIPO</h4>
      <h6 class="card-subtitle mb-2 text-muted text-center">Laboratorio de Computación y Multimedia</h6>
        <h6 class="card-subtitle mb-2 text-muted text-center">Escuela de Diseño Gráfico</h6>
    </div>
      <div class="card-body">
    <form action="{{url('/solicitud')}}" method="POST">
    {{ csrf_field() }}
			<div class="col-sm-12">
						<div class="row">
              <div class="col-sm-4 form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="Pilar" placeholder="Pilar" readonly> 
              </div>
              <div class="col-sm-4 form-group">
                <label>Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="González"placeholder="González" readonly>
              </div>
              <div class="col-sm-4 form-group">
                <label>Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="12345678" placeholder="12345678" readonly>
              </div>
            </div>						
						<div class="row">
							<div class="col-sm-6 form-group" >
                    <label for="exampleFormControlSelect1">Equipo</label>
                    <select class="form-control " id="equipo" name="equipo" >
                      <option>Camara</option>
                      <option>Tripode</option>
                      <option>Tableta gráfica</option>
                      <option>Lector externo de CD</option>
                    </select>
                  
              </div>	
              <div class="col-sm-6 form-group">
								<label>Fecha solicitud</label>
								<input type="date" name="fecha" id="fecha" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Asignatura</label>
                <input type="text" name="asignatura" id="asignatura"  class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Motivo solicitud</label>
                <textarea name="motivo" id="motivo" class="form-control" rows="1" ></textarea>
              </div>		
	    		  </div>
			    	<div class="row">
					    <div class="col-sm-6 form-group">
				    	  <label>Desde</label>
						    <input type="date" name="desde" id="desde" class="form-control">
					    </div>		
					    <div class="col-sm-6 form-group">
						    <label>Hasta</label>
						    <input type="date" name="hasta" id="hasta" class="form-control">
					    </div>	
				    </div>
				    <input type="submit" class="btn btn-lg btn-info float-right" value="Solicitar"></input>				
			</div>
    </form> 
    </div>
  </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>