<?php

require_once "class_conexion.php";

class Usuario extends Conexion
{
    private $identificacion;
    private $nombre;
    private $apellido;
    private $email;
    private $pass;



    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conexion_bd_notas();
    }
function guardar_usuario($identificacion_form, $nombre_form, $apellido_form, $email_form, $pass_form)
    {
        $this->identificacion = $identificacion_form;
        $this->nombre = $nombre_form;
        $this->apellido = $apellido_form;
        $this->email = $email_form;
        $this->pass = $pass_form;
       
       
        $foca_consulta = "INSERT INTO tb_usuario (identificacion, nombre, apellido, correo, pass) VALUES (?,?,?,?,?)";
        $insert = $this->conexion->prepare($foca_consulta);
        $array_data_user = array(
            $this->identificacion,
            $this->nombre,
            $this->apellido,
            $this->email,
            $this->pass,
        );
        $insert->execute($array_data_user);
        return "Registro exitoso";
    }
}