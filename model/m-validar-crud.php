<?php 

if(isset($_SESSION['correo'])){
    

if(isset($_POST['insertar'])){
    

    if(
        !empty($_POST['crud-nombre']) && !empty($_POST['crud-edad'])&&
       !empty($_POST['crud-fechaNacim']) && !empty($_POST['crud-genero'])  
       && !empty($_POST['crud-correo'])  
    ){
     

    $nombre=$_POST['crud-nombre'];
    $edad=$_POST['crud-edad'];
    $fechaNac=$_POST['crud-fechaNacim'];
    $genero=$_POST['crud-genero'];
    $correo=$_POST['crud-correo'];
    require_once('../login-crud/model/m-insertar.php');
    
    // echo "nombre " . $_POST['crud-nombre'];
    }else{
     echo"Los campos estan vacios";
    
    }
    
  

}

if(isset($_POST['consultar'])){
    
    include_once('../login-crud/model/m-consultar.php');

}
if(isset($_POST['cerrar-sesion'])){
    
session_destroy();
header('Location: ../login-crud');
}



}
?>