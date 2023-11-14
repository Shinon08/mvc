<?php
 switch ($request_method) {
    case 'GET':
        require_once ("./app/presentacion/view/Presentacion shinon.html");
        break;
    
    default:
        header("HTTP/1.1 400 NOT FOUND");
        break;
 }
?>