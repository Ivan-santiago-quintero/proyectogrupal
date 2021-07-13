<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    <link rel="stylesheet" type="text/css" href="../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
  </head>
  <!--Creado por Hary-->
<body>
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
              Estudiantes
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../estudiantes/index.php">Ver estudiantes</a>
              <a class="dropdown-item" href="../materias/index.php">Materias</a>
              <a class="dropdown-item" href="../archivos/archivosprofesor.php">Archivos</a>
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
            <a class="dropdown-item" href="../roles/index.php">Roles</a>
            <a class="dropdown-item" href="../usuario/index.php">Usuario</a>
            <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="../../index.php">Cerrar sesion</a>
           </div>
          </li>
       </ul>
     </div>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-9 col-xl-9">
        <div class="card">
          <div class="card-header">
            Listado de Materias
            <td><a href="./crear.php" class="btn btn-success Materias" tabindex="-1" role="button" aria-disabled="true">Crear materias</a> 
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Materia</th>
                  <th scope="col">Herramientas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Orquesta</td>
                  <td><a href="./editar.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Modificar</a>
                    <input type="button" value="Eliminar" class="btn btn-danger"></button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Quimica</td>
                  <td><a href="./editar.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Modificar</a>
                    <input type="button" value="Eliminar" class="btn btn-danger"></button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Sociales</td>
                  <td><a href="./editar.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Modificar</a>
                    <input type="button" value="Eliminar" class="btn btn-danger"></button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Educación Física</td>
                  <td><a href="./editar.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Modificar</a>
                    <input type="button" value="Eliminar" class="btn btn-danger">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
 

      <script src ="../../js/jquery-3.6.min.js"></script>
      <script src= "../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
