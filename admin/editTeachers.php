<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleSession.css">
    <title>Profesores</title>
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
        <div class="container">
            <div class="nav-container">
                <div class="circle"></div>
                <div class="nav">
                    <ul class="action-list">
                        <li class="item"><a href="./adminSession.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-inbox" viewBox="0 0 24 24">
                                    <path d="M22 12h-6l-2 3h-4l-2-3H2" />
                                    <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                                </svg>
                                <span>Dashboard</span></a>
                        </li>
                        <li class="item"> <a href="./teachers.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                <span>Profesores</span></a>
                        </li>
                        <li class="item"> <a href="./students.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                <span>Estudiantes</span></a>
                        </li>
                        <li class="item"><a href="./courseDetails.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                <span>Asignaturas</span></a>
                        </li>
                        <li class="item"><a href="./groups.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-calendar" viewBox="0 0 24 24">
                                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                    <path d="M16 2v4M8 2v4m-5 4h18" />
                                </svg>
                                <span>Grupos</span></a>
                        </li>
                        <li class="item"><a href="../chat/index.php">
                                <svg viewBox="0 0 512 512" fill="currentColor">
                                    <path d="M352 0H64C28.704 0 0 28.704 0 64v320a16.02 16.02 0 009.216 14.496A16.232 16.232 0 0016 400c3.68 0 7.328-1.248 10.24-3.712L117.792 320H352c35.296 0 64-28.704 64-64V64c0-35.296-28.704-64-64-64z" />
                                    <path d="M464 128h-16v128c0 52.928-43.072 96-96 96H129.376L128 353.152V400c0 26.464 21.536 48 48 48h234.368l75.616 60.512A16.158 16.158 0 00496 512c2.336 0 4.704-.544 6.944-1.6A15.968 15.968 0 00512 496V176c0-26.464-21.536-48-48-48z" />
                                </svg>
                                <span>Chat</span></a>
                        </li>
                        <li class="item logOut"><a href="../logOut.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-log-out" viewBox="0 0 24 24">
                                    <defs />
                                    <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9" />
                                </svg>
                                <span>Cerrar sesión</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-right-container">
                <dvi class="right-content">
                    <p>Registro</p>
                </dvi>
                <div class="nav-right">
                    <div class="task-box yellow">
                        <a href="./teachers.php">
                            <div class="task-name">Profesores</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <span>
                                <?php
                                echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * from docentes"));
                                ?>
                            </span>
                        </a>
                    </div>
                    <div class="task-box green">
                        <a href="./students.php">
                            <div class="task-name">Estudiantes</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <span>
                                <?php
                                echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * from estudiantes"));
                                ?>
                            </span>
                        </a>
                    </div>
                    <div class="task-box red">
                        <div class="task-name">Materias</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        <span>
                            <?php
                            echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * from asignatura"));
                            ?>
                        </span>
                    </div>
                    <div class="task-box yellow">
                        <div class="task-name">Grupos</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        <span>
                            <?php
                            echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * from grupos"));
                            ?>
                        </span>
                    </div>
                    <div class="task-box orange">
                        <div class="task-name">Admin's</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        <span>
                            <?php
                            echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * from admin"));
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="top-navigation">
                <div class="navegation">
                    <a href="./teachers.php">
                        <svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 512.008 512.008" style="enable-background:new 0 0 512.008 512.008;" xml:space="preserve">
                            <path d="M501.342,245.185H36.424L210.227,71.404c4.093-4.237,3.975-10.99-0.262-15.083
	                        c-4.134-3.992-10.687-3.992-14.82,0l-192,192c-4.171,4.16-4.179,10.914-0.019,15.085c0.006,0.006,0.013,0.013,0.019,0.019l192,192
	                        c4.093,4.237,10.845,4.354,15.083,0.262c4.237-4.093,4.354-10.845,0.262-15.083c-0.086-0.089-0.173-0.176-0.262-0.262
	                        L36.424,266.519h464.917c5.891,0,10.667-4.776,10.667-10.667S507.233,245.185,501.342,245.185z" />
                        </svg>
                    </a>
                </div>
                <div class="opt">
                <div id="user_profile">
                        <span>
                            <?php echo " " . $_SESSION['nombre'] . " "; ?>
                        </span>
                        <div class="on"></div>
                        <div class="profile_border">
                            <img src="<?php $result = mysqli_query($mysqli, "SELECT * from admin WHERE id = '" . $_SESSION["id"] . "' ");
                                        while ($datos = mysqli_fetch_assoc($result)) {
                                            echo "" . $datos["profile"] . "";
                                        } ?>" alt="">
                        </div>
                    </div>
                    <div id="triangle"></div>
                    <div id="options">
                        <a href="./settings.php">Configuraciones</a><br>
                        <a href="../logOut.php">Cerrar seccion</a>
                    </div>
                </div>
            </div>
            <div class="principal-content">
                <p>Docentes: <a href="./addcourse.php"><button type="submit" name="coursehbtn" class="coursehbtn">Añadir materia</button></a>
                <div class="refresh">
                    <a href="./editTeachers.php">
                        <svg clas='icon_refresh' id="arrow" version="1.1" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                            <g>
                                <path d="M480.6,235.6c-11.3,0-20.4,9.1-20.4,20.4c0,112.6-91.6,204.2-204.2,204.2c-112.6,0-204.2-91.6-204.2-204.2   S143.4,51.8,256,51.8c61.5,0,118.5,27.1,157.1,73.7h-70.5c-11.3,0-20.4,9.1-20.4,20.4s9.1,20.4,20.4,20.4h114.6   c11.3,0,20.4-9.1,20.4-20.4V31.4c0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4v59C390.7,40.1,325.8,11,256,11   C120.9,11,11,120.9,11,256c0,135.1,109.9,245,245,245s245-109.9,245-245C501,244.7,491.9,235.6,480.6,235.6z" />
                            </g>
                        </svg>
                    </a>
                </div>
                <br>
                <br>
                <form action="#" method="POST">
                    <input type="text" class="input" placeholder="Buscar docentes por cedula: " name="search">
                    <button type="submit" name="searchbtn" class="searchbtn">Buscar</button>
                    <div class="div-add"><button class="btn-add" name="btn-add"><img src="../img/add-user.svg" alt="Añadir docente">
                            <figcaption>Añadir Docente</figcaption>
                        </button>
                    </div>
                </form>

            </div>
            <br>
            <br>

            <?php
            if (empty($_POST) || $_POST["searchbtn"] == '') {
                # code...
                echo "
            <div class='second-content'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th>Eliminar</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>";

                $result = mysqli_query($mysqli, "SELECT * from docentes");
                while ($datos = mysqli_fetch_assoc($result)) {
                    echo "
                            <tr>
                                    <td>" . $datos['nombre'] . "</td>
                                    <td>" . $datos['id'] . "</td>
                                    <td>" . $datos['email'] . "</td>
                                    <td>" . $datos['contraseña'] . "</td>
                                <form action='#' method='POST'>
                                    <input type='hidden' name='tb-nombre' value='" . $datos['nombre'] . "'>
                                    <input type='hidden' name='tb-id' value='" . $datos['id'] . "'>
                                    <input type='hidden' name='tb-email' value='" . $datos['email'] . "'>
                                    <input type='hidden' name='tb-contraseña' value='" . $datos['contraseña'] . "'>

                                    <td> <button type='submit' name='btn-delete' class='btn'><svg height='40px' viewBox='0 0 512 512' width='50px' xmlns='http://www.w3.org/2000/svg'><path d='m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0' fill='#f44336'/><path d='m350.273438 320.105469c8.339843 8.34375 8.339843 21.824219 0 30.167969-4.160157 4.160156-9.621094 6.25-15.085938 6.25-5.460938 0-10.921875-2.089844-15.082031-6.25l-64.105469-64.109376-64.105469 64.109376c-4.160156 4.160156-9.621093 6.25-15.082031 6.25-5.464844 0-10.925781-2.089844-15.085938-6.25-8.339843-8.34375-8.339843-21.824219 0-30.167969l64.109376-64.105469-64.109376-64.105469c-8.339843-8.34375-8.339843-21.824219 0-30.167969 8.34375-8.339843 21.824219-8.339843 30.167969 0l64.105469 64.109376 64.105469-64.109376c8.34375-8.339843 21.824219-8.339843 30.167969 0 8.339843 8.34375 8.339843 21.824219 0 30.167969l-64.109376 64.105469zm0 0' fill='#fafafa'/></svg></button></td>
                                    
                                    <td><button type='submit' name='btn-edit' class='btn'><svg height='40px' viewBox='0 -1 401.5411 401' width='50px' xmlns='http://www.w3.org/2000/svg'><path d='m381.289062 32.242188c13.671876 13.664062 13.671876 35.824218 0 49.488281l-17.679687 17.679687-61.230469-61.230468 17.679688-17.679688c13.671875-13.667969 35.832031-13.667969 49.5 0zm0 0' fill='#00acea'/><path d='m363.609375 99.410156-160.148437 160.160156h-.011719l-61.230469-61.230468 160.160156-160.160156zm0 0' fill='#00efd1'/><path d='m142.21875 198.339844 61.230469 61.230468-.570313.570313-84.6875 23.460937 23.457032-84.691406zm0 0' fill='#fedb41'/><g fill='#083863'><path d='m370.589844 250.960938c-5.523438 0-10 4.476562-10 10v88.789062c-.019532 16.5625-13.4375 29.980469-30 30h-280.589844c-16.5625-.019531-29.980469-13.4375-30-30v-260.589844c.019531-16.558594 13.4375-29.980468 30-30h88.789062c5.523438 0 10-4.476562 10-10 0-5.523437-4.476562-10-10-10h-88.789062c-27.601562.03125-49.96875 22.398438-50 50v260.589844c.03125 27.601562 22.398438 49.96875 50 50h280.589844c27.601562-.03125 49.96875-22.398438 50-50v-88.789062c0-5.523438-4.476563-10-10-10zm0 0'/><path d='m376.632812 13.429688c-17.589843-17.546876-46.058593-17.546876-63.644531 0l-178.410156 178.410156c-1.21875 1.222656-2.105469 2.738281-2.566406 4.398437l-23.457031 84.691407c-.964844 3.472656.015624 7.191406 2.5625 9.742187 2.550781 2.546875 6.269531 3.527344 9.742187 2.566406l84.691406-23.460937c1.664063-.460938 3.183594-1.347656 4.40625-2.570313l.566407-.570312 177.835937-177.835938c17.574219-17.570312 17.574219-46.058593 0-63.628906zm-229.675781 203.789062 37.613281 37.617188-52.03125 14.414062zm56.5 42.355469v-.007813l6.519531 6.519532zm0-14.140625-47.09375-47.09375 146.015625-146.015625 47.089844 47.085937zm170.761719-170.773438-10.609375 10.609375-47.085937-47.089843 10.609374-10.609376c9.765626-9.746093 25.582032-9.746093 35.351563 0l11.734375 11.746094c9.765625 9.757813 9.765625 25.585938 0 35.34375zm0 0'/></g></svg></button></td>
                                </form>
                            </tr>
                                
                        ";
                }

                echo "
                    </tbody>
                </table>
            </div>
            
            ";

                if (isset($_POST["btn-delete"])) {
                    $id = $_POST["tb-id"];
                    mysqli_query($mysqli, "DELETE FROM docentes where id='$id'");
                    echo "<script>alert('Docente con id: $id, eliminado.')</script>";
                }

                if (isset($_POST['btn-edit'])) {
                    echo "
                    <form action='#' method='POST'>
                        <link rel='stylesheet' href='./style.css'>
                        <div id='#open-modal' class='modal-window'>
                            <div>
                            <div class='modal-close'></div>
                                <table class='table'>
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Contraseña</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type='text' name='modal-nombre' class='modal-input' value='" . $_POST["tb-nombre"] . "'></td>
                                            <td><input type='number' name='modal-id' class='modal-input' value='" . $_POST["tb-id"] . "'></td>
                                            <td><input type='email' name='modal-email' class='modal-input' value='" . $_POST["tb-email"] . "'></td>
                                            <td><input type='text' name='modal-contraseña' class='modal-input' value='" . $_POST["tb-contraseña"] . "'></td>
                                                    <input type='hidden' name='modal-id-hidden' value=" . $_POST['tb-id'] . ">
                                    </tbody>
                                </table>
                                <div class='update-btn'>
                                    <button type='submit' name='update-btn' class='updatebtn'>Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    ";
                }

                if (isset($_POST["update-btn"])) {
                    #Si acciona actualizar desde el modal
                    $nombre = $_POST["modal-nombre"];
                    $id = $_POST["modal-id"];
                    $email = $_POST["modal-email"];
                    $password = $_POST["modal-contraseña"];
                    #almacena
                    if (!empty($nombre) && !empty($id) && !empty($email) && !empty($password)) {
                        #Si no estan vacios ejecuta el Update
                        $querry =  mysqli_query($mysqli, "UPDATE docentes SET nombre='$nombre', id='$id', email='$email', contraseña='$password' WHERE id=" . $_POST['modal-id-hidden'] . " ");
                        echo "<script>alert('Actualizado, refresque la pagina para ver los cambios.')</script>";
                    } else {
                        echo "<script>alert('Existe un campo vacio, por ende no se realizaran cambios')</script>";
                    }
                }

                if (isset($_POST["btn-add"])) {
                    #Si acciona adñadir docente 
                    echo "
                    <form action='#' method='POST'>
                        <link rel='stylesheet' href='./style.css'>
                        <div id='#open-modal' class='modal-window'>
                            <div>
                            <div class='modal-close'></div>
                                <table class='table'>
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Contraseña</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type='text' name='modal-nombre' class='modal-input' ></td>
                                            <td><input type='number' name='modal-id' class='modal-input' ></td>
                                            <td><input type='email' name='modal-email' class='modal-input' ></td>
                                            <td><input type='text' name='modal-contraseña' class='modal-input'  ></td>
                                    </tbody>
                                </table>
                                <div class='update-btn'>
                                    <button type='submit' name='update-btn-add' class='updatebtn'>Agregar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    ";
                }

                if (isset($_POST["update-btn-add"])) {
                    #Si acciona agregar desde el modal
                    $nombre = $_POST["modal-nombre"];
                    $id = $_POST["modal-id"];
                    $email = $_POST["modal-email"];
                    $password = $_POST["modal-contraseña"];
                    #almacena
                    if (!empty($nombre) || !empty($id) || !empty($email) || !empty($password)) {
                        #Si no estan vacios ejecuta el Update
                        $querry =  mysqli_query($mysqli, "INSERT INTO docentes (nombre, id, email, contraseña, profile, id_rol) VALUES ('$nombre', '$id', '$email', '$password', '', '2'); ");
                    } else {
                        echo "<script>alert('Existe un campo vacio, por ende no se realizaran cambios')</script>";
                    }
                }
            }

            ?>

            <?php
            if (isset($_POST['searchbtn'])) {
                if (empty($_POST["search"])) {
                    echo "<script>alert('No indico ninguna id')</script>";
                } else {
                    $search = $_POST["search"];

                    echo "<div class='second-content'>
            <table class='table'>
            <thead>
                <tr>
                <th>Nombre</th>
                <th>ID</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Eliminar</th>
                <th>Editar</th>
                </tr>
            </thead>
            <tbody>";
                    $result = mysqli_query($mysqli, "SELECT * from docentes WHERE id = $search");
                    while ($datos = mysqli_fetch_array($result)) {
                        echo "
                    <tr>
                        <td>" . $datos['nombre'] . "</td>
                        <td>" . $datos['id'] . "</td>
                        <td>" . $datos['email'] . "</td>
                    </tr>
                    ";
                    }
                    echo "</tbody>
            </table>
            </div>";
                }
            }


            ?>
        </div>
        </div>
        </div>
    </main>
</body>

</html>

<!-- partial -->
<script src="../script.js"></script>