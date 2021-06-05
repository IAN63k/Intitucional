<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleSession.css">
    <title>Mis asignaturas</title>
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
                    <a href="./teacherSession.php">
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
                            <img src="<?php $result = mysqli_query($mysqli, "SELECT * from docentes WHERE id = '" . $_SESSION["id"] . "' ");
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
                    <a href="./courses.php">
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
            <div class="house">
                <svg height="105" viewBox="0 0 58 58" width="105" xmlns="http://www.w3.org/2000/svg">
                    <g id="Page-1" fill="none" fill-rule="evenodd">
                        <g id="030---Messy-Books" fill-rule="nonzero">
                            <path id="Shape" d="m5.72 52.21-5.55-31.51c-.05359011-.3041252-.08699643-.6114633-.1-.92-.08248096-3.5724087 2.48267266-6.6582757 6.01-7.23l10.71-1.89-.29 41.55z" fill="#35495e" />
                            <path id="Shape" d="m46.94 50.83c-.1857191.771023-.8094746 1.3594717-1.59 1.5l-31.52 5.56c-1.9867206.3468301-4.02657856-.1786842-5.59841615-1.4422808-1.57183758-1.2635966-2.52340318-3.1428808-2.61158385-5.1577192-.07876599-3.4155632 2.27277316-6.4084312 5.61-7.14l8.83 2.48h-.01l-7.95 1.41c-.8866555.1558432-1.656734.7009972-2.0983662 1.4854753-.44163213.7844782-.50828985 1.7256321-.1816338 2.5645247.5656214 1.3511449 2.0021594 2.1195258 3.44 1.84l24.09-4.25z" fill="#2c3e50" />
                            <path id="Shape" d="m20.05 46.63-7.95 1.41c-.8866555.1558432-1.656734.7009972-2.0983662 1.4854753-.44163213.7844782-.50828985 1.7256321-.1816338 2.5645247.5656214 1.3511449 2.0021594 2.1195258 3.44 1.84l24.09-4.25z" fill="#f9eab0" />
                            <path id="Shape" d="m12.826 33.171 5.557-31.514c.1989194-1.08324679 1.2310871-1.80580869 2.317-1.622l31.277 5.515c3.5298611.57216709 6.0970156 3.66000793 6.015 7.235-.0136036.3071659-.0470063.6131344-.1.916l-5.557 31.514z" fill="#e64c3c" />
                            <path id="Shape" d="m45.438 10.474c-.0586532-.0000276-.1171977-.0050457-.175-.015l-22.651-3.994c-.5111685-.12606546-.837041-.62687769-.7452297-1.14529488.0918113-.5184172.5698565-.87685619 1.0932297-.81970512l22.65 3.989c.5108329.08948831.8684834.55465053.8237134 1.07132656-.0447699.51667604-.4771014.91338644-.9957134.91367344z" fill="#3f5c6c" />
                            <path id="Shape" d="m40.63 14.7c-.0587024.0000849-.1172863-.0052713-.175-.016l-14.772-2.601c-.5314773-.1077828-.8801906-.6195404-.7860712-1.1536068.0941194-.5340663.5967671-.8957872 1.1330712-.8153932l14.773 2.6c.5138125.0868279.8748237.55367.8296023 1.0728015-.0452214.5191314-.4815156.9165204-1.0026023.9131985z" fill="#3f5c6c" />
                            <rect id="Rectangle-path" fill="#ecf0f1" height="12" rx="1" transform="matrix(.985 .174 -.174 .985 4.511 -5.088)" width="23" x="19.833" y="17.234" />
                            <path id="Shape" d="m57.99 12.78c-.0119064.3086184-.0453208.6160308-.1.92l-5.56 31.51-7.71-2.35 4.47-25.34 1.06-5.98 1.08-6.12.75.13c3.5257169.57454224 6.0894162 3.6586597 6.01 7.23z" fill="#c03a2b" />
                            <path id="Shape" d="m46.42 37.06-31.28-5.51c-.1156046-.0199087-.2326936-.0299449-.35-.03-1.0364668.0026285-1.8991916.7966438-1.9876335 1.8293337-.088442 1.0326898.6267071 1.9618379 1.6476335 2.1406663l31.51 5.55c.8858791.1604248 1.6536061.708589 2.0929592 1.4943923.439353.7858033.5042941 1.7269044.1770408 2.5656077-.5625614 1.3481553-1.9969395 2.1134358-3.43 1.83l-31.39-5.53c-.1156046-.0199087-.2326936-.0299449-.35-.03-1.0383851-.0025575-1.9060067.7899765-1.9971986 1.8243528-.0911918 1.0343762.624383 1.9664868 1.6471986 2.1456472l31.52 5.55c1.9852737.3480364 4.0242759-.1756778 5.5960992-1.4373484 1.5718232-1.2616705 2.5242277-3.1390976 2.6139008-5.1526516.0784876-3.576507-2.4892143-6.6645738-6.02-7.24z" fill="#802f34" />
                            <path id="Shape" d="m48.23 45.1c-.5625614 1.3481553-1.9969395 2.1134358-3.43 1.83l-31.39-5.53 1.04-5.91 31.51 5.55c.8858791.1604248 1.6536061.708589 2.0929592 1.4943923.439353.7858033.5042941 1.7269044.1770408 2.5656077z" fill="#f9eab0" />
                        </g>
                    </g>
                </svg>
                <a href="./coursesDetails.php">*Selecione para ver estudiantes</a>
            </div>
            <div class="second-content content_scnd"><br>
                <?php
                $result = mysqli_query($mysqli, "SELECT * from asignatura WHERE id_docente='" . $_SESSION["id"] . "'");
                while ($datos = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $datos["asig_nombre"] . "</p>";
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