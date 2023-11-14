<?php
 switch ($request_method){
    case 'GET':
        require_once ("./app/tareas/mi-lista/controller/mi-lista.controller.php");
        break;

    default:
        header("Location: .");
    break;
 }
?>