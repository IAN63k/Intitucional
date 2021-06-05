<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleSession.css">
    <title>Mis notas</title>
    <?php
    include_once('../process.php');
    session_start();
    if (!isset($_SESSION['rol'])) {
        header('location: ../index.php');
    } else {
        if ($_SESSION['rol'] != 2) {
            header('location: ../index.php');
        }else if (isset($_POST["submit"])) {
            # Tabla de inicio
            $_SESSION["asig"] = $_POST["select_asig"];
            header("location: ./note.php");
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
                        <li class="item"><a href="./teacherSession.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-inbox" viewBox="0 0 24 24">
                                    <path d="M22 12h-6l-2 3h-4l-2-3H2" />
                                    <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                                </svg>
                                <span>Dashboard</span></a>
                        </li>
                        <li class="item"> <a href="./courses.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                <span>Asignaturas</span></a>
                        </li>
                        <li class="item"><a href="./coursesDetails.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                <span>Estudiantes</span></a>
                        </li>
                        <li class="item"><a href="./groups.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-calendar" viewBox="0 0 24 24">
                                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                    <path d="M16 2v4M8 2v4m-5 4h18" />
                                </svg>
                                <span>Grupos</span></a>
                        </li>
                        <li class="item"><a href="./score.php">
                                <svg id="me" enable-background="new 0 0 512 512" height="24" viewBox="0 0 512 512" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="m175.5 145h-80c-8.284 0-15 6.716-15 15s6.716 15 15 15h80c8.284 0 15-6.716 15-15s-6.716-15-15-15z" />
                                        <path d="m175.5 225h-80c-8.284 0-15 6.716-15 15s6.716 15 15 15h80c8.284 0 15-6.716 15-15s-6.716-15-15-15z" />
                                        <path d="m175.5 305h-80c-8.284 0-15 6.716-15 15s6.716 15 15 15h80c8.284 0 15-6.716 15-15s-6.716-15-15-15z" />
                                        <path d="m390.5 274.928v-136.948c0-19.77-7.623-38.421-21.465-52.527l-60.862-62.939c-.029-.03-.059-.061-.088-.091-14.013-14.25-33.512-22.423-53.495-22.423h-193.09c-24.813 0-45 20.187-45 45v389c0 24.813 20.187 45 45 45h231.833c21.376 20.433 50.331 33 82.167 33 66.168 0 120-53.383 120-119 0-60.58-45.885-110.729-105-118.072zm-344 159.072v-389c0-8.271 6.729-15 15-15h193.09c11.974 0 23.658 4.891 32.066 13.418l60.851 62.929c.029.03.058.06.086.089 8.323 8.467 12.907 19.669 12.907 31.545v136.962c-58.562 7.398-104 57.521-104 118.058 0 20.233 5.082 39.3 14.027 56h-209.027c-8.271-.001-15-6.73-15-15.001zm329 48c-49.075 0-89-39.925-89-89s39.925-89 89-89c49.626 0 90 39.925 90 89s-40.374 89-90 89z" />
                                        <path d="m410.103 357.477c-6.363-5.301-15.822-4.442-21.126 1.921l-25.317 30.381-5.743-11.486c-3.705-7.41-12.715-10.415-20.125-6.708-7.41 3.704-10.413 12.715-6.708 20.124l16 32c2.264 4.528 6.659 7.608 11.687 8.192.579.066 1.156.1 1.731.1 4.421 0 8.654-1.956 11.522-5.397l40-48c5.303-6.366 4.443-15.824-1.921-21.127z" />
                                        <path d="m255.5 175h16c8.284 0 15-6.716 15-15s-6.716-15-15-15h-16c-8.284 0-15 6.716-15 15s6.716 15 15 15z" />
                                        <path d="m286.5 240c0-8.284-6.716-15-15-15h-16c-8.284 0-15 6.716-15 15s6.716 15 15 15h16c8.284 0 15-6.716 15-15z" />
                                    </g>
                                </svg>
                                <span>Notas</span></a>
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
                    <div class="task-box green">
                        <a href="#">
                            <div class="task-name">Estudiantes</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <span>
                                <?php
                                echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * from notas,asignatura WHERE notas.id_asig=asignatura.id_asignatura AND asignatura.id_docente = '" . $_SESSION["id"] . "' "));
                                ?>
                            </span>
                        </a>
                    </div>
                    <div class="task-box red">
                        <a href="./courses.php">
                            <div class="task-name">Asignaturas</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <span>
                                <?php
                                echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * from asignatura WHERE id_docente  = '" . $_SESSION["id"] . "' "));

                                ?>
                            </span>
                        </a>
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
                            echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * from grupos,asignatura WHERE grupos.id_gp=asignatura.id_grupo AND asignatura.id_docente= '" . $_SESSION["id"] . "'"));
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="top-navigation">
                <div class="navegation">
                    <a href="./courses.php">
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
                        <img src="<?php  $result = mysqli_query($mysqli, "SELECT * from docentes WHERE id = '" . $_SESSION["id"] . "' "); while ($datos = mysqli_fetch_assoc($result)) {
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
                    <a href="./score.php">
                        <svg clas='icon_refresh' id="arrow" version="1.1" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                            <g>
                                <path d="M480.6,235.6c-11.3,0-20.4,9.1-20.4,20.4c0,112.6-91.6,204.2-204.2,204.2c-112.6,0-204.2-91.6-204.2-204.2   S143.4,51.8,256,51.8c61.5,0,118.5,27.1,157.1,73.7h-70.5c-11.3,0-20.4,9.1-20.4,20.4s9.1,20.4,20.4,20.4h114.6   c11.3,0,20.4-9.1,20.4-20.4V31.4c0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4v59C390.7,40.1,325.8,11,256,11   C120.9,11,11,120.9,11,256c0,135.1,109.9,245,245,245s245-109.9,245-245C501,244.7,491.9,235.6,480.6,235.6z" />
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="header-menu">
                    <a class="menu-link" href="./teachers.php">calificaciones</a>
                    <a class="menu-link" href="./coursesDetails.php">Estudiantes</a>
                    <a class="menu-link" href="./courses.php">Asignaturas</a>
                </div>
            </div>
            <br><br>
            <div class="house courses">
                <svg id="Capa_1" enable-background="new 0 0 509.802 509.802" height="102" viewBox="0 0 509.802 509.802" width="102" xmlns="http://www.w3.org/2000/svg">
                    <path d="m300.294 380.531-18.23-59.93 3.72-.36c8.25-.79 14.29-8.12 13.5-16.36-.8-8.25-8.13-14.29-16.37-13.5l-9.75.94-16.55-54.41-18.82-61.88c-4.36-14.36-24.97-14.07-28.85.51l-33.27 125.18-26.92 2.59c-8.25.8-14.29 8.13-13.49 16.37.75 7.76 7.27 13.57 14.91 13.57.48 0 .97-.03 1.46-.07l15.81-1.53-13.03 49.02c-2.13 8 2.64 16.22 10.64 18.35 8.01 2.13 16.23-2.64 18.35-10.64l15.9-59.8 52.3-5.04 5.01 16.47 14.98 49.25c2.402 7.93 10.789 12.393 18.71 9.99 7.93-2.41 12.4-10.79 9.99-18.72zm-92.77-82.88 16.89-63.52 18.29 60.13z" fill="#ff7c48" />
                    <path d="m333.868 211.131c8.284 0 15-6.716 15-15v-32.22l16.619.962c.295.017.588.025.88.025 7.887 0 14.5-6.159 14.961-14.134.479-8.271-5.838-15.363-14.108-15.842l-18.353-1.062v-18.46c0-8.284-6.716-15-15-15s-15 6.716-15 15v16.724l-16.619-.962c-8.268-.48-15.363 5.838-15.842 14.108s5.838 15.363 14.108 15.842l18.353 1.062v33.957c.001 8.284 6.717 15 15.001 15z" fill="#ff415b" />
                    <path d="m256.614 509.771c-183.402-2.517-252.445-147.915-231.36-277.46 17.88-109.79 97.97-199.44 231.36-224.98 38.87-7.45 82.26-9.46 129.95-4.93 8.25.79 14.3 8.11 13.52 16.35-.78 8.25-8.1 14.29-16.35 13.52-48.17-4.57-90.39-2.19-127.12 5.48-127.03 26.51-188.21 116.18-201.75 199.38-16.684 102.52 29.874 239.811 201.75 242.72 217.434 3.694 250.762-271.156 140.23-388.65-5.67-6.03-5.39-15.52.65-21.2 6.03-5.68 15.53-5.39 21.2.65 126.803 134.796 84.329 442.696-162.08 439.12z" fill="#ff7c48" />
                    <g fill="#ff415b">
                        <path d="m271.594 389.261-14.98-49.25v-103.1l16.55 54.41 9.75-.94c8.24-.79 15.57 5.25 16.37 13.5.79 8.24-5.25 15.57-13.5 16.36l-3.72.36 18.23 59.93c2.41 7.93-2.06 16.31-9.99 18.72-7.933 2.407-16.311-2.07-18.71-9.99z" />
                        <path d="m256.614 37.751v-30.42c38.87-7.45 82.26-9.46 129.95-4.93 8.25.79 14.3 8.11 13.52 16.35-.78 8.25-8.1 14.29-16.35 13.52-48.17-4.57-90.39-2.19-127.12 5.48z" />
                        <path d="m256.614 509.771v-29.92c217.434 3.694 250.762-271.156 140.23-388.65-5.67-6.03-5.39-15.52.65-21.2 6.03-5.68 15.53-5.39 21.2.65 126.803 134.796 84.329 442.696-162.08 439.12z" />
                    </g>
                </svg>
                <form action="./score.php" method="POST">
                    <select name="select_asig">
                        <?php
                        $result = mysqli_query($mysqli, "SELECT * from asignatura WHERE id_docente='" . $_SESSION["id"] . "'");
                        while ($datos = mysqli_fetch_assoc($result)) {
                            echo "<option class='modal-input' value='" . $datos["id_asignatura"] . "'>" . $datos["asig_nombre"] . "</option>";
                        }
                        ?>
                    </select>
                    <button type="submit" name="submit">Mostrar</button>
                    <?php
                    
                    ?>
                </form>
            </div>
            <div class="second-content"><br>
                
            </div>

        </div>
        </div>
    </main>
</body>

</html>

<!-- partial -->
<script src="../script.js"></script>