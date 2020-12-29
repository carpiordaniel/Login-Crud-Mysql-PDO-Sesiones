<?php 

try{


    $correoEliminar = $_GET["correo"];

    include_once("m-conexion.php");
    $query="DELETE from datos where CORREO = ?";
    $stmt =$conexion->prepare($query);
    $stmt->bindParam(1,$correoEliminar);
    $statement= $stmt->execute();
    if($statement){
       
        echo "<script> alert('Eliminado Correctamente') </script>";
        echo "<script> window.location.replace('../crud.php') </script>";

    }else{
        
        echo "<script> alert('Error al eliminar') </script>";

    }


}catch(PDOException $e){
    echo $e->getMessage();
}






?>