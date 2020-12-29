<?php
    include "../config/conexion.php";

    $conexion = mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
    $categoria=$_POST['categoria'];
    $sql = "INSERT INTO categoria (categoria) VALUES ('$categoria')";
    $result = mysqli_query($conexion, $sql);
    if ($result==false) {
        echo "Error en el registro";
    } else {
        //header("location:../dashboard/post.php");
        echo '<script type="text/javascript"> alert("Categoría registrada correctamente");
        window.location="../dashboard/post.php"; </script>'; 
    }
?>