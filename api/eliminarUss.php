<?php
    $id=$_GET['id'];
    
    if (!($enlace = mysqli_connect("localhost" . ":" . "3306", "root", ""))) {
        echo "Error conectando a la base de datos.";
        exit();
    }

    if (!mysqli_select_db($enlace, "aridosSoftware")) {

        echo "Error selccionando la base de datos. ";
        exit();
    } 
    
    $qDelete="DELETE FROM usuarios WHERE ID=$id";
    $a=mysqli_query($enlace, $qDelete);
    if(!$a){
        echo "no elimino";
    }
    $qDelete="DELETE FROM ussSeguridad WHERE IDusuario=$id";
    $a=mysqli_query($enlace, $qDelete);
    if(!$a){
        echo "no elimino";
    }
    $qDelete="DELETE FROM lvAcceso WHERE IDuss=$id";
    $a=mysqli_query($enlace, $qDelete);
    if(!$a){
        echo "no elimino";
    }
    header("Location: ../listado.html");

?>