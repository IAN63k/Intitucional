<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleSession.css">
    <title>Mis grupos</title>
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
                    <a href="./groups.php">
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
                        <g>
                            <g>
                                <g>
                                    <path d="m458.438 10h-165.893v73.881l.601-.11c18.763-3.435 36.05 10.976 36.05 30.05 0 19.076-17.287 33.488-36.052 30.056l-.599-.11v67.438h75.44l-1.363 7.449c-3.48 19.019 11.064 36.963 30.397 36.68 18.847-.275 32.999-17.436 29.593-36.048l-1.479-8.081h68.618v-165.892c0-19.503-15.81-35.313-35.313-35.313z" fill="#ffd89e" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="m396.577 265.339c-11.805 0-22.955-5.196-30.671-14.315-7.08-8.369-10.503-19.038-9.684-29.818h-63.678c-5.522 0-10-4.477-10-10v-67.438c0-2.968 1.318-5.783 3.599-7.683 2.28-1.9 5.291-2.687 8.206-2.153l.599.11c6.015 1.102 12.158-.516 16.855-4.432 4.698-3.917 7.393-9.671 7.393-15.788 0-6.116-2.694-11.869-7.392-15.785-4.697-3.915-10.842-5.529-16.858-4.429l-.598.11c-2.921.535-5.926-.254-8.205-2.154s-3.598-4.714-3.598-7.682v-73.882c0-5.523 4.478-10 10-10h165.893c24.985 0 45.313 20.327 45.313 45.313v165.893c0 5.523-4.477 10-10 10h-56.797c.941 10.543-2.269 21.052-9.056 29.317-7.588 9.239-18.789 14.637-30.733 14.812-.196.003-.392.004-.588.004zm-94.032-64.133h65.439c2.967 0 5.781 1.318 7.682 3.597 1.899 2.279 2.69 5.284 2.155 8.203l-1.363 7.449c-1.154 6.309.565 12.742 4.717 17.65 4.021 4.752 9.605 7.308 15.698 7.231 6.048-.088 11.723-2.825 15.569-7.507 3.844-4.681 5.423-10.783 4.332-16.742l-1.478-8.082c-.534-2.919.256-5.924 2.156-8.203s4.714-3.597 7.681-3.597h58.617v-155.892c0-13.958-11.355-25.313-25.312-25.313h-155.893v53.452c8.028.769 15.716 3.931 22.064 9.223 9.27 7.727 14.586 19.08 14.586 31.147 0 12.068-5.316 23.422-14.586 31.149-6.349 5.293-14.036 8.456-22.064 9.226z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <path d="m218.857 427.608c-18.763 3.437-36.052-10.973-36.052-30.048v-.005c0-19.076 17.288-33.487 36.053-30.053l.598.109v-66.817h-61.336c-.692-15.903-13.821-29.168-30.531-29.168-16.71 0-29.839 13.265-30.531 29.168h-78.808v165.893c0 19.503 15.81 35.313 35.313 35.313h165.893v-74.502z" fill="#c4ead9" />
                                    </g>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="m420.662 337v-36.206h-68.618l1.479 8.081c3.406 18.613-10.746 35.773-29.593 36.048-19.333.282-33.878-17.661-30.397-36.68l1.363-7.449h-75.44v66.817l-.599-.11c-18.764-3.434-36.052 10.977-36.052 30.052v.006c0 19.075 17.289 33.485 36.052 30.048l.599-.11v74.503h165.893c19.503 0 35.313-15.81 35.313-35.313v-29.02" fill="#f5737f" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <path d="m220.055 173.36-.599.11v-73.882h-165.893c-19.503 0-35.313 15.81-35.313 35.313v165.893h78.808c.692-15.903 13.821-29.168 30.531-29.168 16.71 0 29.839 13.265 30.531 29.168h61.336v-67.438l.601.11c18.764 3.432 36.05-10.979 36.05-30.055-.001-19.075-17.289-33.486-36.052-30.051z" fill="#8481e2" />
                                    </g>
                                </g>
                                <path d="m420.661 347c5.523 0 10-4.477 10-10v-36.206c0-5.523-4.477-10-10-10h-68.617c-2.967 0-5.781 1.318-7.681 3.597s-2.69 5.284-2.156 8.203l1.479 8.082c1.091 5.959-.488 12.061-4.333 16.742-3.846 4.683-9.521 7.419-15.568 7.507-6.1.068-11.678-2.479-15.698-7.231-4.152-4.908-5.871-11.341-4.717-17.649l1.363-7.45c.534-2.919-.256-5.924-2.155-8.204-1.9-2.279-4.715-3.597-7.682-3.597h-65.44v-47.009c8.029-.77 15.716-3.932 22.065-9.225 9.27-7.728 14.585-19.081 14.585-31.149s-5.316-23.421-14.586-31.148c-6.349-5.292-14.036-8.454-22.064-9.223v-63.452c0-5.523-4.477-10-10-10h-165.893c-24.986 0-45.313 20.327-45.313 45.313v331.786c0 24.986 20.327 45.313 45.313 45.313h331.786c24.985 0 45.313-20.327 45.313-45.313v-29.021c0-5.523-4.477-10-10-10-5.522 0-10 4.477-10 10v29.021c0 13.957-11.355 25.313-25.313 25.313h-155.893v-64.502c0-2.966-1.317-5.78-3.595-7.68s-5.284-2.691-8.201-2.158l-.605.11c-6.016 1.101-12.161-.512-16.857-4.427-4.698-3.915-7.393-9.668-7.393-15.79 0-6.116 2.694-11.87 7.393-15.786 4.698-3.917 10.841-5.532 16.863-4.429l.599.109c2.915.531 5.922-.258 8.201-2.158 2.278-1.9 3.595-4.713 3.595-7.68v-56.817h53.678c-.82 10.78 2.603 21.448 9.684 29.817 7.844 9.271 19.272 14.499 31.258 14.312 11.943-.174 23.145-5.573 30.733-14.812 6.787-8.264 9.997-18.774 9.056-29.317h46.797v26.208c-.001 5.523 4.477 10 9.999 10zm-392.411-212.099c0-13.957 11.356-25.313 25.313-25.313h155.893v63.881c0 2.967 1.317 5.78 3.596 7.68 2.279 1.899 5.284 2.688 8.202 2.157l.599-.109s.002-.001.003-.001c6.015-1.1 12.161.513 16.859 4.429 4.698 3.917 7.392 9.67 7.392 15.786s-2.694 11.871-7.392 15.787-10.842 5.531-16.858 4.431l-.601-.11c-2.919-.534-5.924.256-8.203 2.156s-3.597 4.714-3.597 7.681v57.438h-42.908c-4.904-16.948-20.503-29.168-38.959-29.168s-34.054 12.22-38.958 29.168h-60.381zm159.142 231.504c-9.27 7.727-14.587 19.081-14.587 31.155 0 12.068 5.317 23.421 14.587 31.148 6.349 5.292 14.037 8.453 22.064 9.221v54.071h-155.893c-13.957 0-25.313-11.355-25.313-25.313v-155.893h68.809c5.354 0 9.758-4.217 9.991-9.565.478-10.992 9.5-19.602 20.54-19.602 11.039 0 20.062 8.61 20.54 19.602.233 5.349 4.637 9.565 9.991 9.565h51.336v46.388c-8.03.769-15.717 3.931-22.065 9.223z" />
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <path d="" fill="#f5737f" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="m420.66 396.81c-4.188 0-7.991-2.697-9.407-6.632-1.391-3.865-.201-8.335 2.938-10.99 3.281-2.776 8.094-3.123 11.746-.864 3.502 2.167 5.341 6.406 4.533 10.446-.923 4.618-5.104 8.04-9.81 8.04z" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <form action="#" method="POST">
                    <select name="select_asig">
                        <?php
                        $result = mysqli_query($mysqli, "SELECT * from asignatura WHERE id_docente='" . $_SESSION["id"] . "'");
                        while ($datos = mysqli_fetch_assoc($result)) {
                            echo "<option class='modal-input' value='" . $datos["id_grupo"] . "'>" . $datos["asig_nombre"] . "</option>";
                        }
                        ?>
                    </select>
                    <button type="submit" name="submit">Mostrar</button>
                </form>
            </div>
            <div class="second-content-usr"><br>

                <?php
                if (!isset($_POST["submit"])) {
                    # Tabla de inicio
                    $result = mysqli_query($mysqli, "SELECT * from asignatura,grupos WHERE asignatura.id_docente='" . $_SESSION["id"] . "' AND asignatura.id_grupo=grupos.id_gp"); // obtener el query de los grupos
                    echo "
                    <table class='table-usr'>
                    <thead>
                        <tr>
                            <th>Asignatura</th>
                            <th>Grupo</th>
                        </tr>
                    </thead>
                    <tbody>";
                    while ($datos = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>" . $datos["asig_nombre"] . "</td>
                                <td>" . $datos["grupo"] . "</td>
                            </tr>";
                    }
                    echo "<tbody>
                    </table>";
                }



                if (isset($_POST["submit"])) {
                    $id_asig = $_POST["select_asig"];
                    $qr = mysqli_query($mysqli, "SELECT * from grupos WHERE id_gp='" . $id_asig . "' ");
                    while ($d = mysqli_fetch_assoc($qr)) {
                        echo "<p>" . $d["grupo"] . "</p>";
                    } // poner el nombre de la asignatura
                    $result2 = mysqli_query($mysqli, "SELECT * from asignatura,grupos WHERE asignatura.id_grupo='" . $id_asig . "' AND asignatura.id_grupo=grupos.id_gp AND asignatura.id_docente= '" . $_SESSION["id"] . "' "); // obtener el query de los grupos
                    echo "
                    <table class='table-usr'>
                    <thead>
                        <tr>
                            <th>Asignatura</th>
                            <th>Grupo</th>
                        </tr>
                    </thead>
                    <tbody>";
                    while ($datos2 = mysqli_fetch_assoc($result2)) {
                        echo "<tr>
                                <td>" . $datos2["asig_nombre"] . "</td>
                                <td>" . $datos2["grupo"] . "</td>
                            </tr>";
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