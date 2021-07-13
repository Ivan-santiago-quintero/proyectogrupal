<?php

require_once "class_conexion.php";

class materia extends Conexion{
    private $nombre_materia;


    function __construct()
    {
        $this->conexion=new Conexion();
        $this->conexion =$this->conexion->conexion_bd_notas();
    }

function guardar_materia($nombre_materia_form){
        $this->nombre_materia=$nombre_materia_form;


        $query_consulta="INSERT INTO tb_materias(nombre)VALUES(?)";
        $insert=$this->conexion->prepare($query_consulta);
        $array_data_user = array(
            $this->nombre_materia,

        ) ;
        $insert->execute($array_data_user);
        return "La materia ha sido registrada exitosamente";
    }
}
