<?php

include_once('m-conexion.php');
$query = "INSERT INTO datos (NOMBRE, EDAD, FECHA_NACIMIENTO,GENERO, CORREO) 
VALUES(?,?,?,?,?);
";
$stmt = $conexion->prepare($query);
$stmt->bindParam(1,$nombre);
$stmt->bindParam(2,$edad);
$stmt->bindParam(3,$fechaNac);
$stmt->bindParam(4,$genero);
$stmt->bindParam(5,$correo);

$statement = $stmt->execute();
if($statement){
    echo"Datos insertados correctamente";
}else{
    echo"Error al insertar";

}



?>