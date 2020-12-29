<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/crud.css">

    <title>Crud</title>
</head>

<body>
    <div class="container-crud">

        <div class="crud">
            <?php 
                echo "<h3>Usuario: ". $_SESSION['correo']. "</h3>";
            ?>
            <form action="" method="post">

                <div class="cerrar-sesion">

                    <input  type="submit" name="cerrar-sesion" id="" value="Cerrar sesion">
                </div>

                <br>
                <br>

                <div class="container-input">
                    
                    <i class="fas fa-user"></i><input type="text" name="crud-nombre" id="" placeholder="Nombre">

                </div>
                <div class="container-input">
                    <i class="fas fa-hourglass-half"></i><input type="number" name="crud-edad" id="" placeholder="Edad">

                </div>
                <div class="container-input">
                    <i class="far fa-calendar-alt"></i><input type="date" name="crud-fechaNacim" id="" placeholder="Fecha">

                </div>
                <div class="container-input">
                    <i class="fas fa-venus-mars"></i><input type="genero" name="crud-genero" id="" placeholder="Genero M/F">

                </div>
                <div class="container-input">
                    <i class="fas fa-envelope"></i><input type="email" name="crud-correo" id="" placeholder="correo">

                </div>

                <br>
                <div class="crud-boton">
                    <input  type="submit" name="insertar" id="" value="Insertar">

                </div>

                <div class="crud-boton">

                    <input  type="submit" name="consultar" id="" value="Consultar">
                </div>

                <?php

                    if(isset($_SESSION['correo'])){
                        include_once("model/m-validar-crud.php"); 
                    }else{
                        header('Location: index.php');
                    }
                ?>

            </form>
        </div>
    </div>
</body>

</html>