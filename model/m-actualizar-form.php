<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="../css/crud.css">
    <title>Crud</title>
</head>
<body>
<div class="container-crud update">
    <div class="crud update">
        <form action="m-actualizar-actu.php" method="post">

            <div class="container-input">
                
                <i class="fas fa-user"></i><input type="text" name="update-nombre" value='<?php echo  $_GET['nombre'] ?>' >

            </div>
            
            <div class="container-input">
                
                <i class="fas fa-user"></i><input type="number" name="update-edad" value="<?php echo $_GET['edad']?>" >

            </div>

            <div class="container-input">
                
                <i class="fas fa-user"></i><input type="date" name="update-fechaNacim"value="<?php echo $_GET['fechaNac'] ?>" >

            </div>

            <div class="container-input">
                
                <i class="fas fa-user"></i><input type="genero" name="update-genero"value="<?php echo $_GET['genero'] ?>" >

            </div>

            <div class="container-input">
                
                <i class="fas fa-user"></i><input type="email" name="update-correo" value="<?php echo $_GET['correo'] ?>">

            </div>

            <br>

            <div class="crud-boton">

                <input type="submit" name="update-actualizar" id="" value="actualizar">     
            </div>
        
        <br>

        </form>

    </div>



</div>

</body>
</html>