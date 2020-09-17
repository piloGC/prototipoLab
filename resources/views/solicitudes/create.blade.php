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
      <a class="navbar-brand" href="#"><img src="../../vendor/img/LOGOH.png" alt="Logo" height="70px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">INICIO
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">ESCUELA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ESTUDIANTES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ACADÉMICOS</a>
          </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LABORATORIO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Solicitud préstamo</a>
          <a class="dropdown-item" href="#">Horario</a>          
        </div>
          <li class="nav-item">
            <a class="nav-link" href="#">AGENDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NOTICIAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACTO</a>
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
                        <div class=" form-group">
								<input type="text" hidden name="id" class="form-control">
							</div>
							<div class="col-sm-5 form-group">
								<label>Nombre</label>
								<input type="text" name="nombre" class="form-control">
							</div>
							<div class="col-sm-5 form-group">
								<label>Apellido</label>
								<input type="text" name="apellido" class="form-control">
                            </div>
                        </div>
                            <div class="row">
                            <div class="col-sm-5 form-group">
								<label>Teléfono</label>
								<input type="text" name="telefono" class="form-control">
                            </div>
                            <div class="col-sm-5 form-group">
								<label>Fecha solicitud</label>
								<input type="date" name="fecha" class="form-control">
                            </div>
                            </div>
                            
              
						</div>						
						<div class="row">
							<div class="col form-group" style="margin-top:5px;margin-bottom:10px">
                <label>Equipo</label>
                <br>
                  <div class="form-check form-check-inline" style="margin-left:50px">
                    <input class="form-check-input" name="camara" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Cámara</label>
                  </div>
                  <div class="form-check form-check-inline" style="margin-left:10px">
                    <input class="form-check-input" name="tripode" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Trípode</label>
                  </div>
                  <div class="form-check form-check-inline"style="margin-left:10px">
                    <input class="form-check-input" name="tableta" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">Tableta gráfica</label>
                </div>
                <div class="form-check form-check-inline"style="margin-left:10px">
                    <input class="form-check-input" name="lector" type="checkbox" id="inlineCheckbox4" value="option4">
                    <label class="form-check-label" for="inlineCheckbox3">Lector externo de CD</label>
                </div>
              </div>	
              </div>
                <div class="row">
                    <div class="col-sm-5 form-group">
                        <label>Asignatura</label>
                        <input type="text" name="asignatura" class="form-control">
                    </div>
                    <div class="col-sm-7 form-group">
                        <label>Motivo solicitud</label>
                        <textarea name="motivo" id="input" class="form-control" rows="1" required="required"></textarea>
                    </div>		
	    		</div>
				<div class="row">
					<div class="col-sm-6 form-group">
				    	<label>Desde</label>
						<input type="date" name="desde" class="form-control">
					</div>		
					<div class="col-sm-6 form-group">
						<label>Hasta</label>
						<input type="date" name="hasta" class="form-control">
					</div>	
				</div>
				
				<input type="submit" name="solicitar" class="btn btn-lg btn-info float-right" value="Solicitar"></input>					
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