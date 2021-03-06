<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleSession.css">
    <title>Mis Estudiantes</title>
    <?php
    include_once('../process.php');
    session_start();
    if (!isset($_SESSION['rol'])) {
        header('location: ../index.php');
    } else {
        if ($_SESSION['rol'] != 2) {
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
                                <span>Cerrar sesi??n</span></a>
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
                    <a href="./coursesDetails.php">
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
                <svg id="Capa_1" enable-background="new 0 0 512 512" height="105" viewBox="0 0 512 512" width="105" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="m472.656 210.507c.837 8.089 11.513 21.515 24.786 31.216 8.283 6.054 9.454 17.939 2.562 25.538-11.545 12.73-29.465 27.14-48.2 27.14h-48.906l1.517-83.895h68.241z" fill="#59636f" />
                        <path d="m194.361 322.581c15.184 0 25.707-15.161 20.392-29.385-13.334-35.69-50.282-61.35-93.776-61.35-43.493 0-80.442 25.66-93.775 61.35-5.314 14.224 5.208 29.385 20.392 29.385z" fill="#88d37f" />
                        <path d="m43.564 265.945c22.347 13.418 48.924 21.21 77.414 21.21s55.067-7.792 77.414-21.211c-18.158-20.784-46.087-34.098-77.414-34.098-31.328.001-59.256 13.315-77.414 34.099z" fill="#5ec682" />
                        <ellipse cx="120.978" cy="153.243" fill="#ffd3bd" rx="113.478" ry="103.912" />
                        <path d="m19.433 106.824c22.016 6.992 51.475-3.462 67.111-11.13 5.865-2.876 12.771-2.422 18.261 1.116 28.508 18.367 74.205 22.272 113.878 3.57-19.758-30.556-56.116-51.048-97.707-51.048-44.449-.001-82.924 23.407-101.543 57.492z" fill="#e7889d" />
                        <path d="m317.639 322.581c-15.184 0-25.707-15.161-20.392-29.385 13.334-35.69 50.282-61.35 93.776-61.35 43.493 0 80.442 25.66 93.776 61.35 5.314 14.224-5.208 29.385-20.392 29.385z" fill="#a2ddfd" />
                        <path d="m391.022 287.155c28.49 0 55.066-7.792 77.414-21.21-18.158-20.784-46.087-34.098-77.414-34.098s-59.256 13.314-77.414 34.098c22.348 13.418 48.924 21.21 77.414 21.21z" fill="#7acefa" />
                        <ellipse cx="391.022" cy="153.243" fill="#f2d1a5" rx="113.478" ry="103.912" />
                        <path d="m214.278 346.589c0-23.326-19.698-42.052-43.367-40.449-20.28 1.373-36.605 17.983-37.666 38.281-.377 7.218 1.142 14.045 4.096 20.04 1.21 2.455.685 5.38-1.121 7.437-6.821 7.765-10.722 18.157-9.983 29.464 1.311 20.048 17.501 36.319 37.543 37.719 23.71 1.656 43.458-17.087 43.458-40.443 0-8.062-2.363-15.568-6.42-21.882 8.261-7.424 13.46-18.187 13.46-30.167z" fill="#59636f" />
                        <path d="m297.722 346.589c0-23.326 19.698-42.052 43.368-40.449 20.28 1.373 36.605 17.983 37.666 38.281.377 7.218-1.142 14.045-4.096 20.04-1.21 2.455-.686 5.38 1.121 7.437 6.821 7.765 10.722 18.157 9.983 29.464-1.311 20.048-17.501 36.319-37.543 37.719-23.71 1.656-43.458-17.087-43.458-40.443 0-8.062 2.363-15.568 6.42-21.882-8.262-7.424-13.461-18.187-13.461-30.167z" fill="#59636f" />
                        <path d="m182.617 462.669c-15.185 0-25.707-15.161-20.392-29.385 13.334-35.689 50.282-61.35 93.776-61.35s80.442 25.66 93.776 61.35c5.314 14.224-5.208 29.385-20.392 29.385z" fill="#b0ade2" />
                        <path d="m256 427.242c28.49 0 55.066-7.792 77.414-21.21-18.158-20.784-46.086-34.098-77.414-34.098s-59.256 13.314-77.414 34.098c22.348 13.418 48.924 21.21 77.414 21.21z" fill="#a09cdc" />
                        <ellipse cx="256" cy="293.331" fill="#cb9d82" rx="113.478" ry="103.912" />
                        <path d="m366.843 271.004c-11.157-46.658-56.542-81.586-110.843-81.586s-99.686 34.928-110.843 81.586c16.555 5.784 41.208-5.739 49.619-19.496 1.614-2.641 4.662-4.101 7.682-3.423 18.328 4.119 35.67-1.578 50.117-11.645 2.066-1.439 4.785-1.439 6.851 0 14.447 10.067 31.789 15.764 50.117 11.645 3.02-.678 6.067.782 7.682 3.423 8.41 13.757 33.063 25.28 49.618 19.496z" fill="#59636f" />
                        <path d="m391.022 49.331c-49.807 0-92.115 29.384-107.388 70.252 20.314-3.501 40.605-10.487 52.389-18.423 2.459-1.656 5.764.078 5.764 3.043v4.272c0 7.404 6.002 13.406 13.406 13.406h71.657c7.404 0 13.406-6.002 13.406-13.406v-4.272c0-2.965 3.305-4.699 5.764-3.043 11.784 7.936 32.075 14.922 52.389 18.423-15.272-40.868-57.58-70.252-107.387-70.252z" fill="#59636f" />
                        <path d="m391.022 180.957c8.478 0 16.539-3.671 22.118-10.072 2.721-3.122 2.397-7.86-.727-10.582-3.122-2.722-7.86-2.396-10.582.727-2.729 3.132-6.669 4.928-10.81 4.928s-8.081-1.796-10.812-4.929c-2.722-3.122-7.46-3.447-10.582-.725s-3.446 7.46-.725 10.582c5.582 6.4 13.644 10.071 22.12 10.071zm-62.449-7.143c4.143 0 7.5-3.357 7.5-7.5v-12c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v12c0 4.142 3.358 7.5 7.5 7.5zm124.898 0c4.143 0 7.5-3.357 7.5-7.5v-12c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v12c0 4.142 3.357 7.5 7.5 7.5zm-176.08 126.576c-3.123-2.722-7.86-2.396-10.581.728-2.729 3.132-6.669 4.928-10.81 4.928s-8.08-1.796-10.81-4.928c-2.721-3.124-7.459-3.448-10.581-.728-3.123 2.721-3.449 7.459-.728 10.581 5.578 6.402 13.641 10.074 22.118 10.074 8.478 0 16.54-3.672 22.118-10.074 2.723-3.122 2.397-7.861-.726-10.581zm-93.965-126.576c4.143 0 7.5-3.357 7.5-7.5v-12c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v12c0 4.142 3.357 7.5 7.5 7.5zm318.442 61.854c-5.727-4.186-11.124-9.298-15.186-14.304 15.862-18.848 25.318-42.485 25.318-68.121 0-62.554-55.601-111.412-120.978-111.412-65.653 0-120.978 49.146-120.978 111.412 0 10.235 1.485 20.269 4.427 29.973-6.024-.854-12.193-1.297-18.472-1.297s-12.448.444-18.472 1.297c2.942-9.704 4.427-19.738 4.427-29.973 0-62.814-55.869-111.412-120.978-111.412-64.955 0-120.976 48.546-120.976 111.412 0 38.696 21.537 72.842 54.148 92.822-15.574 11.572-27.439 27.021-33.971 44.507-4.649 12.445-.307 26.502 10.561 34.184 1.314.93 2.826 1.377 4.322 1.377 2.354 0 4.67-1.104 6.131-3.172 2.392-3.382 1.588-8.063-1.795-10.453-5.311-3.754-7.436-10.615-5.168-16.686 6.34-16.969 18.691-31.725 34.983-41.896 22.178 9.71 46.585 12.769 70.269 9.414-5.061 16.653-5.868 34.446-2.136 51.742h-66.826c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h58.114c-4.591 12.454-3.652 25.885 1.713 37.142-22.868 26.426-10.661 68.035 23.284 77.645.617 4.506 2.275 8.872 4.943 12.717 5.467 7.88 14.456 12.584 24.045 12.584h117.648c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-117.649c-4.743 0-9.016-2.236-11.722-6.136-2.705-3.897-3.304-8.682-1.645-13.124 6.339-16.969 18.692-31.725 34.984-41.896 15.703 6.875 33.254 10.729 51.766 10.729s36.064-3.854 51.766-10.729c16.292 10.171 28.645 24.927 34.984 41.896 1.375 3.682 1.2 7.643-.494 11.152-1.702 3.527-4.773 6.229-8.425 7.415-3.939 1.279-6.097 5.51-4.818 9.449 1.029 3.171 3.97 5.186 7.132 5.186.768 0 1.548-.118 2.317-.368 7.524-2.442 13.831-7.969 17.303-15.162 1.352-2.801 2.229-5.738 2.641-8.724 19.245-5.464 33.511-22.655 34.843-43.008.833-12.741-3.282-25.023-11.593-34.627 5.35-11.227 6.315-24.657 1.713-37.142h81.037c9.589 0 18.578-4.704 24.046-12.584 5.468-7.879 6.728-17.944 3.372-26.926-.501-1.341-1.033-2.669-1.596-3.985 5.276-4.095 10.496-8.953 15.332-14.287 9.879-10.891 8.179-27.954-3.691-36.631zm-110.846-178.837c40.951 0 76.548 21.242 94.187 52.248-14.167-3.655-27.068-8.798-34.999-14.139-3.448-2.322-7.868-2.556-11.53-.604-3.653 1.944-5.923 5.726-5.923 9.868v4.272c0 3.257-2.649 5.906-5.906 5.906h-71.656c-3.257 0-5.906-2.649-5.906-5.906v-4.272c0-4.143-2.27-7.923-5.922-9.867-3.665-1.951-8.083-1.719-11.532.604-7.931 5.341-20.831 10.484-34.998 14.139 17.637-31.007 53.234-52.249 94.185-52.249zm-101.713 69.327c17.083-3.351 33.484-8.922 45.116-15.28 1.195 10.4 10.054 18.505 20.77 18.505h71.656c10.716 0 19.574-8.104 20.77-18.505 11.633 6.358 28.034 11.929 45.116 15.28 2.771 8.597 4.264 17.685 4.264 27.086 0 62.325-64.312 108.406-131.022 93.696-14.267-28.57-41.28-50.668-74.294-60.072-4.401-10.741-6.638-22.034-6.638-33.624-.002-9.402 1.491-18.49 4.262-27.086zm-33.309 70.761c47.588 0 87.947 28.683 101.293 68.043-11.559-.041-27.205-6.791-33.67-17.367-3.332-5.446-9.652-8.192-15.725-6.827-18.211 4.094-34.08-3.44-44.185-10.481-4.613-3.213-10.811-3.214-15.427.001-10.104 7.04-25.966 14.575-44.187 10.48-6.071-1.357-12.39 1.382-15.724 6.829-6.465 10.577-22.11 17.328-33.67 17.367 13.347-39.361 53.707-68.045 101.295-68.045zm-135.022-140.088c35.451 0 66.888 15.92 86.137 40.311-15.569 5.934-32.398 8.651-49.206 7.862-18.455-.865-35.871-6.014-49.042-14.499-7.671-4.942-17.49-5.533-25.624-1.545-14.959 7.335-35.081 13.707-51.638 12.522 18.839-26.827 51.86-44.651 89.373-44.651zm-105.978 96.412c0-13.376 3.012-26.123 8.448-37.713 26.454 4.981 57.092-8.538 66.4-13.102 3.495-1.712 7.569-1.456 10.896.687 17.562 11.314 39.68 17.035 62.535 17.034 17.597 0 35.628-3.401 52.348-10.243 7.242 13.036 11.328 27.76 11.328 43.337 0 11.59-2.237 22.883-6.638 33.624-33.014 9.404-60.027 31.502-74.294 60.072-66.826 14.735-131.023-31.486-131.023-93.696zm140.566 276.5c-21.982-7.883-29.055-35.43-13.712-52.896 3.872-4.409 4.741-10.572 2.214-15.702-2.477-5.026-3.629-10.675-3.333-16.333.2-3.822 1.077-7.537 2.553-11.01 9.127 21.484 25.299 39.738 45.883 52.349-15.301 11.369-27.004 26.485-33.605 43.592zm100.434-40.001c-64.352 0-113.895-51.928-104.936-109.898 19.054 1.702 41.454-10.394 50.086-24.366 18.231 3.996 37.169-.25 54.85-12.29 17.686 12.04 36.626 16.289 54.859 12.287 8.025 13.066 28.208 24.54 46.413 24.54 1.232 0 2.454-.059 3.664-.168.681 4.408 1.042 8.908 1.042 13.484 0 53.161-47.542 96.411-105.978 96.411zm100.434 40.001c-6.601-17.107-18.305-32.223-33.605-43.591 20.585-12.611 36.756-30.866 45.883-52.349 3.841 9.043 3.29 19.081-.78 27.343-2.527 5.13-1.658 11.293 2.214 15.701 15.353 17.479 8.257 45.018-13.712 52.896zm119.694-120.798c-2.706 3.899-6.978 6.136-11.723 6.136h-89.749c1.518-7.037 2.321-14.308 2.321-21.75 0-10.391-1.578-20.514-4.458-29.992 23.688 3.355 48.094.295 70.269-9.414 16.292 10.171 28.643 24.927 34.983 41.896 1.661 4.443 1.062 9.226-1.643 13.124zm18.32-46.722c-3.627 4-7.475 7.671-11.365 10.869-6.545-10.312-15.094-19.495-25.231-27.027 6.608-4.049 12.763-8.676 18.375-13.809 4.695 5.528 10.524 10.942 16.789 15.522 4.683 3.423 5.349 10.125 1.432 14.445zm-176 24.678c-4.143 0-7.5 3.357-7.5 7.5v12c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-12c0-4.142-3.357-7.5-7.5-7.5zm-124.896 0c-4.143 0-7.5 3.357-7.5 7.5v12c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-12c0-4.142-3.358-7.5-7.5-7.5zm-135.023-140.087c-4.143 0-7.5 3.357-7.5 7.5v12c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-12c0-4.143-3.357-7.5-7.5-7.5zm83.84 13.489c-3.122-2.722-7.86-2.396-10.582.727-2.729 3.132-6.669 4.928-10.81 4.928s-8.08-1.796-10.81-4.928c-2.722-3.122-7.46-3.447-10.582-.727-3.123 2.722-3.447 7.46-.727 10.582 5.579 6.401 13.641 10.072 22.118 10.072 8.478 0 16.539-3.671 22.118-10.072 2.722-3.122 2.398-7.861-.725-10.582z" />
                    </g>
                </svg>
                <form action="#" method="POST">
                    <select name="select_asig">
                        <?php
                        $result = mysqli_query($mysqli, "SELECT * from asignatura WHERE id_docente='" . $_SESSION["id"] . "'");
                        while ($datos = mysqli_fetch_assoc($result)) {
                            echo "<option class='modal-input' value='" . $datos["id_asignatura"] . "'>" . $datos["asig_nombre"] . "</option>";
                        }
                        ?>
                    </select>
                    <button type="submit" name="submit">Mostrar</button>
                </form>
            </div>
            <div class="second-content-usr"><br>
                <?php
                if (isset($_POST["submit"])) {
                    $id_asig = $_POST["select_asig"];
                    $qr = mysqli_query($mysqli, "SELECT * from asignatura WHERE id_asignatura='" . $id_asig . "' ");
                    while ($d = mysqli_fetch_assoc($qr)) {
                        echo "<p>" . $d["asig_nombre"] . "</p>";
                    } // poner el nombre de la asignatura
                    $result2 = mysqli_query($mysqli, "SELECT * from notas,estudiantes WHERE notas.id_asig='" . $id_asig . "' AND notas.id_estudiante=estudiantes.id ORDER BY estudiantes.nombre ASC"); // obtener el qerry de los estudiantes
                    echo "
                    <table class='table-usr'>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Indentificacion</th>
                        </tr>
                    </thead>
                    <tbody>";
                    while ($datos2 = mysqli_fetch_assoc($result2)) {
                        echo "<tr>
                                <td>" . $datos2["nombre"] . "</td>
                                <td>" . $datos2["id"] . "</td>
                            <tr>";
                    }
                    echo "<tbody>
                    </table>";
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