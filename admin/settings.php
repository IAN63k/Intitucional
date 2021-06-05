<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleSession.css">
    <title>Configuracion de perfil</title>
    <?php
    include_once('../process.php');
    session_start();
    if (!isset($_SESSION['rol'])) {
        header('location: ../index.php');
    } else {
        if ($_SESSION['rol'] != 1) {
            header('location: ../index.php');
        }
    }

    ?>
</head>

<body>
    <main>
        <div class="dark-light">
            <figure>
                <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                </svg>
            </figure>
        </div>
        <div class="container_sett">
            <div class="navigation-sett">
                <a href="./adminSession.php">
                    <svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 512.008 512.008" style="enable-background:new 0 0 512.008 512.008;" xml:space="preserve">
                        <path d="M501.342,245.185H36.424L210.227,71.404c4.093-4.237,3.975-10.99-0.262-15.083
                        c-4.134-3.992-10.687-3.992-14.82,0l-192,192c-4.171,4.16-4.179,10.914-0.019,15.085c0.006,0.006,0.013,0.013,0.019,0.019l192,192
                        c4.093,4.237,10.845,4.354,15.083,0.262c4.237-4.093,4.354-10.845,0.262-15.083c-0.086-0.089-0.173-0.176-0.262-0.262
                        L36.424,266.519h464.917c5.891,0,10.667-4.776,10.667-10.667S507.233,245.185,501.342,245.185z" />
                    </svg>
                </a>
                    <a href="./settings.php">
                        <svg clas='icon_refresh' id="arrow" version="1.1" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                            <g>
                                <path d="M480.6,235.6c-11.3,0-20.4,9.1-20.4,20.4c0,112.6-91.6,204.2-204.2,204.2c-112.6,0-204.2-91.6-204.2-204.2   S143.4,51.8,256,51.8c61.5,0,118.5,27.1,157.1,73.7h-70.5c-11.3,0-20.4,9.1-20.4,20.4s9.1,20.4,20.4,20.4h114.6   c11.3,0,20.4-9.1,20.4-20.4V31.4c0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4v59C390.7,40.1,325.8,11,256,11   C120.9,11,11,120.9,11,256c0,135.1,109.9,245,245,245s245-109.9,245-245C501,244.7,491.9,235.6,480.6,235.6z" />
                            </g>
                        </svg>
                    </a>
                <form enctype="multipart/form-data" action="#" method="POST">
                    <div class="user_sett">
                        <h1>Usuarios:
                            <?php
                            //Imprimir: Tipo de usuario
                            $result = mysqli_query($mysqli, "SELECT * from docentes,estudiantes,admin WHERE docentes.id = '" . $_SESSION["id"] . "' OR estudiantes.id = '" . $_SESSION["id"] . "' OR admin.id = '" . $_SESSION["id"] . "'");

                            $usr = mysqli_query($mysqli, "SELECT * from usuarios WHERE id_rol = '" . $_SESSION["rol"] . "' ");
                            while ($datos = mysqli_fetch_assoc($usr)) {
                                echo "" . $datos["usuario"] . "";
                            } ?>
                        </h1>
                    </div>
                    <div class="profile_sett">
                        
                        <img src="<?php  $result = mysqli_query($mysqli, "SELECT * from admin WHERE id = '" . $_SESSION["id"] . "' "); while ($datos = mysqli_fetch_assoc($result)) {
                            echo "" . $datos["profile"] . "";
                        } ?>" alt="IMG profile">

                        <!-- Imprimir: Nombre del usuario -->
                        <input type="text" name="nombre" id="" value='<?php $result = mysqli_query($mysqli, "SELECT * from admin WHERE id = '" . $_SESSION["id"] . "'");
                        while ($datos = mysqli_fetch_assoc($result)) {
                            echo "" . $datos["nombre"] . "";
                        } ?>'>
                    </div>


                    <div class="camp_sett">
                        <!-- Imprimir: Cedula del usuario-->
                        <input type="text" name="id" id="" value='<?php $result = mysqli_query($mysqli, "SELECT * from admin WHERE id = '" . $_SESSION["id"] . "'");
                        while ($datos = mysqli_fetch_assoc($result)) {
                            echo "" . $datos["id"] . "";
                        } ?>'>

                        <!-- Imprimir: Email del usuario-->
                        <input type="email" name="email" value="
                        <?php $result = mysqli_query($mysqli, "SELECT * from admin WHERE id = '" . $_SESSION["id"] . "'");
                        while ($datos = mysqli_fetch_assoc($result)) {
                            echo "" . $datos["email"] . "";
                        } ?>">

                        <!-- Imprimir: Contraseña del usuario-->
                        <input type="password" name="contraseña" value="<?php $result = mysqli_query($mysqli, "SELECT * from admin WHERE id = '" . $_SESSION["id"] . "' ");
                                                                        while ($daos = mysqli_fetch_assoc($result)) {
                                                                            echo "" . $daos["contraseña"] . "";
                                                                        } ?>">
                    </div>
                    <div class="sp_sett">
                        <!-- Guerdar: IMG del usuario-->
                        <input name="imagen" id='img_sett' type="file">
                    </div>
                    <div class="save_sett">
                        <button name="submit">
                            <svg id="Capa_1" enable-background="new 0 0 512 512" height="60" viewBox="0 0 512 512" width="70" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="m495 144v338c0 16.54-13.46 30-30 30h-418c-16.54 0-30-13.46-30-30v-452c0-16.54 13.46-30 30-30h98c38.7 17.32 77.19 23.71 111 24.65 63.88 1.79 111-15.84 111-15.84l123.65 124.62c2.79 2.81 4.35 6.61 4.35 10.57z" fill="#4d5788" />
                                    <path d="m495 144v338c0 16.54-13.46 30-30 30h-209v-487.35c63.88 1.79 111-15.84 111-15.84l123.65 124.62c2.79 2.81 4.35 6.61 4.35 10.57z" fill="#313a6b" />
                                    <path d="m367 8.81v151.19c0 8.28-6.72 15-15 15h-192c-8.28 0-15-6.72-15-15v-160h207c4 0 7.83 1.6 10.65 4.43z" fill="#f3d652" />
                                    <path d="m367 8.81v151.19c0 8.28-6.72 15-15 15h-96v-175h96c4 0 7.83 1.6 10.65 4.43z" fill="#e9bc3e" />
                                    <path d="m303 0v96c0 8.28-6.72 15-15 15s-15-6.72-15-15v-96z" fill="#dc455b" />
                                    <path d="m431 256v176c0 8.28-6.72 15-15 15h-320c-8.28 0-15-6.72-15-15v-176c0-8.28 6.72-15 15-15h320c8.28 0 15 6.72 15 15z" fill="#dfe5f2" />
                                    <path d="m431 256v176c0 8.28-6.72 15-15 15h-160v-206h160c8.28 0 15 6.72 15 15z" fill="#c7cdde" />
                                    <path d="m208 335h-48c-8.284 0-15-6.716-15-15s6.716-15 15-15h48c8.284 0 15 6.716 15 15s-6.716 15-15 15z" fill="#313a6b" />
                                </g>
                            </svg>
                        </button>
                    </div>
            </div>
            </form>
            <?php
            if (isset($_POST["submit"])) {

                $nombre = $_POST["nombre"];
                $id = $_POST["id"];
                $SESSION["id"]=$id;
                $SESSION["nombre"]=$nombre;
                $email = $_POST["email"];
                $password = $_POST["contraseña"];

                $profile = "../img/perfil/" . $_FILES['imagen']['name'];
                move_uploaded_file($_FILES['imagen']['tmp_name'], $profile);

                $querry =  mysqli_query($mysqli, "UPDATE admin  SET nombre='" . $nombre . "', id='" . $id . "', email='" . $email . "', contraseña='" . $password . "', profile='" . $profile . "' WHERE id='" . $_SESSION["id"] . "' ");

                echo "<script>alert('Profavor refresque para ver los cambios')</script>";

            }
            ?>

        </div>
    </main>
</body>

</html>

<!-- partial -->
<script src="../script.js"></script>