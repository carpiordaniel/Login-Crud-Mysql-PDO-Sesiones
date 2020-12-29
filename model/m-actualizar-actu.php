<?php 

try{

    if(isset($_POST['update-actualizar'])){
        $nombre= $_POST['update-nombre'];
        $edad=$_POST['update-edad'];
        $fechaNac=$_POST['update-fechaNacim'];
        $genero=$_POST['update-genero'];
        $correo =$_POST['update-correo'];
         

        include_once("m-conexion.php");
        $query = "UPDATE datos SET 
        NOMBRE=?,
        EDAD =?,
        FECHA_NACIMIENTO=?,
        GENERO=?
        WHERE CORREO=?";
        $query = "UPDATE datos SET 
        NOMBRE = ?,
        EDAD = ?,
        FECHA_NACIMIENTO= ?,
        GENERO= ?
        WHERE CORREO= ?";
        $stmt=$conexion->prepare($query);
        $stmt->bindParam(1,$nombre);
        $stmt->bindParam(2,$edad);
        $stmt->bindParam(3,$fechaNac);
        $stmt->bindParam(4,$genero);
        $stmt->bindParam(5,$correo);
        
        $statement = $stmt->execute();
        
        if($statement){
            echo "<script> alert('Actualizado Correctamente') </script>";
            echo "<script> window.location.replace('../crud.php') </script>";
        }else{
            echo "<script> alert('Error al actualizar') </script>";
            echo "<script> window.location.replace('../crud.php') </script>";
        }
    }

}catch(PDOException $e){
    echo $e->getMessage();
}