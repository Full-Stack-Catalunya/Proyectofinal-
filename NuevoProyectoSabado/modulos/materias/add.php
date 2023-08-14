<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");    

    if(isset($_POST['nombre']))      $nombre = $_POST['nombre']; 
    if(isset($_POST['jornada']))      $jornada = $_POST['jornada']; 
    if(isset($_POST['docente']))      $docente = $_POST['docente']; 
    if(isset($_POST['area']))      $area = $_POST['area']; 

    $conexion = new Database;  
    $result = $conexion->CrearMateria($nombre,$jornada,$docente,$area);

    header("Location: ".ROOT."modulos/materias/materias.php?mensaje=".$result);

?>
