<?php
// print_r($_POST);exit;
require_once "../includes/class_materia.php";
$user_sistema = new materia();
$respuesta = $user_sistema->guardar_materia(
    $_POST['crear_materia']
  
);
echo $respuesta;