<?php
// Validacion de Acceso
auth();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/login.css">

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="cont-admin">
        <div class="close">
            <img src="./recursos/exit.png" alt="close">
            <form action="./logout" method="post">
                <button type="submit" >Salir</button>
            </form>
        </div>
        <h4 class="event" >Dashboar de administración del evento Hackathon 2023</h4>
        

        <form class="form-event" id="formEvento" >
            <h5>Formulario de items del evento Hackathon</h5>
            <br>

            <div class="mb-3">
                <label for="que" class="form-label">Que es el evento (Hackathon) </label>
                <textarea class="form-control" name="que" placeholder="Puedes cambiar el valor por defecto, en la Landing page"><?php  echo $que ?></textarea>
            </div>

            <div class="mb-3">
                <label for="objetivo">Objetivo del evento (Hackathon)</label>
                <textarea class="form-control" name="objetivo"  placeholder="Puedes cambiar el valor por defecto, en la Landing page" ><?php  echo $objetivo ?></textarea>
            </div>

            <div class="mb-3">
                <label for="premios">Premios del evento (Hackathon)</label>
                <textarea class="form-control" name="premios"  placeholder="Puedes cambiar el valor por defecto, en la Landing page" ><?php  echo $premios ?></textarea>
            </div>

            <div class="mb-3">
                <label for="donde">Donde es el evento (Hackathon)</label>
                <textarea class="form-control" name="donde"  placeholder="Puedes cambiar el valor por defecto, en la Landing page" ><?php  echo $donde ?></textarea>
            </div>

            <div class="mb-3">
                <label for="cuando">Cuando es el evento (Hackathon)</label>
                <textarea class="form-control" name="cuando"  placeholder="Puedes cambiar el valor por defecto, en la Landing page" ><?php  echo $cuando ?></textarea>
            </div>

            <?php $hashID = password_hash($id, PASSWORD_BCRYPT); ?> <!-- encriptar el id, para evitar alteraciones -->
            <input type="hidden" name="id" value="<?php  echo $hashID ?>" >

            <input type="submit" class="btn btn-success" name="newCancion" value="Modificar">

        </form>

        <h5>Tabla de participantes inscriptos al evento Hackathon</h5>
        <table class="table responsive">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($participantes)) { ?> <!-- Validacion para mostrar la lista de participantes -->
                <?php foreach ($participantes as $participante) {  ?> <!-- iteracion -->
                    <tr>
                    <td><?php echo $participante->nombre ?></td>
                    <td><?php echo $participante->telefono ?></td>
                    <td><?php echo $participante->email ?></td>
                </tr>
                <?php } ?>

                    
                <?php }else { ?> <!-- Validacion en caso de que no hayan participantes -->
                    <tr>
                    <td><h6>No hay participantes inscriptos</h6></td>
                    <td></td>
                    <td></td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>

    </div>


    <script src="./js/eventos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- cdn de alertas personalizadas -->

</body>

</html>