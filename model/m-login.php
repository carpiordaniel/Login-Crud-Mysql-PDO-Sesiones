<?php 
session_start();
if(isset($_POST['login-boton'])){
    if(!empty($_POST['login-password']) && !empty($_POST['login-correo'])){
        include_once("m-conexion.php");
        $correo=$_POST['login-correo'];
        $password=$_POST['login-password'];
        $query ="SELECT * FROM usuarios
        WHERE CORREO = ? AND CONTRASENIA= ? ";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(1,$correo);
        $stmt->bindParam(2,$password);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count==1){
            $_SESSION['correo'] = $correo;
            if(isset($_SESSION['correo'])){
                header("Location: ../login-crud/crud.php");
            }
        }else {
            echo "<span class='mensaje-error'>Usuario o contraseña incorrecto </span>" ;
        }

    }else{
        echo "<span class='mensaje-error'> Los campos no pueden estar vacios </span>";
    }
}

?>