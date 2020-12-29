<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/index.css">
    <title>Login Crud</title>
</head>
<body>
    <div class="container">
        
        <div class="login">

        <form action="" method="post">
            <h2>Welcome back!</h2>
            <p>Please login to your account.</p>
            <br>

          
            <input  required type="email" name="login-correo" placeholder="Email Address" > <br>
         
            <input required type="password" name="login-password" placeholder="Password" > <br>
            <input class="login-boton" type="submit" name="login-boton" value="Login"><br>
            <?php include_once("model/m-login.php"); ?>
        </form>
        </div>

    </div>
</body>
</html>