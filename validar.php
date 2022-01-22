<?php
    $name=$_POST['nombre'];
    $passw=$_POST['password'];
    session_start();

    $_SESSION['password']=$passw;
    $conn=mysqli_connect("localhost" . ":" . "3306", "root", "");
    $consulta="SELECT * FROM usuarios WHERE Password='$passw' and Nombre='$name'";
    $resultado=mysqli_query($conn, $consulta);
    $fila=mysqli_num_rows($resultado);

    if($filas){
        header("Location: home.php");
    }else{
        include("index.php");
        ?>
        <h3 class="error">DATOS INCONRRECTOS</H3>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conn);
    

?>