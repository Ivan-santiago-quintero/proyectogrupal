<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>
    <link rel="stylesheet" type="text/css" href="../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../index.php"><img src="../../img/logo.jpg" weigth="80 "height="70"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon">   
             </span>    
           </button>
     
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mi información
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../modulos/notas/index.php">notas</a>
                <a class="dropdown-item" href="../../modulos/archivos/archivo.php">Archivos</a>
             </div>
            </li>
            
         </ul> 
         <div class="usuario" class="collapse navbar-collapse" id="navbarSupportedContent"></div>
          <ul class="navbar-nav mr-auto" >
            <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Usuario
              </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="../../index.php">Cerrar sesion</a>
             </div>
            </li>
         </ul>
       </div>
    </nav>
  
    <div class="container">
        <div id="crear" class="row justify-content-center">
            <div class="col-sm-9 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        
                       <h3>Cargar Ficheros Jessika Camila Ramirez Sanchez</h3>  
            
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="form-group">
                          <label for="identificacion">Identificación</label>
                          <input type="number" class="form-control" id="identificacion" placeholder="1031258369">
                        </div>
                        <div class="form-group">
                          <label for="username">User Name</label>
                          <input type="text" class="form-control" id="username" placeholder="jess.camila">
                        </div>
                        <div class="form-group">
                          <label for="materias">Materias</label>
                          <input type="text" class="form-control" id="materias" placeholder="Matemáticas">
                        </div>

                        <div class="form-group">
                            <label class="btn btn-primary">

                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </label>
                          </div>
                                               
                        <button type="submit" class="btn btn-primary">Cargar Fichero</button>
                      </form> 
                      

                    </div>

                </div>
            </div>
        </div>

    </div>
    
    <div class="container">
        <div id="crear" class="row justify-content-center">
            <div class="col-sm-9 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h1>Descargas Disponibles</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Identificacion</th>
                                <th scope="col">Materia</th>
                                <th scope="col">Archivo</th>
                                <th scope="col">Herramientas</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="#">Descargar</a>
                                    <a href="#">Eliminar</a>
                                    

    <script src ="../../js/jquery-3.6.min.js"></script>
     <script src= "../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
