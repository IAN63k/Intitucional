<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleSession.css">
    <title>Dashboard</title>
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
                        <li class="item"><a href="">
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
                    <a href="./adminSession.php">
                        <svg clas='icon_refresh' id="arrow" version="1.1" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                            <g>
                                <path d="M480.6,235.6c-11.3,0-20.4,9.1-20.4,20.4c0,112.6-91.6,204.2-204.2,204.2c-112.6,0-204.2-91.6-204.2-204.2   S143.4,51.8,256,51.8c61.5,0,118.5,27.1,157.1,73.7h-70.5c-11.3,0-20.4,9.1-20.4,20.4s9.1,20.4,20.4,20.4h114.6   c11.3,0,20.4-9.1,20.4-20.4V31.4c0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4v59C390.7,40.1,325.8,11,256,11   C120.9,11,11,120.9,11,256c0,135.1,109.9,245,245,245s245-109.9,245-245C501,244.7,491.9,235.6,480.6,235.6z" />
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="header-menu">
                    <a class="menu-link is-active" href="#">Dashboard</a>
                    <a class="menu-link" href="./teachers.php">Profesores</a>
                    <a class="menu-link" href="./students.php">Estudiantes</a>
                    <a class="menu-link" href="./courseDetails.php">Asignaturas</a>
                </div>
            </div>
            <br><br>
            <div class="house">
                <svg id="house" enable-background="new 0 0 511.925 511.925" height="105" viewBox="0 0 511.925 511.925" width="150" xmlns="http://www.w3.org/2000/svg">
                    <g id="_x30_8_home">
                        <path ;" d="m430.772 276.2v191.784c0 8.324-6.771 15.096-15.096 15.096h-11.63c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h11.63c16.595 0 30.096-13.501 30.096-30.096v-176.17l15.266 15.891c6.894 7.176 18.337 7.298 25.381.254l20.338-20.339c6.792-6.79 6.904-17.95.25-24.877l-230.822-240.279c-11.035-11.487-29.402-11.497-40.445 0l-230.823 240.279c-6.653 6.926-6.541 18.086.25 24.877l20.339 20.339c7.038 7.036 18.479 6.93 25.382-.254l15.264-15.889v36.432c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-52.047l169.108-176.038c3.11-3.237 8.282-3.246 11.404 0 134.776 140.297 108.094 112.523 169.108 176.037zm65.378.812-20.339 20.34c-1.33 1.095-2.649 1.082-3.957-.04l-199.372-207.539c-.001-.001-.001-.001-.002-.002-.01-.011-.021-.02-.031-.031-9.023-9.358-23.99-9.354-33.006.032l-171.2 178.213c-.004.004-.007.009-.011.013l-28.161 29.314c-1.308 1.122-2.628 1.135-3.958.039l-20.339-20.339c-1.059-1.059-1.076-2.799-.039-3.878l230.822-240.279c5.139-5.349 13.674-5.348 18.811.001l230.821 240.277c1.038 1.08 1.021 2.821-.039 3.879z" />
                        <path d="m368.897 483.079h-44.493v-84.919c0-37.738-30.703-68.44-68.442-68.44-37.738 0-68.441 30.702-68.441 68.44v84.919h-91.273c-8.324 0-15.096-6.771-15.096-15.096v-104.736c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v104.736c0 16.595 13.501 30.096 30.096 30.096h272.649c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5zm-166.376-84.918c0-29.467 23.974-53.44 53.441-53.44s53.441 23.974 53.441 53.44v84.919h-106.882z" />
                    </g>
                </svg>
            </div>
            <br><br>
            <div class="second-content content_scnd"><br>
                <div class="welcome">
                    <p>Bienvenido,
                        <?php echo " " . $_SESSION['nombre'] . " 🙋‍♂️"; ?>
                    </p>
                </div>

                <div id="container">
                    <!--  Tasks List  -->
                    <div id="tasks">
                        <div id="notification">Lo siento, tu lista de tareas está vacía.</div>
                        <ul id="tasksList">
                            <?php
                            # Aqui deberia poner los li que van dentro de la lista de tareas
                            //echo "<li  name='taskLi' >" . $_POST["task_todo"] . " <button class='delete' >&#10006</button> </li>";
                            #Por ahora entan el el script
                            ?>
                        </ul>
                    </div>

                    <div id="footer">
                        <!-- si pongo un form no me funciona el script -->
                        <input id="taskInput" type="text" placeholder="Tus tareas" name="task_todo" autocomplete="off" />
                        <button id="taskAdd" name="task_btn">+</button>
                        <!-- form -->
                    </div>
                </div>
                <!-- partial -->
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
                <script src="../todo_task.js"></script>
            </div>
        </div>
    </main>
</body>

</html>

<!-- partial -->
<script src="../script.js"></script>