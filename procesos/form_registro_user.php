<?php
// print_r($_POST);exit;
require_once "../includes/class_user.php";
$user_sistema = new Usuario();
$respuesta = $user_sistema->guardar_usuario(
    $_POST['identificacion'], 
    $_POST['nombres'],
    $_POST['apellidos'],
    $_POST['emailregis'],
    $_POST['passwregis']
);
echo $respuesta;