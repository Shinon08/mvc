<?php
switch ($request_method) {
    case 'GET':
        require_once("./app/registro/view/formularioGet.html");
        break;

    case 'POST':
        require_once("./app/registro/view/POST.php");
        break;

    default:
        header("HTTP/1.1 404 Not Found");
        break;
}
?>