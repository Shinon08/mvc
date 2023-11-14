<?php
    switch ($request_method) {
        case 'GET':
            require_once("./app/tareas/nuevo_usuario/view/registro_usuario.view.php");
            break;

        case 'POST':
            include_once("./app/tareas/repository/usuario.repository.php");

            $user_name = $_POST['usuario'];
            $password = $_POST['password'];

            $usuario = new Usuario(0, usuario:$user_name, password:$password);

            $ur = UsuariosRepository::getInstance();

            if ( !$ur->registerNewUsuario( $usuario ) ) {
                $error = UsuariosRepository::getInstance()->getMysqli()->error;
                if ( !isset($error) || $$error == "" )
                    $error = "Ya existe usuario con ese nombre, elija otro por favor";
                header("Location: /mvc/tareas/registro_usuario?error={$error}");
                break;
            }

            header("Location: /mvc/tareas/login");
            break;
        
        default:
            # code...
            break;
    }