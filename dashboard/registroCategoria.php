<?php
    $servidor="localhost";
    $usuarioBD="root";
    $pwdBD="";
    $nomBD="blogbd";
    
    $conexion = mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
    $categoria=$_POST['categoria'];
    $sql = "INSERT INTO Categoria (categoria) VALUES ('$categoria')";
    $result = mysqli_query($conexion, $sql);
    if ($result==false) {
        echo "Error en el registro";
    } else {
        header("location:dashboard.php");
    }
?>