<?php 

try{
    $host ="localhost";
    $user="root";
    $password="1234";
    $database="logincrud";

    $conexion = new PDO("mysql:host=$host;dbname=$database", $user, $password  );
    
}catch(PDOExceptio $e){
    echo "Error: ". $e->getMessage();
    die("Error al conectar:");
}
?>