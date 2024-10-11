<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once "autoload.php";

if (isset($_GET['controller'])){
    $nombreController = $_GET['controller']."Controller";
}
else{
    //Controlador per dedecte
    $nombreController = "LoginController";
}
if (class_exists($nombreController)){
    $controlador = new $nombreController();
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action ="verLogin";
    }
    $controlador->$action();
}else{

    echo "No existe el controlador";
}
?>
</body>
</html>


