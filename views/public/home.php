<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Hackathon 2023</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="page"> <!-- inicio del page  -->

        <div class="page__waves_top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#C8DB46" fill-opacity="1" d="M0,256L48,245.3C96,235,192,213,288,192C384,171,480,149,576,160C672,171,768,213,864,245.3C960,277,1056,299,1152,272C1248,245,1344,171,1392,133.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
        </div>

        <div class="landing"> <!-- inicio del landing  -->

            <h1>Evento Hackathon 2023</h1> <!-- title Principal -->

            <div class="container"> <!-- inicio del container  -->

                <div class="container__que"> <!-- inicio del container__que  -->
                    <h2>Que es?</h2>

                    <?php if (strlen($que) > 0) { ?> <!-- validamos que la longitud sea mayor a 0, si es mayor mostras el valor desde la base de datos  -->

                        <p> <!-- texto desde la basa de datos  -->
                            <?php echo $que ?> <!-- Mostrar aqui el valor que tiene la variable ($que) -->
                        </p>

                    <?php } else {  ?> <!-- En caso contrario se muestra el texto alternativo  -->

                        <p> <!-- texto alternativo  -->
                            Hackathon 2023 es un evento dedicado a promover la seguridad en el transporte y concienciar sobre las mejores prácticas en este ámbito. El evento busca reunir a profesionales, expertos, autoridades y público en general interesado en mejorar la seguridad en el transporte.
                        </p>

                    <?php } ?> <!-- Fin de la validacion if y el else  -->
                </div><!-- Fin del container__que  -->



                <div class="container__objetivo"> <!-- inicio del container__objetivo  -->
                    <h2>Objetivo</h2>
                    <?php if (strlen($objetivo) > 0) { ?> <!-- validamos que la longitud sea mayor a 0, si es mayor mostras el valor desde la base de datos  -->

                        <p> <!-- texto desde la basa de datos  -->
                            <?php echo $objetivo ?> <!-- Mostrar aqui el valor que tiene la variable ($objetivo) -->
                        </p>

                    <?php } else {  ?> <!-- En caso contrario se muestra el texto alternativo  -->

                        <p> <!-- texto alternativo  -->
                            El objetivo principal de Hackathon 2023 es fomentar el intercambio de conocimientos, experiencias y mejores prácticas para mejorar la seguridad en el transporte. El evento pretende generar conciencia sobre los desafíos y soluciones en esta área, así como impulsar la colaboración entre los diferentes actores involucrados.
                        </p>

                    <?php } ?> <!-- Fin de la validacion if y el else  -->

                </div> <!-- Fin del container__objetivo  -->



                <div class="container__cuando"> <!-- inicio del container__cuando  -->
                    <h2>Cuando es</h2>
                    <?php if (strlen($cuando) > 0) { ?> <!-- validamos que la longitud sea mayor a 0, si es mayor mostras el valor desde la base de datos  -->

                        <p> <!-- texto desde la basa de datos  -->
                            <?php echo $cuando ?> <!-- Mostrar aqui el valor que tiene la variable ($cuando) -->
                        </p>

                    <?php } else {  ?> <!-- En caso contrario se muestra el texto alternativo  -->

                        <p> <!-- texto alternativo  -->
                            El evento se llevará a cabo del 14 al 17 de julio de 2023.
                        </p>

                    <?php } ?> <!-- Fin de la validacion if y el else  -->

                    <div class="cont-img">
                        <img src="./recursos/cuando_es.jpg" alt="cuando_es">
                    </div>
                </div> <!-- Fin del container__cuando  -->



                <div class="container__premios"> <!-- inicio del container__premios  -->
                    <h2>Premios</h2>
                    <?php if (strlen($premios) > 0) { ?> <!-- validamos que la longitud sea mayor a 0, si es mayor mostras el valor desde la base de datos  -->

                        <p> <!-- texto desde la basa de datos  -->
                            <?php echo $premios ?> <!-- Mostrar aqui el valor que tiene la variable ($premios) -->
                        </p>

                    <?php } else {  ?> <!-- En caso contrario se muestra el texto alternativo  -->

                        <p> <!-- texto alternativo  -->
                            Premio a la Innovación en Seguridad en el Transporte: Reconocimiento a una empresa o individuo destacado por su contribución innovadora a la seguridad en el transporte. <br> <br>
                            Premio a la Mejor Campaña de Concientización: Reconocimiento a la mejor campaña de comunicación y concientización sobre seguridad en el transporte.
                        </p>

                    <?php } ?> <!-- Fin de la validacion if y el else  -->

                </div> <!-- Fin del container__premios  -->



                <div class="container__donde"> <!-- inicio del container__donde  -->
                    <h2>Donde es</h2>
                    <?php if (strlen($donde) > 0) { ?> <!-- validamos que la longitud sea mayor a 0, si es mayor mostras el valor desde la base de datos  -->

                        <p> <!-- texto desde la basa de datos  -->
                            <?php echo $donde ?> <!-- Mostrar aqui el valor que tiene la variable ($donde) -->
                        </p>

                    <?php } else {  ?> <!-- En caso contrario se muestra el texto alternativo  -->

                        <p> <!-- texto alternativo  -->
                            El evento se realizará en el Centro de Convenciones de la Ciudad, ubicado en MZ A Cl 27.
                        </p>

                    <?php } ?> <!-- Fin de la validacion if y el else  -->
                    <p>

                    </p>
                    <div class="cont-img">
                        <img src="./recursos/donde_es.jpg" alt="donde_es">
                    </div>
                </div> <!-- Fin del container__donde  -->



                <div class="container__patrocinadores"> <!-- inicio del container__patrocinadores  -->
                    <h2>Patrocinadores</h2>
                    <div class="container__patrocinadores__img">
                        <img src="./recursos/patrocinador.png" alt="patrocinadores">
                    </div>
                </div><!-- Fin del container__patrocinadores  -->



                <div class="container__form"> <!-- inicio del container__form  -->
                    <h2>Formulario de inscripcion</h2>
                    <form novalidate >
                    <div class="erroresAlertas"></div>

                        <input type="text" name="nombre" placeholder="Nombre completo"><br>
                        <input type="number" name="telefono" placeholder="telefono de contacto"> <br>
                        <input type="email" name="email" placeholder="Correo electronico"> <br>
                        <button type="submit">Enviar</button>
                    </form>
                </div> <!-- Fin del container__form  -->

            </div> <!-- Fin del container  -->

        </div> <!-- Fin del landing  -->

        <div class="page__waves_bootom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#C8DB46" fill-opacity="1" d="M0,288L80,282.7C160,277,320,267,480,266.7C640,267,800,277,960,240C1120,203,1280,117,1360,74.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </div>

    </div> <!-- inicio del page  -->

    <script src="./js/participantes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>