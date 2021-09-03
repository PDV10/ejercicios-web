<?php
    require_once("elementos.php");
    require_once("secciones.php");

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = "home";
    }

    $params = explode("/", $action);
    
    switch ($params[0]){
        case 'listar':
            imprimir($params[1]);
            break;
        case 'home':
            home();
            break;
        default:
            echo "error";
            break;
    }
    
    /* tabla de ruteo : son url asociadas a acciones (en este caso hay 2 acciones)
        listar/:valor ---> listar(valor) 
        home ---> home()
        --------------------------------------
        eliminar/:valor ---> eliminar(valor)
    */