<?php
if (!isset($path_components[2]))
    $path_components[2] = '';

switch ($path_components[2]) {
    case '':
        if (!checkSession()) {
            header("Location: /mvc/tareas/login ");
            exit();
        }
        header("Location: /mvc/tareas/mi-lista");
        break;

    case 'mi-lista':
        if (!checkSession()) {
            header("Location: /mvc/tareas/login ");
            exit();
        }
        require_once("./app/tareas/mi-lista/controller/mi-lista.controller.php");
        break;

    case 'registro':
        if (!checkSession()) {
            header("Location: /mvc/tareas/login ");
            exit();
        }
        require_once("./app/tareas/registro/controller/registro.controller.php");
        break;

    case 'completar':
        if (!checkSession()) {
            header("Location: /mvc/tareas/login ");
            exit();
        }

        if ( !isset( $query_params ) || !isset( $query_params['id'] ) ) {
            header("Location: /mvc/tareas/mi-lista ");
            exit();
        }
        include_once("./app/tareas/repository/tareas.repository.php");
        $tarea = TareasRepository::getInstance()->getTareaById( $query_params['id'] );

        if ( !$tarea ){
            header("Location: /mvc/tareas/mi-lista ");
            break;
        }

        $tarea->setStatus("Completado");

        if ( TareasRepository::getInstance()->editTarea( $tarea ) ) {
            header("Location: /mvc/tareas/mi-lista ");
        }
        break;

    case 'login':
        if (checkSession()) {
            header("Location: /mvc/tareas/mi-lista ");
            exit();
        }
        require_once("./app/tareas/login/controller/login.controller.php");
        break;

    case 'registro_usuario':
        if (checkSession()) {
            header("Location: /mvc/tareas/mi-lista ");
            exit();
        }
        require_once("./app/tareas/nuevo_usuario/controller/registro_usuario.controller.php");
        break;

    case 'recovery':
        if (checkSession()) {
            header("Location: /mvc/tareas/mi-lista ");
            exit();
        }
        require_once("./app/tareas/recovery/controller/recovery.controller.php");
        break;
    
    case 'recovery-s2':
        if (checkSession()) {
            header("Location: /mvc/tareas/mi-lista ");
            exit();
        }
        require_once("./app/tareas/recovery/controller/recovery-step2.controller.php");
        break;

    case 'log-out':
        session_destroy();

    default:
        header("Location: /mvc/tareas/login");
        break;
}
