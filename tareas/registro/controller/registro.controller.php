<?php

 switch ($request_method){
    case 'GET':
        require_once ("./app/tareas/registro/view/formulario.html");
        break;

    case 'POST':
        
    
    default:
        header("Location: /mvc/tareas/mi-lista");
    break;
 }
?>