<?php  
// Validacion de Acceso
authValidate(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="cont__Login">

        <form action="" method="post">

            <h2>Login</h2>

            <?php if (strlen($msg) > 0) { ?> <!-- Mostrar alerta en caso de error -->
                <div class="alerta">
                    <?php echo $msg ?>
                </div>
            <?php } ?>

            <input type="email" name="email" placeholder="Correo electronico"> <br>

            <input type="password" name="password" placeholder="Contraseña"> <br>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>

</body>

</html>