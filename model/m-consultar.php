<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login-crud/css/consultar.css">
    <title></title>
</head>
<body>
    

<?php

include_once('m-conexion.php');
$query = "SELECT * FROM datos;
";
$stmt = $conexion->prepare($query);

$statement = $stmt->execute();
if($statement){
    $numrow = $stmt->rowCount();
    if($numrow>0){
        echo "<div class='consultar'> <form action='model/m-actualizar-form.php' method='post'>";
        echo "<table > <thead> ";
        echo "<tr>";
        echo "<td>Nombre</td>";
        echo "<td>Edad</td>";
        echo "<td>fecha Nacimiento</td>";
        echo "<td>Genero</td>";
        echo "<td>Correo</td>";
        echo "<td></td>";
        echo "<td></td>";


        echo "</tr> </thead> <tbody>";
        while($fila = $stmt->fetch()){
            echo "<tr>";

            // echo "<td> <input type='text' name='nombre' value='". $fila['NOMBRE']."'> <td>";
            echo "<td>". $fila['NOMBRE']. "</td>";
            echo "<td>". $fila['EDAD']. "</td>";
            echo "<td>". $fila['FECHA_NACIMIENTO']. "</td>";
            echo "<td>". $fila['GENERO']. "</td>";
            echo "<td>". $fila['CORREO']. "</td>";


            echo "<td> <div class='consultar-boton'> <a href='model/m-eliminar-actu.php?correo=".$fila['CORREO']." '><i class='fas fa-trash-alt'></i> </a> </div> </td>";
            echo "<td> <div class='consultar-boton'>
            <a href='model/m-actualizar-form.php?correo=".$fila['CORREO']."&nombre=".$fila['NOMBRE']."
            &edad=".$fila['EDAD']."&fechaNac=".$fila['FECHA_NACIMIENTO']."&genero=".$fila['GENERO']." '><i class='fas fa-edit'></i></a> 
            </td> </td>";
            echo "</tr>";         
        }
        echo " </tbody> </table>  
        
        </form> </div>";
    }else {
        echo "No hay registros";       
    }
    
}else{
    echo"Error al consultar";

}

?>

</body>
</html>