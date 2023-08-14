<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");    

    if(isset($_POST['nombre']))      $nombre = $_POST['nombre']; 
    if(isset($_POST['jornada']))      $nombre = $_POST['jornada']; 
    if(isset($_POST['docente']))      $nombre = $_POST['docente']; 
    if(isset($_POST['area']))      $nombre = $_POST['area']; 

    $conexion = new Database;  
    $result = $conexion->CrearMateria($nombre,$jornada,$docente,$area);

    header("Location: ".ROOT."modulos/materias/materias.php?mensaje=".$result);

?>
