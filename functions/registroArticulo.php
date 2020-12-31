<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
    spl_autoload_register(function ($class) {
    include "../class/$class/$class.class.php";
    });

    $session = new Session();
    if (! $session->validateSession('id')) {
        header('location: login/login.php?message=Debes iniciar sesión&type=warningMessage');
    }
    include "../config/conexion.php";

    $conexion = mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
    $categorie_id=$_POST['categorie_id'];
    $autor = $session->getValue('usuario');
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "INSERT INTO `articulo`(`categoria_id`, `autor`, `titulo`, `contenido`, `fecha`, `img`) VALUES ('$categorie_id','$autor','$title','$content','". date('Y-m-d') ."','')";
    $result = mysqli_query($conexion, $sql);
    if ($result==false) {
        echo "Error en el registro";
        echo $sql;
    } else {
        //header("location:../dashboard/post.php");
        echo $sql; 
    }
?>