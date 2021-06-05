<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleSession.css">
    <title>Grupos</title>
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
                    <a href="./adminSession.php">
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
                <div class="refresh">
                    <a href="./groups.php">
                        <svg clas='icon_refresh' id="arrow" version="1.1" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                            <g>
                                <path d="M480.6,235.6c-11.3,0-20.4,9.1-20.4,20.4c0,112.6-91.6,204.2-204.2,204.2c-112.6,0-204.2-91.6-204.2-204.2   S143.4,51.8,256,51.8c61.5,0,118.5,27.1,157.1,73.7h-70.5c-11.3,0-20.4,9.1-20.4,20.4s9.1,20.4,20.4,20.4h114.6   c11.3,0,20.4-9.1,20.4-20.4V31.4c0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4v59C390.7,40.1,325.8,11,256,11   C120.9,11,11,120.9,11,256c0,135.1,109.9,245,245,245s245-109.9,245-245C501,244.7,491.9,235.6,480.6,235.6z" />
                            </g>
                        </svg>
                    </a>
                </div>
                <p>Grupos: <button type="submit" name="optionshbtn" class="optionshbtn"><a href="./addGroup.php">Opciones</a></button>
                    <br>
                    <br>
                <form action="#" method="POST">
                    <input type="text" class="input" placeholder="Indique el nombre del grupo : " name="search">
                    <button type="submit" name="searchbtn" class="searchbtn">Buscar</button>
                </form>
            </div>
            <br>
            <br>

            <?php

            if (empty($_POST)) {
                # code...
                echo "
            <div class='second-content'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th>ID Grupo</th>
                            <th>Nombre</th>
                            <th>Asignaturas</th>
                        </tr>
                    </thead>
                    <tbody>";

                $result = mysqli_query($mysqli, "SELECT * from grupos  ORDER BY grupo ASC");
                while ($datos = mysqli_fetch_assoc($result)) {
                    #Muestra una tabla con los datos de la asignatura y sus respectivo grupo.
                    echo "
                            <tr>
                                    <td>" . $datos['id_gp'] . "</td>
                                    <td>" . $datos['grupo'] . "</td>
                                    <td>";
                    $result2 = mysqli_query($mysqli, "SELECT * from asignatura WHERE  id_grupo ='" . $datos["id_gp"] . "'  ORDER BY asig_nombre ASC ");
                    while ($datos2 = mysqli_fetch_assoc($result2)) {
                        echo "" . $datos2["asig_nombre"] . "<br>";
                    }
                    echo "</td>
                            </tr>
                        ";
                }

                echo "
                    </tbody>
                </table>
            </div>
            
            ";
            }


            if (isset($_POST['searchbtn'])) {
                if (empty($_POST["search"])) {
                    echo "<script>alert('No indico ningun nombre de un grupo')</script>";
                } else {
                    $search = $_POST["search"];

                    echo "
            <div class='second-content'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th>ID Grupo</th>
                            <th>Nombre</th>
                            <th>Asignaturas</th>
                        </tr>
                    </thead>
                    <tbody>";

                    $result = mysqli_query($mysqli, "SELECT * from grupos WHERE  grupo = '$search'");
                    while ($datos = mysqli_fetch_assoc($result)) {
                        #Muestra una tabla con los datos de la asignatur y sus respectivos botones para add y edit.
                        echo "
                            <tr>
                                    <td>" . $datos['id_gp'] . "</td>
                                    <td>" . $datos['grupo'] . "</td>
                                    <td>";
                        $result2 = mysqli_query($mysqli, "SELECT * from asignatura,grupos WHERE  asignatura.id_grupo = grupos.id_gp");
                        while ($datos2 = mysqli_fetch_assoc($result2)) {
                            echo "" . $datos2["asig_nombre"] . "<br>";
                        }
                        echo "</td>
                            </tr>
                        ";
                    }

                    echo "
                    </tbody>
                </table>
            </div>
            
            ";
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