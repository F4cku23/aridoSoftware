<?php
    $id=$_GET['id'];

    $name=$_POST['nombre'];
    $pass=$_POST['password'];
    $estado=$_POST['estado'];
    $grupo=$_POST['grupo'];
    $permisos=$_POST['permiso'];
    $fecha=date('d/m/y');

    if (!($enlace = mysqli_connect("localhost" . ":" . "3306", "root", ""))) {
        echo "Error conectando a la base de datos.";
        exit();
    }

    if (!mysqli_select_db($enlace, "aridosSoftware")) {

        echo "Error selccionando la base de datos. ";
        exit();
    } 

        //array de permisos checkbox
//        if(!empty($_POST['permiso'])){
        $lectura=0;
        $escritura=0;
        $admin=0;
            foreach($_POST['permiso'] as $selected){
                if($selected=='Lectura'){
                    $lectura=1;
                }
                if($selected=='Escritura'){
                    $escritura=1;
                }
                if($selected=='Administrador'){
                    $admin=1;
                }
            }
        //}

    $udp="UPDATE usuarios SET Nombre='$name', Password='$pass', fechaHora='$fecha', Estado='$estado', IDgrupo=$grupo WHERE ID=$id";
            
    // ID de lv-uss
    $query="SELECT ID FROM lvAcceso WHERE lvAcceso.IDuss = $id";
    $result=mysqli_query($enlace, $query);
    $row=mysqli_fetch_assoc($result);
    foreach(array_values($row) as $u){
        $id_lv=$u;
    }

    $udpLV="UPDATE lvAcceso SET ID=$id_lv, Lectura=$lectura, Escritura=$escritura, Administrador=$admin, Propietario=0, IDuss=$id WHERE lvAcceso.IDuss = $id";

    $updUS="UPDATE ussSeguridad SET IDgrupo=$grupo WHERE IDusuario=$id";

    if(!mysqli_query($enlace, $updUS)){
        echo "Error al cargar ussSeguridad";
    }
    if(!mysqli_query($enlace, $udp)){
        echo "Error al cargar usuario";
    }
    if(!mysqli_query($enlace, $udpLV)){
        echo "Error al cargar nivel acceso";
    }

    mysqli_close($enlace);
    header("Location: ../listado.html");

?>