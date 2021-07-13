
<?php

require_once "class_conexion.php";

class Notas extends Conexion{
    private $nombre_estudiante;
    private $apellido_estudiante;
    private $nota1;
    private $nota2;
    private $nota3;
    private $conexion;

    function __construct()
    {
        $this->conexion=new Conexion();
        $this->conexion =$this->conexion->conexion_bd_bictia();
    }

    function guardar_nota($nombre_form,$apellido_form,$nota1_form,$nota2_form,$nota3_form){
        $this->nombre_estudiante=$nombre_form;
        $this->apellido_estudiante=$apellido_form;
        $this->nota1=$nota1_form;
        $this->nota2=$nota2_form;
        $this->nota3=$nota3_form;


        $query_consulta="INSERT INTO tb_notas(nombre_detalle,apellido,correo,pass)VALUES(?,?,?,?)";
        $insert=$this->conexion->prepare($query_consulta);
        $array_data_user = array(
            $this->nombre,
            $this->apellido,
            $this->correo,
            $this->pass,
        ) ;
        $insert->execute($array_data_user);
