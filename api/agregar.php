<?php 
    
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

    mysqli_query($enlace, "INSERT INTO usuarios(ID, Nombre, Password, fechaHora, Estado, IDgrupo)VALUES(DEFAULT, '$name', '$pass', '$fecha', $estado, $grupo)");
    
    // ID de uss
    $query="SELECT ID FROM usuarios WHERE Nombre='$name'";
    $result=mysqli_query($enlace, $query);
    $row=mysqli_fetch_assoc($result);
    foreach(array_values($row) as $u){

        $id_uss=$u;
    }

    //id grupo
    $query="SELECT IDgrupo FROM usuarios WHERE Nombre='$name'";
    $result=mysqli_query($enlace, $query);
    $row=mysqli_fetch_assoc($result);
    foreach(array_values($row) as $g){

        $id_g=$g;
    }
    
    //array de permisos checkbox
    $lectura=0;
    $escritura=0;
    $admin=0;
    if(!empty($_POST['permiso'])){
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
        
    }

    //insert en tabla lvAcceso
    mysqli_query($enlace, "INSERT INTO lvAcceso (ID, Lectura, Escritura, Administrador, Propietario, IDuss)VALUES(DEFAULT, $lectura, $escritura, $admin, 0, $id_uss)");

    // ID de lv-uss
    $query="SELECT ID FROM lvAcceso WHERE lvAcceso.IDuss = $id_uss";
    $result=mysqli_query($enlace, $query);
    $row=mysqli_fetch_assoc($result);
    foreach(array_values($row) as $u){
        $id_lv=$u;
    }
    echo $id_lv;
    //insert ussSeguridad 
    $ussSeg="INSERT INTO ussSeguridad (ID, IDgrupo, IDacceso, IDusuario) VALUES (DEFAULT, $id_g, $id_lv, $id_uss)";
    
    if(!mysqli_query($enlace, $ussSeg)){
        echo "Error al cargar usuario seguridad";
    }

    mysqli_close($enlace);
    
    header("Location: ../listado.html");
?>
