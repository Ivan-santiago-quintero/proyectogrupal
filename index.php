<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="./bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container m-3">
    <form">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-xl-8">
                <div class="card">

                    <div class="card-header">
                        <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-login-list" data-toggle="list" href="#list-login" role="tab" aria-controls="login">Login</a>
                            <a class="list-group-item list-group-item-action" id="list-register-list" data-toggle="list" href="#list-register" role="tab" aria-controls="register">Registrar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <!--Formulario Login-->
                            <div class="tab-pane fade show active" id="list-login" role="tabpanel" aria-labelledby="list-login-list">
                                <form method="POST" action="login.php">
                                    <div class="form-group">
                                        <label for="correo_user">Correo electrónico</label>
                                        <input type="email" class="form-control" id="correo_user" name="correo_user" aria-describedby="emailHelp" required>
                                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass_user">Contraseña</label>
                                        <input type="password" class="form-control" id="pass_user" name="pass_user" required>
                                    </div>
                                    <span> 
                                        <?php
                                        //manera 1 
                                        if (isset($_GET['e'])) {
                                            echo $_GET['e'];
                                        }
                                        ?>
                                   </span>
                                    <button type="submit" class="btn btn-primary">Ingresar</button> 
                                </form>
                            </div>
                            <!--Formulario Register-->



                            <div class="tab-pane fade" id="list-register" role="tabpanel" aria-labelledby="list-register-list">
                                <form name="forregistro" method="POST" action="procesos/form_registro_user.php">

                                    <div class="form-group">
                                        <label for="identificacion">Identificaci&oacuten</label>
                                        <input type="text" class="form-control" id="identificacion" name="identificacion">
                                    </div>

                                    <div class="form-group">
                                        <label for="nombres">Nombres</label>
                                        <input type="text" class="form-control" id="nombres" name="nombres">
                                    </div>

                                    <div class="form-group">
                                        <label for="apellidos">Apellidos</label>
                                        <input type="text" class="form-control" id="apellidos" name="apellidos">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Correo electrónico</label>
                                        <input type="email" class="form-control" id="emailregis" name="emailregis" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="passw">Contraseña</label>
                                        <input type="password" class="form-control" id="passwregis" name="passwregis">
                                    </div>

                                    <div class="form-group">
                                        <label for="confirpassword">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" id="confirpassword" name="confirpassword" onkeypress="validar_pass()">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Registrarse</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/jquery-3.6.min.js"></script>
    <script src="./bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function validar_pass(){
        let text_input = document.getElementById('passwregis').value
        let text_confirm = document.getElementById('confirpassword').value
        if(text_input == text_confirm){
            alert("esta bien")
        }
    }
    </script>
</body>
</html>