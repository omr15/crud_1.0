<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


if(empty(trim($cod_estudiante))){
    echo "Por favor el código de estudiante.<br>";
 }
 if(empty(trim($dni))){
    echo "Por favor introduce un DNI.<br>";
}
 if(empty(trim($nombres))){
    echo "Por favor introduce un nombre.<br>";
 }
 if(empty(trim($apellidos))){
    echo "Por favor introduce los apellidos.<br>";
 }
 else{
    if(!preg_match("/^[0-9]{8}[a-zA-Z]$/", $dni)){
        echo "Por favor introduce un DNI válido (8 dígitos y una letra).<br>";
    }else{


    

    $sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
    $query= mysqli_query($con,$sql);


if($query){
    Header("Location: alumno.php");
    
}
}
}
?>